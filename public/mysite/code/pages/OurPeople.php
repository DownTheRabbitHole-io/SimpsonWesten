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
      // Create fields
      $fields = new FieldList(
          new DropdownField('Team', 'Team', Dataobject::get("Team")->map("ID", "Name", "Please Select")),
          new DropdownField('Expertise', 'Expertise', Dataobject::get("Expertise")->map("ID", "Title", "Please Select")),
          new DropdownField('Office', 'Office', Dataobject::get("Office")->map("ID", "Name", "Please Select"))

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
    $filter = Session::get('filter');
    //var_dump($filter);
    //exit();
    //->filter(array('Expertises.ID:Equals' => 2));
    return Profile::get()->filter(array('OfficeID' => $filter['Office'], 'TeamID' => $filter['Team']));
  }



	
}
