<?php


require('./crids/crids.php');

//var_dump($accounts);



class Cookies {
    var $username;
    var $temp;
    var $password;
    
}



if(isset($_COOKIE['cook'])){
$cookie = $_COOKIE['cook'];

$cookie = unserialize($cookie);


foreach($accounts as $acc){

$cookie->temp = $acc[1];
if ($cookie->temp === $cookie->password){
		session_start();
		$_SESSION['information'] = $cookie->username.' is valid';
		header("Location: ".$link);
		var_dump($_SESSION);
		exit();
}
}
}



if(isset($_POST['username']) and isset($_POST['password']))
{
$username = $_POST['username'];
$password = sha1($_POST['password']);

foreach($accounts as $acc){

	if ($username === $acc[$confuse[0]] and $password === $acc[$confuse[1]]){
		session_start();
		$_SESSION['information'] = $username." is valid";
                header("Location: ".$link);
		exit();
		}
		
}
                header("Location: ./login.html");
		exit();

}



?>




