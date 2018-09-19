<?php 

/**
* 
*/
class SubscriberModel {
	
	function __construct(PDO $db) {
		$this->db = $db;
	}

	public function addSubscriber($post) {
		$stmt = $this->db->prepare("SELECT * FROM subscriber WHERE email=?");
		$stmt->execute([$post['email']]);
		$count = $stmt->rowCount();

		if($count <= 1) {
			$stmt = $this->db->prepare("INSERT INTO subscriber (email) VALUES (?)");
			$stmt->execute([$post['email']]);
			return $this->db->lastInsertId();
		} else {
			return 0;
		}
	}
}

 ?>