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
		'Title' => 'Varchar(255)',
    'Address' => 'Varchar(4000)',
    'Lat' => 'Varchar(40)',
    'Lng' => 'Varchar(40)',
		'Content' => 'Varchar(4000)',
		'Sort' => 'Int',
	);

	static $belongs_many_many = array(
      'Profiles' => 'Profile',
  );



	/**
	 * The default sorting lists ServiceTag by title alpha.
	 *
	 * @var string
	 */
	private static $default_sort = 'Sort ASC';

	private static $hide_preview_panel = true;


	/**
	 * {@inheritdoc}
	 */
	public function getCMSFields() {

		$title = TextField::create('Title', 'Name');
		$title->Required();
		$title->setCustomValidationMessage('A Name is required.');

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
