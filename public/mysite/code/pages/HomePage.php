<?php

class HomePage extends Page{	

  /**
  * @var array
  */
  private static $has_one = array(  
      'BottonImage' => 'Image'
  );

  private static $has_many = array(
    'MediaSlides' => 'MediaSlide',
  );

  /**
	 * {@inheritdoc}
	 */
	public function getCMSFields() {

    $fields = parent::getCMSFields();

    $fields->removeFieldFromTab("Root.Main", "HeaderImage");
    
    $fields->addFieldToTab('Root.Carousel',
      GridField::create('MediaSlide', 'MediaSlide',
              $this->MediaSlides(),
              GridFieldConfig_RecordEditor::create()
              ->addComponent(new GridFieldSortableRows('SortID')) //u		se addComponent() function to add SortableGridFieldRows
          )
      );

    $uploadField2 = UploadField::create('BottonImage',  'Bottom Image');
    $uploadField2->setFolderName('homepage');
		$uploadField2->getValidator()->setAllowedExtensions(array('jpg', 'jpeg', 'png', 'gif'));

    $fields->insertBefore($uploadField2, 'Content');


		return $fields;
	}
	
}

class HomePage_Controller extends Page_Controller{
	

	
	
}
