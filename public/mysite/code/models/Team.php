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
    'Name' => 'Varchar(255)',
		'Content' => 'Varchar(4000)'
	);


	/**
	 * The default sorting lists Team by title alpha.
	 *
	 * @var string
	 */
	private static $default_sort = 'Name ASC';

	private static $hide_preview_panel = true;


	/**
	 * {@inheritdoc}
	 */
	public function getCMSFields() {

    $name = TextField::create('Name', 'Name');
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
