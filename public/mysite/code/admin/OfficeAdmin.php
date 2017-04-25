<?php
class OfficeAdmin extends ModelAdmin {
    private static $managed_models = [
        'Office'
    ];

    private static $url_segment = 'offices';

    private static $menu_title = 'Offices';

    public function getEditForm($id = null, $fields = null) {
        $form=parent::getEditForm($id, $fields);
    
        $model = singleton($this->modelClass);
    
        /** add sorting if we have a field for... */
        if (class_exists('GridFieldSortableRows')
            && $model->hasField('Sort')
            && $gridField=$form->Fields()->dataFieldByName($this->sanitiseClassName($this->modelClass))) {
            if($gridField instanceof GridField) {
                $gridField->getConfig()->addComponent(new GridFieldSortableRows('Sort'));
            }
        }
    
        return $form;
    }

}