<?php
require('../crids/dbconn.php');
//PHPSESSID:"fttlug2tvdcgek253h4795ft6a"
session_start();
if(!isset($_SESSION['information'])) 
header("Location: ../login.html");


ini_set('display_errors' , 1);
ini_set('display_startup_errors' , 1);
error_reporting(E_ALL);



$uploaddir = './images/';

$uploadfile = $uploaddir . basename($_FILES['image']['name']);

//var_dump($_FILES);

//echo $_FILES['image']['tmp_name'];

if(isset($_POST['text']) and isset($_FILES['image']) ){
addAnnonce( $_FILES['image']['name'] ,$_POST['text']);
}



if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
  echo "File is valid, and was successfully uploaded.\n";
} else {
   echo "Upload failed";
}

?>
