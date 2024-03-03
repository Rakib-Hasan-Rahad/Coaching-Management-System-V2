<?php  

$sName = "localhost";
$uName = "root";
$pass  = "";
$db_name = "sms_db";

try {
	$conn = new PDO("mysql:host=$sName;dbname=$db_name", $uName, $pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOExeption $e){
	echo "Connection failed: ". $e->getMessage();
	exit;
}
// <?php

// $host="localhost";
// $user="root";
// $password="";
// $db="c_m_system16";

// $conn = mysqli_connect($host,$user,$password,$db);

// if($conn){

//     echo "";//connection successful

// }
// else{

//     echo "Connection failed";
// }


// ?>