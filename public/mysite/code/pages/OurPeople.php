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
    'FilterForm'
	);

  public function init() {
		parent::init();
	}

  public function FilterForm()
  {
      $data = Session::get('filter');
      // Create fields 
      $teamDDL = new DropdownField('Team', 'Team', Dataobject::get("Team")->map("ID", "Name"));
      $teamDDL->setEmptyString('Team');
      $teamDDL->setValue($data['Team']);

      $expertiseDDL = new DropdownField('Expertise', 'Expertise', Dataobject::get("Expertise")->map("ID", "Title"));
      $expertiseDDL->setEmptyString('Expertise');
      $expertiseDDL->setValue($data['Expertise']);

      $officeDDL = new DropdownField('Office', 'Office', Dataobject::get("Office")->map("ID", "Name"));
      $officeDDL->setEmptyString('Office');
      $officeDDL->setValue($data['Office']);

      $fields = new FieldList(
          $teamDDL,
          $expertiseDDL,
          $officeDDL
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
            $filter['OfficeID'] = $item;
          }
          if($id == 'Team'){
            $filter['TeamID'] = $item;
          }
          if($id == 'Expertise'){
            $filter['Expertises.ID'] = $item;
          }
        }
      }
    }
    
    return Profile::get()->filter($filter);
  }





	
}
