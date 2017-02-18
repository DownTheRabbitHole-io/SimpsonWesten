<?php
class BlogExtension extends DataExtension
{  
    public function getFeatured() {
        return BlogPost::get()->filter(array('Featured' => 1))->limit(1);
    }

   
}