<?php 
/**
* 
*/
class Doctor extends Controller
{
	
	public function index() {
		
	}

	public function expertiseidjson($id) {
		$doctorModel = $this->model('DoctorModel');

		echo json_encode($doctorModel->getDoctorsByExpertiseId($id));
	}
}