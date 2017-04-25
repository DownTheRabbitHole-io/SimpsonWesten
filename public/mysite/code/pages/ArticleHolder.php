<?php

class ArticleHolder extends Page{
    /**
	 * @var array
	 */
	private static $db = array(		    
	);
    
    /**
	 * @var array
	 */
	private static $has_one = array(
	);

		/**
	 * @var array
	 */
	private static $many_many = array(
		'Profiles' => 'Profile',
	);

	private static $allowed_children = array(
		'Article'
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

    return $fields;
  }

	
}


class ArticleHolder_Controller extends Page_Controller {

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

