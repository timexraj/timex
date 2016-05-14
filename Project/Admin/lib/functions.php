<?php
include_once("inc/dbconnect.php");
function redirect_to($location=""){
			if(!empty($location)){
					header('Location: '.$location);
					exit;
			}
}

function form_error_output($error_from_array=array()){
		$output="<ul>";
		foreach($error_from_array as $key => $value){
				$output.="<div class=\"col-md-6\"><li class=\"alert alert-danger\">";
				$output.=$value;
				$output.="</li></div>";
		}
		$output.="</ul>><br>";
		return $output;
}