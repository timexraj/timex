<?php
define("HOST","localhost");
define("USER","root");
define("PASS","");
define("DB","project");

$mysqli=@mysqli_connect(HOST,USER,PASS,DB);

if(!$mysqli){
	die("Please be connected with the database. Thank You");
}

?>