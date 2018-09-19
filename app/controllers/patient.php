<?php 

/**
* 
*/
class Patient extends Controller
{
	public function index () {
		$this->checklogin();

		$this->redirect('patient/profile');
	}
	private function checklogin() {
		if(!isset($_SESSION['user'])) {
			$this->redirect('patient/login');
		}
	}
	public function login () {
		$post = $_POST;
		if(isset($post['submit'])) {
			$patientModel = $this->model('PatientModel');
			$user = $patientModel->getPatientForAuth($post);

			if($post['email']==$user->email && $post['password'] == $user->password) {
				$_SESSION['user'] = $user;
				$this->redirect('patient/profile');
			} else {
				// $this->setFlash('danger','Username or password Incorrect!!');
			}
		}

		$this->view('layouts/header');
		$this->view('patient/login');
		$this->view('layouts/footer-1');
		$this->view('layouts/footer');
	}
	public function logout() {
		unset($_SESSION['user']);
		// $_SESSION['user'] = NULL;

		$this->redirect('patient/login');
	}
	public function register () {
		$post = $_POST;
		if(isset($post['submit']) ) {
			$patientModel = $this->model('PatientModel');
			$patientModel->addPatient($post);

			$this->redirect('patient/login');
		}

		$this->view('layouts/header');
		$this->view('patient/register');
		$this->view('layouts/footer-1');
		$this->view('layouts/footer');
	}
	public function profile () {
		$this->checklogin();

		$this->view('layouts/header');
		$this->view('patient/profile');
		$this->view('layouts/footer-1');
		$this->view('layouts/footer');
	}
	public function editprofile () {
		$this->checklogin();

		if(isset($_POST['submit'])) {
			var_dump($_POST);
			// die();
		}

		$this->view('layouts/header');
		$this->view('patient/editprofile');
		$this->view('layouts/footer-1');
		$this->view('layouts/footer');
	}
	public function appointment () {
		$this->checklogin();

		$patientModel = $this->model('PatientModel');

		$this->view('layouts/header');
		$this->view('patient/appointment',[
			"appointments" => $patientModel->getAppointmentsWithDoctor()
		]);
		$this->view('layouts/footer-1');
		$this->view('layouts/footer');
	}

	public function bookappointment () {
		$this->checklogin();

		if(isset($_POST['submit'])) {
			$_POST['patient_id'] = $_SESSION["user"]->id;
			$patientModel = $this->model('PatientModel');
			$patientModel->addAppointment($_POST);
			
			$this->redirect([
				'title' => 'Succesfully Added',
				'message' => "You have book an Appointent, We will confirm on approval.",
				'url' => ASSET_ROOT."/patient/appointment"
			]);
		}

		$doctorModel = $this->model('DoctorModel');

		$this->view('layouts/header');
		$this->view('patient/bookappointment', [
			"expertises" => $doctorModel->getExpertise(),
			"doctors" => $doctorModel->getDoctors()
		]);
		$this->view('layouts/footer-1');
		$this->view('layouts/footer');
	}

	public function editappointment ($id) {
		$this->checklogin();

		$patientModel = $this->model('PatientModel');

		if(isset($_POST['submit'])) {
			$_POST['id']=$id;
			$_POST['patient_id'] = $_SESSION["user"]->id;
			
			$patientModel->updateAppointmentById($_POST);
			$this->redirect([
				'title' => 'Update Succesful',
				'message' => "You have update Appointent record, We will confirm on approval.",
				'url' => ASSET_ROOT."/patient/appointment"
			]);
		}

		$doctorModel = $this->model('DoctorModel');

		$appoint = $patientModel->getAppointmentById($id);
		$doctor = $doctorModel->getDoctorById($appoint->doctor_id);
		$appoint->expertise_id = $doctor->expertise_id;

		$this->view('layouts/header');
		$this->view('patient/editappointment', [
			"expertises" => $doctorModel->getExpertise(),
			"doctors" => $doctorModel->getDoctors(),
			'appointment' => $appoint
		]);
		$this->view('layouts/footer-1');
		$this->view('layouts/footer');
	}
	public function cancelappointment ($id) {
		$patientModel = $this->model('PatientModel');
		$patientModel->cancelAppointmentById($id);
		$this->redirect('patient/appointment');
	}

	public function drexpertise() {
		if(isset($_POST['id'])) {
			$doctorModel = $this->model('DoctorModel');
			$expertises = $doctorModel->getExpertiseById($_POST['id']);
			echo json_encode($expertises);
		} else {
			echo '{"desc":"Something id is missing!"}';
		}
	}

	public function drbyexpertise(){
		if(isset($_POST['expertise_id'])) {
			$doctorModel = $this->model('DoctorModel');
			// $doctors = $
		} else {
			echo '{"desc":"Something id is missing!"}';
		}
	}
}