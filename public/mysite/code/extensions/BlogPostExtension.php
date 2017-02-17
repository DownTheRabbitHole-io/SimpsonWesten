<?php
class BlogPostExtension extends DataExtension
{  
    private static $db = [
        'Featured'        => 'Boolean',
    ];

    private static $has_one = [];

    private static $many_many = [];

    private static $belongs_many_many = [];


    public function updateCMSFields(FieldList $fields) {
          $fields->insertAfter(new CheckBoxField('Featured', 'Featured'), 'Title');
    }


   
}