<?php
class TeamAdmin extends ModelAdmin {
    private static $managed_models = [
        'Team'
    ];

    private static $url_segment = 'teams';

    private static $menu_title = 'Teams';

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