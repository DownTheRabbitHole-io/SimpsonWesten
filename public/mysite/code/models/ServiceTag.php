<?php

/**
 *  *
 * @package silverstripe
 */

class ServiceTag extends DataObject {
	/**
	 * @var array
	 */
	private static $db = array(
		'Title' => 'Varchar(255)',
		'Content' => 'Varchar(4000)'
	);


	/**
	 * @var array
	 */
	private static $belongs_many_many = array(
		'ProfileTags' => 'Profile'
	);

	/**
	 * The default sorting lists ServiceTag by title alpha.
	 *
	 * @var string
	 */
	private static $default_sort = 'Title ASC';

	private static $hide_preview_panel = true;


	/**
	 * {@inheritdoc}
	 */
	public function getCMSFields() {

		$title = TextField::create('Title', 'Title');
		$title->Required();
		$title->setCustomValidationMessage('A title is required.');

		$content = TextareaField::create('Content', 'Content');
		$content->Required();
		$content->setCustomValidationMessage('Content is required.');

		$fields = new FieldList(
			$title,
			$content
		);

		$this->extend('updateCMSFields', $fields);

		return $fields;
	}

	function canDelete($member = null) {
      return true;
	}

	function canAdd($member = null) {
      return true;
	}


}
