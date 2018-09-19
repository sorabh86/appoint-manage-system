<?php 
/**
* 	About us page
*/
class Contact extends Controller
{
	
	public function index() {

		require_once '../app/views/layouts/header.php';
		$this->view('contact/index');
		require_once '../app/views/layouts/footer-2.php';
		require_once '../app/views/layouts/footer.php';
	}
}