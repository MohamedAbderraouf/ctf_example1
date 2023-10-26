
<?php
ini_set('display_errors' , 1);
ini_set('display_startup_errors' , 1);
error_reporting(E_ALL);

// phpinfo();

function connect(){

 $hostName = "localhost";
 $userName = "moh";
 $password = "123";
 $dbName = "boutique";

 $conn= new mysqli($hostName,$userName,$password,$dbName);
 return $conn;
 }
 

function addAnnonce( $emplacementFile , $text){

$conn = connect();
$sqlQuery = "insert into annonce (emplacement , text) values('$emplacementFile' , '$text');";

if($conn->query($sqlQuery) === TRUE) echo "added successfully";
	else echo "Error: ".$conn->error;

$conn->close();


}   

function getAnnonces(){
$conn = connect();

$sqlQuery = "select emplacement,text from annonce order by annonceId desc limit 10;";

$result = $conn->query($sqlQuery);

$ar = [];
while ($row = $result->fetch_assoc()){

//echo $row['emplacement'].'  '.$row['text'].'<br>';
array_push($ar , array('emplacement'=>$row['emplacement'], 'text'=>$row['text']));


}

$conn->close();
return $ar;
}
/*
addAnnonce( "image1.png" , "text 1 this image is 100 $ yoooooooooooooooooooooooooooooooooooo"); 
addAnnonce( "image2.png" , "text 2 this image is 100 $ yoooooooooooooooooooooooooooooooooooo"); 
addAnnonce( "image3.png" , "text 3 this image is 100 $ yoooooooooooooooooooooooooooooooooooo"); 
addAnnonce( "image4.png" , "text 4 this image is 100 $ yoooooooooooooooooooooooooooooooooooo"); 
addAnnonce( "image5.png" , "text 5 this image is 100 $ yoooooooooooooooooooooooooooooooooooo"); 
addAnnonce( "image6.png" , "text 6 this image is 100 $ yoooooooooooooooooooooooooooooooooooo"); 
addAnnonce( "image7.png" , "text 7 this image is 100 $ yoooooooooooooooooooooooooooooooooooo"); 
addAnnonce( "image8.png" , "text 8 this image is 100 $ yoooooooooooooooooooooooooooooooooooo"); 
*/

  ?>
