<?php

session_start();

include '../inc/db/connect.php';

// ini_set('display_errors','On'); 

if (!isset($_SESSION['id'])) {
	header("location:../login.php");
}

$stmt = $connect->prepare("SELECT * FROM users WHERE id = " . $_SESSION['id'] . " ");
$stmt->execute();
$user = $stmt->fetch();

if ($user['role'] == 'user') {
	header("location:../index.php");
}

$App = 'inc/app/';

include $App . 'function.php';
include $App . 'head.php';
include $App . 'nav.php';
include $App . 'aside.php';

?>