<?php

class OurPeople extends Page{	

  private static $allowed_children = array(
    'Profile',
  );

	/**
	 * @var array
	 */
	private static $has_many = array(
		'Profiles' => 'Profile',
	);
	
}

class OurPeople_Controller extends Page_Controller{
	

	
	
}
