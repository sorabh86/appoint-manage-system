<?php 

/**
* 
*/
class DoctorModel
{
	protected $db;
	
	function __construct(PDO $db) {
        $this->db = $db;
    }

    public function addDoctor($post) {
    	$stmt = $this->db->prepare("INSERT INTO doctors(name, address, phone, email, expertise_id, take_appointment) VALUES (?,?,?,?,?,?)");
    	$stmt->execute([
    		$post['name'],
    		$post['address'],
    		$post['phone'],
    		$post['email'],
    		$post['expertise'],
    		$post['take_appointment']
    	]);
    }
    public function getDoctorById($id) {
        $stmt = $this->db->prepare("SELECT * FROM doctors WHERE id=?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function getDoctors() {
        $sql = "SELECT dr.*, ex.title FROM doctors AS dr INNER JOIN doctor_expertise AS ex WHERE dr.expertise_id = ex.id;";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function getDoctorsByExpertiseId($id) {
        $stmt = $this->db->prepare("SELECT * FROM doctors WHERE expertise_id=?");
        $stmt->execute([$id]);
        return $stmt->fetchAll();
    }

    public function getExpertise() {
        $sql = "SELECT * FROM doctor_expertise";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function getExpertiseById($id) {
        $sql = "SELECT * FROM doctor_expertise WHERE id=?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function getTimeslots() {
        $sql = "SELECT ts.*, dr.name FROM `doctor_timeslots` AS ts INNER JOIN doctors AS dr WHERE ts.doctor_id = dr.id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();   
    }
    public function addTimeslot($post) {
        $sql = "INSERT INTO doctor_timeslots (doctor_id,date,start_time,end_time) VALUES(?,?,?,?)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            $post['doctor_id'], 
            $post['date'],
            $post['start_time'],
            $post['end_time']
        ]);
    }
}