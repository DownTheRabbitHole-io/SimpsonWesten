<?php
class Profile extends Page {

    /**
     * @var array
     */
    private static $db = array(
        'Name' => 'Varchar(400)',
        'Position' => 'Varchar(400)',
        'Phone' => 'Varchar(400)',
        'Email' => 'Varchar(400)',
        'Linkedin' => 'Varchar(400)',
        'Office' => 'Varchar(400)',
        'Bio' => 'HTMLText'
    );

    /**
     * @var array
     */
    private static $has_one = array(
        'OurPeople' => 'OurPeople',
        'ProfileImage' => 'Image',
    );

    private static $many_many = array(
      'ServiceTags' => 'ServiceTag',
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

    $Email = TextField::create('Email', 'Email');
		$Email->Required();
		$Email->setCustomValidationMessage('A Email is required.');

    $Linkedin = TextField::create('Linkedin', 'Linkedin');
		$Linkedin->Required();
		$Linkedin->setCustomValidationMessage('A Linkedin is required.');

    $Officelist = array(''=>'Select Office','Takapuna' => 'Takapuna','Orewa' => 'Orewa');
    
    $Office = DropdownField::create('Office','Office',$Officelist);
    $Office->Required();
    $Office->setCustomValidationMessage('A Office is required.');

    $tagField = TagField::create(
				'ServiceTags',
				'Services',
				ServiceTag::get(),
				$this->ServiceTags()
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
      $Phone,
      $Email,
      $Linkedin,
      $Office,
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