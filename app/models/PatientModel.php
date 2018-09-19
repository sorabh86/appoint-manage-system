<?php

class PatientModel
{
    protected $db;
    
    function __construct(PDO $db) {
        $this->db = $db;
    }

    public function getPatients() {
        $sql = "SELECT * FROM patients";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function addPatient($post) {
        $sql = "INSERT INTO patients(name, address, phone, email, password, blood_group) VALUES(?,?,?,?,?,?)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(array(
            $post['name'], 
            $post['address'], 
            $post['phone'], 
            $post['email'], 
            $post['password'], 
            $post['blood_group']
        ));
    }

    public function getPatientForAuth($post) {
        $stmt = $this->db->prepare("SELECT * FROM patients WHERE email=? AND password=?");
        $stmt->execute(array(
            $post['email'], 
            $post['password']
        ));
       return $stmt->fetch();
    }

    public function getAppointments() {
        $stmt = $this->db->prepare("SELECT * FROM appointments");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getAppointmentsWithDoctor() {
        $stmt = $this->db->prepare("SELECT a.*,d.name AS doctor_name FROM appointments AS a INNER JOIN doctors AS d WHERE a.doctor_id=d.id ORDER BY a.createdate ASC");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getAppointmentById($id) {
        $stmt = $this->db->prepare("SELECT * FROM appointments WHERE id=?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
    public function updateAppointmentById($post) {
        $stmt = $this->db->prepare("UPDATE appointments SET patient_id=?, doctor_id=?, timeslot_id=?, appointment_type=?, appointment_date=?, appointment_time=?, appointment_hour=?, message=? WHERE id=?");
        $stmt->execute([
            $post['patient_id'],
            $post['doctor_id'],
            $post['timeslot_id'],
            $post['appointment_type'],
            $post['appointment_date'],
            $post['appointment_time'],
            $post['appointment_hour'],
            $post['message'],
            $post['id']
        ]);
        return 0;
    }
    public function cancelAppointmentById($id, $value="YES") {
        $stmt = $this->db->prepare("UPDATE appointments SET is_cancelled=? WHERE id=?");
        $stmt->execute([
            $value,
            $id
        ]);
    }

    public function addAppointment($post) {
        $stmt = $this->db->prepare("INSERT INTO appointments(patient_id,doctor_id,timeslot_id,appointment_type,appointment_date,appointment_time,appointment_hour,message) VALUES (?,?,?,?,?,?,?,?)");
        $stmt->execute([
            $post['patient_id'],
            $post['doctor_id'],
            $post['timeslot_id'],
            $post['appointment_type'],
            $post['appointment_date'],
            $post['appointment_time'],
            $post['appointment_hour'],
            $post['message']
        ]);
        return $this->db->lastInsertId();
    }
    public function approvedAppointment($id, $bool) {
        $stmt = $this->db->prepare("UPDATE appointments SET is_approved=? WHERE id=?");
        $stmt->execute([
            $bool?"YES":"NO",
            $id
        ]);

        $obj = new stdClass();
        $obj->id = $id;
        $obj->bool = $bool?"YES":"NO";

        return $obj;
    }
    
    
}

    
