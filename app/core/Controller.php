<?php 

/**
* 
*/
class Controller
{	
	public function getDB() {
		$driver_options = array(
		   PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
		   PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		   PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
		);
		return new PDO("mysql:host=".DB_SERVER.";dbname=".DB_DATA, DB_USER, DB_PASS, $driver_options);
	}

	protected function model($model) {
		require_once '../app/models/'.$model.'.php';
		return new $model($this->getDB());
	}

	protected function view($view, $data = []) {
		require_once '../app/views/'.$view.'.php';
	}

	protected function redirect($arr) {
		if(gettype($arr) == "array") {
			echo '<div style="width:80%;margin:20px auto;padding:20px;color:#999;background:#fefefe;"><h2>'.$arr['title'].'</h2>';
			echo '<p>'.$arr['message'].'</p>';
			echo '<p>Your will be redirected within in <span class="time">2</span> second...</p></div>';
			echo '<script>var rt = 2000;setTimeout(function(){window.location.href="'.$arr['url'].'"},rt);</script>';
		} else {
			header("Location: ".ASSET_ROOT."/".$arr);
		}
		die();
	}

	protected function setFlash($type, $msg) {
		echo '<script>console.log("set flash",window);window.onload = function(){so.flash("'.$type.'", "'+$msg+'")}</script>';
	}
}