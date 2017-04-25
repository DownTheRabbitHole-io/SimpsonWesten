<?php
class BlogExtension extends DataExtension
{  
    public function updateCMSFields(FieldList $fields) {
          $fields->removeFieldFromTab("Root.Main", "Content");
    }
   
}