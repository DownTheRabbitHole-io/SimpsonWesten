<?php

class HomePage extends Page{	

  /**
  * @var array
  */
  private static $has_one = array(      
      'HeaderImage' => 'Image',
      'BottonImage' => 'Image'
  );

  /**
	 * {@inheritdoc}
	 */
	public function getCMSFields() {

    $fields = parent::getCMSFields();


    $uploadField = UploadField::create('HeaderImage',  'Header Image');
    $uploadField->setFolderName('homepage-headers');
		$uploadField->getValidator()->setAllowedExtensions(array('jpg', 'jpeg', 'png', 'gif'));

    $fields->insertBefore($uploadField, 'Content');

    $uploadField2 = UploadField::create('BottonImage',  'Botton Image');
    $uploadField2->setFolderName('homepage');
		$uploadField2->getValidator()->setAllowedExtensions(array('jpg', 'jpeg', 'png', 'gif'));

    $fields->insertBefore($uploadField2, 'Content');


		return $fields;
	}
	
}

class HomePage_Controller extends Page_Controller{
	

	
	
}
