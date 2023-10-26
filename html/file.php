<?php
ini_set('display_errors' , 1);
ini_set('display_startup_errors' , 1);
error_reporting(E_ALL);



$out = shell_exec('whoami'); 
echo  'res: '.$out;

class Cookies {
    var $username;
    var $temp;
    var $password;
        
}

//O%3A7%3A%22Cookies%22%3A3%3A%7Bs%3A8%3A%22username%22%3BN%3Bs%3A4%3A%22temp%22%3BN%3Bs%3A8%3A%22password%22%3BR%3A3%3B%7D

//O:7:"Cookies":3:{s:8:"username";N;s:4:"temp";N;s:8:"password";R:3;}

//$a = new Cookies;
//$a->password = &$a->temp;




echo preg_match_all("/\//", "./file/file.php");
/*
if(isset($_GET['4']))
{
$str = unserialize($_GET['4']);
var_dump($str);

$str->flag = "hello";

if($str->flag === $str->temp){
echo "halelouya";
}
}


if(isset($_COOKIE['cook'])){

	$cookie = $_COOKIE['cook'];
        echo $cookie;	
        $cookie = unserialize($cookie);
        
 	
 	foreach($accounts as $acc){
	
	$this->temp = $acc[1];
	
	if ($cookie->temp === $cookie->password){

		echo "yescookies";
		
		}
}
 	       	
        		
         
         



}


*/



?>
