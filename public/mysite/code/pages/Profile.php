<?php
class Profile extends Page {

    /**
     * @var array
     */
    private static $db = array(
        'Name' => 'Varchar(400)',
        'Jobtitle' => 'Varchar(400)',
        'Phone' => 'Varchar(400)',
        'Mobile' => 'Varchar(400)',
        'PA' => 'Varchar(400)',
        'Email' => 'Varchar(400)',
        'Linkedin' => 'Varchar(400)',
        'ShortText' => 'Varchar(4000)',
        'Bio' => 'HTMLText',
    );

    /**
     * @var array
     */
    private static $has_one = array(
        'ProfileImage' => 'Image',        
    );

    /**
     * @var array
     */
    private static $many_many = array(
        'TeamList' => 'Team',
        'OfficeList' => 'Office',
        'PositionList' => 'Position',
    );

    static $belongs_many_many = array(
        'Articles' => 'Article',
        'Posts' => 'BlogPost',
    );

    static $defaults = array (
      'ShowInMenus' => false,
      'ShowInSearch' => false
    );


  /**
	 * {@inheritdoc}
	 */
	public function getCMSFields() {    

    $fields = parent::getCMSFields();

    $fields->removeFieldFromTab("Root.Main", "HeaderImage");
    $fields->removeFieldFromTab("Root.Main", "ExtraLink");
    $fields->removeFieldFromTab("Root.Main", "ExtraLink2");
    $fields->removeFieldFromTab("Root.Main", "Content");

		$Name = TextField::create('Name', 'Name');
		$Name->Required();
		$Name->setCustomValidationMessage('A Name is required.');

    $Jobtitle = TextField::create('Jobtitle', 'Job title');
		$Jobtitle->Required();
		$Jobtitle->setCustomValidationMessage('A Job title is required.');

    $Position = TagField::create(
      'Positionlist',
      'Position list',
      Position::get(),
      $this->Positionlist()
      )
    ->setShouldLazyLoad(true) // tags should be lazy loaded
    ->setCanCreate(true);     // new tag DataObjects can be created

    /*

    $Positionlist = Dataobject::get("Position")->map("ID", "Title", "Please Select");
    
    $Position = DropdownField::create('PositionID','Position',$Positionlist);
    $Position->Required();
    $Position->setCustomValidationMessage('A Position is required.');
    */

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

    

    $Office = TagField::create(
      'Officelist',
      'Office list',
      Office::get(),
      $this->Officelist()
      )
    ->setShouldLazyLoad(true) // tags should be lazy loaded
    ->setCanCreate(true);     // new tag DataObjects can be created

    //$Officelist = Dataobject::get("Office")->map("ID", "Name", "Please Select");
    
    //$Office = DropdownField::create('OfficeID','Office',$Officelist);
    //$Office->Required();
    //$Office->setCustomValidationMessage('A Office is required.');

    $Team = TagField::create(
      'TeamList',
      'Team List',
      Team::get(),
      $this->TeamList()
      )
    ->setShouldLazyLoad(true) // tags should be lazy loaded
    ->setCanCreate(true);     // new tag DataObjects can be created


    //$Teamlist = Dataobject::get("Team")->map("ID", "Name", "Please Select");
    
    //$Team = DropdownField::create('TeamID','Team',$Teamlist);
    //$Team->Required();
    //$Team->setCustomValidationMessage('A Team is required.');   

    $ShortText = TextareaField::create('ShortText', 'Short Text');
		$ShortText->Required();
		$ShortText->setCustomValidationMessage('A ShortText is required.');

    $Bio = HtmlEditorField::create('Bio', 'Bio');
		$Bio->Required();
		$Bio->setCustomValidationMessage('A Bio is required.');

    $uploadField = UploadField::create('ProfileImage',  'Profile Image (must be 663px x 464px)');
    $uploadField->setFolderName('profiles');
		$uploadField->getValidator()->setAllowedExtensions(array('jpg', 'jpeg', 'png', 'gif'));


		$fieldlist = new FieldList(
			$Name,
      $Jobtitle,
      $Position,
      $Email,
      $Phone,
      $Mobile,
      $PA,      
      $Linkedin,
      $Office,
      $Team,
      $uploadField,
      $ShortText,
      $Bio
		);

    $fields->addFieldsToTab('Root.Profile', $fieldlist);

		//$this->extend('updateCMSFields', $fields);

		return $fields;
	}
	

}

class Profile_Controller extends Page_Controller{
	
	public function getRecentArticles(){
    $recent = $this->Articles()->limit(3);    
		return $recent;
	}
	
	
}