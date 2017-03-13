<?php

/**
 *  *
 * @package silverstripe
 */

class Position extends DataObject {
	/**
	 * @var array
	 */
	private static $db = array(
		'Title' => 'Varchar(255)'
	);


	/**
	 * The default sorting lists Position by title alpha.
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


		$fields = new FieldList(
			$title
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
