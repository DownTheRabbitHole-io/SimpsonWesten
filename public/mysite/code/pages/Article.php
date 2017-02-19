<?php

class Article extends Page{
  /**
	 * @var array
	 */

	private static $db = array(
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
	private static $many_many = array(
		'Profiles' => 'Profile',
	);

	/**
	 * The default sorting lists Article pages by date.
	 *
	 * @var string
	 */
	private static $default_sort = '"Created" DESC';

	/**
	 * @var bool
	 */
	private static $can_be_root = false;

	/**
	* @var array
	*/
	private static $casting = array(
			'Excerpt' => 'HTMLText',
	);


  public function getCMSFields(){
    $fields = parent::getCMSFields();


    $tagField = TagField::create(
      'Profiles',
      'Linked Profiles',
      Profile::get(),
      $this->Profiles()
    )
    ->setShouldLazyLoad(true) // tags should be lazy loaded
    ->setCanCreate(false);     // new tag DataObjects can be created

    $fields->insertBefore($tagField, 'Content');

    $uploadField = UploadField::create('HeaderImage',  'Header Image');
    $uploadField->setFolderName('article-headers');
		$uploadField->getValidator()->setAllowedExtensions(array('jpg', 'jpeg', 'png', 'gif'));

    $fields->insertBefore($uploadField, 'Content');


    return $fields;
  }

	/**
	* Returns the post excerpt.
	*
	* @param int $wordsToDisplay
	*
	* @return string
	*/
	public function Excerpt($wordsToDisplay = 30)
	{
			/** @var HTMLText $content */
			$content = $this->dbObject('Content');

			return $content->Summary($wordsToDisplay);
	}
}


class Article_Controller extends Page_Controller {

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
	}

}

