<?php
//include_once("lib/function.php");
//include_once("lib/function.php");
include_once("inc/dbconnect.php");
if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD']=="POST"){
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$encpass = md5($pass);
	
	/*echo $user."<br>";
	echo $pass."<br>";
	echo $encpass;
	"INSERT INTO user VALUES()";*/
	$sql = "INSERT INTO users (username,password,usertype) VALUES ('$user','$encpass','admin')";
	
	$query = mysqli_query($mysqli,$sql);
	
	if($query){
		echo "Successful";
	}
	else{
		"Unsuccessful";
	}
	
}
else{
	die("Cannot Continue any Further");
	//echo
}

?>