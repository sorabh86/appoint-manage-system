<?php 

/**
* 
*/
class Subscriber extends Controller
{
	
	public function add() {
		if(isset($_POST['email'])) {
			$subscriberModel = $this->model('SubscriberModel');
			$insertId = $subscriberModel->addSubscriber($_POST);
			if($insertId == 0) {
				echo '{"status":"Error", "id":"'.$insertId.'", "message":"Your are already had subscribed."}';
			} else {
				echo '{"status":"Success", "id":"'.$insertId.'", "message":"Your subscription are added."}';
			}
		} else {
			echo '{"status":"Error", "message":"Something went wrong, Please try after some time."}';
		}
	}
}