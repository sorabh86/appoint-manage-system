<?php 
/**
* 	About us page
*/
class About extends Controller
{
	
	public function index() {

		require_once '../app/views/layouts/header.php';
		$this->view('about/index');
		require_once '../app/views/layouts/footer-1.php';
		require_once '../app/views/layouts/footer.php';
	}
}