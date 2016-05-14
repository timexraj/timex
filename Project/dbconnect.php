<?php
/**
 * Created by PhpStorm.
 * User: sbastola.com.np
 * Date: 3/17/2016
 * Time: 8:25 AM
 */
define("HOST","localhost");
define("USER","root");
define("PASSWORD","");
define("DATABASE","subash");

$dbconnect=@mysqli_connect(HOST,USER,PASSWORD,DATABASE);
?>