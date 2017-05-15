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
		'Phone' => 'Varchar(400)',
		'Fax' => 'Varchar(400)',
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

		$Phone = TextField::create('Phone', 'Phone');
		$Phone->Required();
		$Phone->setCustomValidationMessage('A Phone is required.');


		$Fax = TextField::create('Fax', 'Fax');
		$Fax->Required();
		$Fax->setCustomValidationMessage('A Fax is required.');


		$fields = new FieldList(
			$title,
      $Address,
      $Lat,
      $Lng,
			$content,
			$Phone,
			$Fax
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
