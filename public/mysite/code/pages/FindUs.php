<?php
class FindUs extends Page {

	private static $db = array(
	);

	private static $has_one = array(
	);


}
class FindUs_Controller extends Page_Controller {


	function getOffices(){
		return Office::get();
	}
	


}
