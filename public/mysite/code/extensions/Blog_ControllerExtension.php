<?php
class Blog_ControllerExtension extends Extension
{  

    private static $allowed_actions = array (
        'filter'
	);

    public function getFeatured() {
        $post = BlogPost::get()->filter(array('Featured' => 1))->limit(1);
        return $post;
    }

    public function getPopular() {
        $post = BlogPost::get()->filter(array('Popular' => 1))->limit(3);
        return $post;
    }

    public function getCategories(){
      $categories = BlogCategory::get();
      return $categories;
    }


    function filter($data, $form){
        //print_r($data['category']);
        $this->redirect('/helpful-reading/category/'.$data['category']);
        //exit();
    }
   
}