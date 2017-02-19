<?php

/**
 *  *
 * @package silverstripe
 */

class Office extends DataObject {
	/**
	 * @var array
	 */
	private static $db = array(
    'Name' => 'Varchar(255)',
		'Title' => 'Varchar(255)',
    'Address' => 'Varchar(4000)',
    'Lat' => 'Varchar(40)',
    'Lng' => 'Varchar(40)',
		'Content' => 'Varchar(4000)'
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

    $name = TextField::create('Name', 'Name');
		$name->Required();
		$name->setCustomValidationMessage('A Name is required.');

		$title = TextField::create('Title', 'Title');
		$title->Required();
		$title->setCustomValidationMessage('A title is required.');

		$content = TextareaField::create('Content', 'Content');

    $Address = TextField::create('Address', 'Address (no line breaks)');
		$Address->Required();
		$Address->setCustomValidationMessage('A address is required.');

    $Lat = TextField::create('Lat', 'Lat');
		$Lat->Required();
		$Lat->setCustomValidationMessage('A Lat is required.');

    $Lng = TextField::create('Lng', 'Lng');
		$Lng->Required();
		$Lng->setCustomValidationMessage('A Lng is required.');

		$fields = new FieldList(
      $name,
			$title,
      $Address,
      $Lat,
      $Lng,
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
