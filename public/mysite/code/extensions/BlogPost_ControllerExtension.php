<?php
class BlogPost_ControllerExtension extends Extension
{  
    public function getPopular() {
        $post = BlogPost::get()->filter(array('Popular' => 1))->limit(3);
        return $post;
    }

   
}