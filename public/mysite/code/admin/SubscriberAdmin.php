<?php
class SubscriberAdmin extends ModelAdmin {
    private static $managed_models = [
        'Subscriber'
    ];

    private static $url_segment = 'subscribers';

    private static $menu_title = 'Subscribers';

    public function getExportFields() {
      return array(
          'Name' => 'Name',
          'Email' => 'Email Address',
          'Categories' => 'Categories',
          'Created' => 'Created'
      );
  }

    public function getEditForm($id = null, $fields = null) {
      $form = parent::getEditForm($id, $fields);
      $gridField = $form->Fields()->fieldByName($this->sanitiseClassName($this->owner->modelClass));
      $config = $gridField->getConfig();
      $config->removeComponentsByType($config->getComponentByType('GridFieldAddNewButton'));   
      $config->removeComponentsByType($config->getComponentByType('GridFieldEditButton')); 
      $config->removeComponentsByType('GridFieldDeleteAction'); 
      
      return $form; 
    }

}