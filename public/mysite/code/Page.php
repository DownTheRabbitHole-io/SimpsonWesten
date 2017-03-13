<?php
class Page extends SiteTree {

	private static $db = array(
		'ExtraLink' => 'Varchar(400)',
		'ExtraLink2' => 'Varchar(400)'
	);

	/**
	 * @var array
	 */
	private static $has_one = array(
    'HeaderImage' => 'Image'
	);

	public function getCMSFields(){
    $fields = parent::getCMSFields();

    $uploadField = UploadField::create('HeaderImage',  'Header Image (must be 1157px x 369px)');
    $uploadField->setFolderName('headers');
		$uploadField->getValidator()->setAllowedExtensions(array('jpg', 'jpeg', 'png', 'gif'));

		$ExtraLink = TextField::create('ExtraLink', 'ExtraLink');
		$ExtraLink->Required();
		$ExtraLink->setCustomValidationMessage('A ExtraLink is required.');

		$ExtraLink2 = TextField::create('ExtraLink2', 'ExtraLink 2');
		$ExtraLink2->Required();
		$ExtraLink2->setCustomValidationMessage('A ExtraLink2 is required.');

		$fields->insertAfter($ExtraLink2, 'Content');
		$fields->insertAfter($ExtraLink, 'Content');

    $fields->insertBefore($uploadField, 'Content');


    return $fields;
  }

}
class Page_Controller extends ContentController {

	/**
	 * An array of actions that can be accessed via a request. Each array element should be an action name, and the
	 * permissions or conditions required to allow the user to access it.
	 *
	 * <code>
	 * array (
	 *     'action', // anyone can access this action
	 *     'action' => true, // same as above
	 *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
	 *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
	 * );
	 * </code>
	 *
	 * @var array
	 */
	private static $allowed_actions = array (
	);

	public function init() {
		parent::init();
		// You can include any CSS or JS required by your project here.
		// See: http://doc.silverstripe.org/framework/en/reference/requirements

        Requirements::css("http://fonts.googleapis.com/css?family=Raleway:300,500,900%7COpen+Sans:400,700,400italic");
        Requirements::css("{$this->ThemeDir()}/css/bootstrap.min.css");
        Requirements::css("{$this->ThemeDir()}/css/style.css");
				Requirements::css("{$this->ThemeDir()}/css/blog.css");
				Requirements::css("{$this->ThemeDir()}/css/editor.css");

        Requirements::javascript("{$this->ThemeDir()}/javascript/common/modernizr.js");

        Requirements::javascript("{$this->ThemeDir()}/javascript/common/jquery-1.11.1.min.js");
        Requirements::javascript("{$this->ThemeDir()}/javascript/common/bootstrap.min.js");
        Requirements::javascript("{$this->ThemeDir()}/javascript/common/bootstrap-datepicker.js");
        Requirements::javascript("{$this->ThemeDir()}/javascript/common/chosen.min.js");
        Requirements::javascript("{$this->ThemeDir()}/javascript/common/bootstrap-checkbox.js");
        Requirements::javascript("{$this->ThemeDir()}/javascript/common/nice-scroll.js");
        Requirements::javascript("{$this->ThemeDir()}/javascript/common/jquery-browser.js");
        Requirements::javascript("{$this->ThemeDir()}/javascript/scripts.js");
        Requirements::javascript("{$this->ThemeDir()}/javascript/script.js");
		Requirements::javascript("{$this->ThemeDir()}/javascript/quick.js");
	}

	public function getRecentArticles(){
    
    $recent = Article::get()->limit(3);
		return $recent;
    
	}


}
