<?php

/**
 *  *
 * @package silverstripe
 */

class Team extends DataObject {
	/**
	 * @var array
	 */
	private static $db = array(
    'Title' => 'Varchar(255)',
		'Content' => 'Varchar(4000)',
		'Sort' => 'Int',
	);

	static $belongs_many_many = array(
      'Profiles' => 'Profile',
  );


	/**
	 * The default sorting lists Team by title alpha.
	 *
	 * @var string
	 */
	private static $default_sort = 'Sort ASC';

	private static $hide_preview_panel = true;
	

	/**
	 * {@inheritdoc}
	 */
	public function getCMSFields() {

    $name = TextField::create('Title', 'Name');
		$name->Required();
		$name->setCustomValidationMessage('A Name is required.');

		$content = TextareaField::create('Content', 'Content');

		$fields = new FieldList(
      $name,
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
