<?php 

/**
* 
*/
class Home extends Controller {
	
	public function index() {
		// $user = $this->model('User');
		if(isset($_POST['submit'])) {
			// var_dump($_POST);
			// exit();
			$queryModel = $this->model('QueryModel');

			$queryModel->saveQuery($_POST);
		}

		$this->view('layouts/header');
		$this->view('home/index');
		$this->view('layouts/footer-1');
		$this->view('layouts/footer');
	}
}