<?php
class Blog_ControllerExtension extends Extension
{  

    private static $allowed_actions = array (
        'filter',
        'subscribeForm'
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


    function subscribeForm($data){
        try{
            $MCSubscription = new MCSubscription();
            $MCSubscription->Email = $data['email'];
            $MCSubscription->MCListID = 3;
            $MCSubscription->write();
        }catch(exception $e){

        }
        $this->owner->redirect('/helpful-reading');
    }

    function filter($data, $form){
        //print_r($data['category']);
        $this->owner->redirect('/helpful-reading/category/'.$data['category']);
        //exit();
    }
   
}