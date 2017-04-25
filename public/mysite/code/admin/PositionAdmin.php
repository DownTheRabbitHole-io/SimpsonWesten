<?php
class PositionAdmin extends ModelAdmin {
    private static $managed_models = [
        'Position'
    ];

    private static $url_segment = 'position';

    private static $menu_title = 'Position';

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