<?php
class MediaSlide extends DataObject {

  /**
    * @var array
    */
  private static $db = array(
      'Name' => 'Varchar(400)',
      'SortID'=>'Int',
  );

  /**
    * @var array
    */
  private static $has_one = array(
      'CarouselImage' => 'Image',
      'HomePage' => 'HomePage',
  );

    

  /**
    *
    * @var string
    */
	private static $default_sort = '"SortID" ASC';

  /**
	 * {@inheritdoc}
	 */
	public function getCMSFields() {

		$Name = TextField::create('Name', 'Name');
		$Name->Required();
		$Name->setCustomValidationMessage('A Name is required.');

    $CarouselImage = UploadField::create('CarouselImage', 'Carousel Image (must be 1157px x 369px)');
		$CarouselImage->setCustomValidationMessage('A CarouselImage is required.');
    $CarouselImage->setFolderName('CarouselImage');
    $CarouselImage->getValidator()->setAllowedExtensions(array('jpg', 'jpeg', 'png', 'gif'));



		$fields = new FieldList(
			$Name,
      $CarouselImage

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