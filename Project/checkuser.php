<?php
include_once("dbconnect.php");
global $dbconnect;

/**
 * Created by PhpStorm.
 * User: sbastola.com.np
 * Date: 3/17/2016
 * Time: 8:25 AM
 */

if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD']=="POST")
{
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $repass=$_POST['repassword'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $gender=$_POST['gender'];

    if($password==$repass)
    {
        $insert="insert into users(firstname,lastname,username,password,address,email,contact,gender) VALUES('$firstname','$lastname','$username','$password','$address','$email','$contact','$gender')";
        $query=mysqli_query($dbconnect,$insert);
        if($query)
        {
            echo"Successfull";
        }
        else
        {
            echo "Unsuccessfull";
        }
    }
}
else{
    header('location:test.php');
}


