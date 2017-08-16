<?php 
	function notificationMgs($type, $message){
		Session::put($type, $message);
	}

	//active current link in menu

	// if (! function_exists('active_menu')) {
	// 	function active_menu($currentRouteName, $requestName, $start, $finish){
	// 		if (substr($currentRouteName, $start, $finish) == $requestName){
	// 			return 'active';
	// 		}
	// 		else {
	// 			return null;
	// 		}
	// 	}
	// }

	if (! function_exists('is_current_route')) {
	    function is_current_route($route){
	        return Request::is($route) ? 'active' : '';
	    }
}
 ?>
