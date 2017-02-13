<?php
class Profile extends Page {

    /**
     * @var array
     */
    private static $db = array(
        'Name' => 'Varchar(400)',
        'Position' => 'Varchar(400)',
        'Phone' => 'Varchar(400)',
        'Mobile' => 'Varchar(400)',
        'PA' => 'Varchar(400)',
        'Email' => 'Varchar(400)',
        'Linkedin' => 'Varchar(400)',
        'Bio' => 'HTMLText'
    );

    /**
     * @var array
     */
    private static $has_one = array(
        'ProfileImage' => 'Image',
        'Office' => 'Office',
        'Team' => 'Team'
    );

    private static $many_many = array(
      'Expertises' => 'Expertise',
      'Articles' => 'Article'
    );

    /**
     *
     * @var string
     */
	private static $default_sort = '"Position" ASC';

  /**
	 * {@inheritdoc}
	 */
	public function getCMSFields() {

    $fields = parent::getCMSFields();

		$Name = TextField::create('Name', 'Name');
		$Name->Required();
		$Name->setCustomValidationMessage('A Name is required.');

    $Positionlist = array(''=>'Select Position','Partner' => 'Partner','Junior' => 'Junior');
    
    $Position = DropdownField::create('Position','Position',$Positionlist);
    $Position->Required();
    $Position->setCustomValidationMessage('A Position is required.');

    $Phone = TextField::create('Phone', 'Phone');
		$Phone->Required();
		$Phone->setCustomValidationMessage('A Phone is required.');

    $Mobile = TextField::create('Mobile', 'Mobile');

    $PA = TextField::create('PA', 'PA');

    $Email = TextField::create('Email', 'Email');
		$Email->Required();
		$Email->setCustomValidationMessage('A Email is required.');

    $Linkedin = TextField::create('Linkedin', 'Linkedin');
		$Linkedin->Required();
		$Linkedin->setCustomValidationMessage('A Linkedin is required.');

    $Officelist = Dataobject::get("Office")->map("ID", "Name", "Please Select");
    
    $Office = DropdownField::create('OfficeID','Office',$Officelist);
    $Office->Required();
    $Office->setCustomValidationMessage('A Office is required.');

    $Teamlist = Dataobject::get("Team")->map("ID", "Name", "Please Select");
    
    $Team = DropdownField::create('TeamID','Team',$Teamlist);
    $Team->Required();
    $Team->setCustomValidationMessage('A Team is required.');

    $tagField = TagField::create(
				'Expertises',
				'Expertise',
				Expertise::get(),
				$this->Expertises()
			)
			->setShouldLazyLoad(true) // tags should be lazy loaded
			->setCanCreate(true);     // new tag DataObjects can be created


    $Bio = HtmlEditorField::create('Bio', 'Bio');
		$Bio->Required();
		$Bio->setCustomValidationMessage('A Bio is required.');

    $uploadField = UploadField::create('ProfileImage',  'Profile Image');
    $uploadField->setFolderName('profiles');
		$uploadField->getValidator()->setAllowedExtensions(array('jpg', 'jpeg', 'png', 'gif'));


		$fieldlist = new FieldList(
			$Name,
      $Position,
      $Email,
      $Phone,
      $Mobile,
      $PA,      
      $Linkedin,
      $Office,
      $Team,
      $tagField,
      $uploadField,
      $Bio
		);

    $fields->addFieldsToTab('Root.Profile', $fieldlist);

		//$this->extend('updateCMSFields', $fields);

		return $fields;
	}
	

}

class Profile_Controller extends Page_Controller{
	

	
	
}