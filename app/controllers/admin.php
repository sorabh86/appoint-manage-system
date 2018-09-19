<?php

class Admin extends Controller {
    
    public function index () {
        $this->checklogin();

        $this->dashboard();
    }

    private function checklogin() {
        if(!isset($_SESSION['admin'])) {
            $this->redirect('admin/login');
        }
    }
    
    public function login () {
        if(isset($_POST['username']) && isset($_POST['password']))
            $admin = $this->model('AdminModel');
            
            if($_POST['username'] == $admin->username && $_POST['password'] == $admin->password) {
                $_SESSION['admin'] = [
                    'name' => $admin->name,
                    'post' => $admin->post
                ];
                $this->redirect([
                    "url" => 'admin/dashboard',
                    "title" => 'Success',
                    "message" => 'You are succesfully Logged In!'
                ]);
            }

        $this->view('admin/layout/header');
        $this->view('admin/login');
        $this->view('admin/layout/footer');
    }
    public function logout (){
        var_dump($_SESSION);
        die();

        if(isset($_SESSION['admin']))
            unset($_SESSION['admin']);

        $this->redirect([
            "url" => 'admin/login',
            "title" => "Success",
            "message" => "You are Logged out"
        ]);
    }
    public function dashboard() {
        $this->checklogin();

        $this->view('admin/layout/header');
        $this->view('admin/dashboard');
        $this->view('admin/layout/footer');
    }
    public function listpatient() {
        $this->checklogin();

        $patientModel = $this->model('PatientModel');

        $this->view('admin/layout/header');
        $this->view('admin/listpatient', [
            'patients' => $patientModel->getPatients()
        ]);
        $this->view('admin/layout/footer');
    }
    public function addpatient() {
        $this->checklogin();

        $this->view('admin/layout/header');
        $this->view('admin/addpatient');
        $this->view('admin/layout/footer');
    }

    public function patientappointment() {
        $this->checklogin();

        $patientModel = $this->model('PatientModel');

        $this->view('admin/layout/header');
        $this->view('admin/patientappointment',[
            "appointments" => $patientModel->getAppointmentsWithDoctor()
        ]);
        $this->view('admin/layout/footer');
    }
    public function addappointment() {
        $this->checklogin();

        $this->view('admin/layout/header');
        $this->view('admin/addappointment');
        $this->view('admin/layout/footer');
    }

    public function listdoctor() {
        $this->checklogin();

        $doctorModel = $this->model('DoctorModel');

        $this->view('admin/layout/header');
        $this->view('admin/listdoctor', [
            "doctors" => $doctorModel->getDoctors()
        ]);
        $this->view('admin/layout/footer');
    }
    public function adddoctor() {
        $this->checklogin();

        if(isset($_POST['submit'])) {
            $doctorModel = $this->model('DoctorModel');
            
            $doctorModel->addDoctor($_POST);

            $this->redirect([
                "url" => 'admin/listdoctor',
                "title" => "Doctor Added",
                "message" => "New Doctor is added Succesfully!"
            ]);
        }

        $doctorModel = $this->model('DoctorModel');

        $this->view('admin/layout/header');
        $this->view('admin/adddoctor', [
            'doctor_expertise' => $doctorModel->Expertise()
        ]);
        $this->view('admin/layout/footer');
    }
    public function expertisedoctor() {
        $this->checklogin();

        $doctorModel = $this->model('DoctorModel');

        $this->view('admin/layout/header');
        $this->view('admin/expertisedoctor', [
            "doctor_expertise" => $doctorModel->getExpertise()
        ]);
        $this->view('admin/layout/footer');
    }
    public function addexpertisedoctor() {
        $this->checklogin();

        $doctorModel = $this->model('DoctorModel');

        $this->view('admin/layout/header');
        $this->view('admin/addexpertisedoctor');
        $this->view('admin/layout/footer');
    }
    public function listtimeslot() {
        $this->checklogin();

        $doctorModel = $this->model('DoctorModel');

        $this->view('admin/layout/header');
        $this->view('admin/listtimeslot', [
            'timeslots' => $doctorModel->getTimeslots()
        ]);
        $this->view('admin/layout/footer');
    }
    public function addtimeslot() {
        $this->checklogin();

        $doctorModel = $this->model('DoctorModel');

        if(isset($_POST['submit'])) {
            // print_r($_POST);exit();
            $doctorModel->addTimeslot($_POST);
            // $this->redirect('admin/listtimeslot');
        }


        $this->view('admin/layout/header');
        $this->view('admin/addtimeslot', [
            'doctors' => $doctorModel->getDoctors()
        ]);
        $this->view('admin/layout/footer');
    }

}
