<?php

class OurPeople extends Page{	

  private static $allowed_children = array(
    'Profile',
  );

  /**
  * @var array
  */
  private static $has_one = array(      
      'HeaderImage' => 'Image'
  );  

	/**
	 * @var array
	 */
	private static $has_many = array(
		'Profiles' => 'Profile',
	);

  /**
	 * {@inheritdoc}
	 */
	public function getCMSFields() {

    $fields = parent::getCMSFields();


    $uploadField = UploadField::create('HeaderImage',  'Header Image');
    $uploadField->setFolderName('general-headers');
		$uploadField->getValidator()->setAllowedExtensions(array('jpg', 'jpeg', 'png', 'gif'));

    $fields->insertBefore($uploadField, 'Content');

		return $fields;
	}
	
}

class OurPeople_Controller extends Page_Controller{
	
	private static $allowed_actions = array (
    'FilterForm',
    'filter',
	);

  public function init() {
		parent::init();
	}

  public function FilterForm()
  {
      $data = Session::get('filter');
      // Create fields 
      $teamDDL = new DropdownField('Team', 'Team', Dataobject::get("Team")->map("ID", "Title"));
      $teamDDL->setEmptyString('Team');
      $teamDDL->setValue($data['Team']);

      $positionDDL = new DropdownField('Position', 'Position', Dataobject::get("Position")->map("ID", "Title"));
      $positionDDL->setEmptyString('Position');
      $positionDDL->setValue($data['Position']);

      $officeDDL = new DropdownField('Office', 'Office', Dataobject::get("Office")->map("ID", "Title"));
      $officeDDL->setEmptyString('Office');
      $officeDDL->setValue($data['Office']);

      $search = new TextField('Search', 'Search');      
      $search->setAttribute('placeholder', 'Search');
      $search->addExtraClass('filter-search');
      $search->setValue($data['Search']);

      $fields = new FieldList(
          $teamDDL,
          $positionDDL,
          $officeDDL,
          $search
      );

      // Create actions
      $actions = new FieldList(
          new FormAction('doFilterForm', 'Submit')
      );

      return new Form($this, 'FilterForm', $fields, $actions);
  }

  public function doFilterForm($data, $form) {    
    Session::set('filter',$data);
    return $this->redirectBack();
  }

  public function profileList(){
    $data = Session::get('filter');

    //->filter(array('Expertises.ID:Equals' => 2));

    $filter = array();

    if($data != null){
      foreach($data as $id => $item){
        if($data[$id] == ''){
          unset($data[$id]);
        }else{
          if($id == 'Office'){
            $filter['OfficeList.ID'] = $item;
          }
          if($id == 'Team'){
            $filter['TeamList.ID'] = $item;
          }
          if($id == 'Position'){
            $filter['PositionList.ID'] = $item;
          }
          if($id == 'Search'){
            $filter['Name:PartialMatch'] = $item;
            //$filter['Bio:PartialMatch'] = $item;
          }
        }
      }
    }

    //var_dump($filter);
    //exit();
    
    return Profile::get()->filter($filter);
  }


  function filter($data, $form){
    if($data['category'] == 'category'){
      return $this->redirect('/helpful-reading');
    }else{
      return $this->redirect('/helpful-reading/category/'.$data['category']);
    }
        
        
    }





	
}
