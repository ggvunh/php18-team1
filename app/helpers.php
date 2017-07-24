<?php 
	function notificationMgs($type, $message){
		Session::put($type, $message);
	}
 ?>