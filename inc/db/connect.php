<?php 

$dsn  	= 'mysql:host=localhost;dbname=blog_native';
$user 	= 'root';
$pass 	= '';
$option = array(

	PDO::MYSQL_ATTR_INIT_COMMAND => ("SET NAMES utf8"),
);
try { 
	
	$connect = new PDO($dsn, $user , $pass ,$option);

	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	global $connect;
	
}

catch(PDOException $e) { 

	echo "Failed To Connect Database". $e->getMessage();


}
