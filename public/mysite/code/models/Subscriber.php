<?php

/**
 *  *
 * @package silverstripe
 */

class Subscriber extends DataObject {
	/**
	 * @var array
	 */
	private static $db = array(
    'Name' => 'Varchar(255)',
    'Email' => 'Varchar(255)',
    'Categories' => 'Varchar(4000)'
  );
  
  private static $summary_fields = array (
    'Name' => 'Name',
    'Email' => 'Email',
    'Categories' => 'Categories',
    'Created' => 'Created',
);

	/**
	 * {@inheritdoc}
	 */
	public function getCMSFields() {

    $name = TextField::create('Name', 'Name');
		$name->Required();
    $name->setCustomValidationMessage('A Name is required.');
    
    $Email = TextField::create('Email', 'Email');
		$Email->Required();
    $Email->setCustomValidationMessage('A Email is required.');
    
    $Categories = TextAreaField::create('Categories', 'Categories');

		$fields = new FieldList(
      $name,
      $Email,
      $Categories
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
