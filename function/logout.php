<?php 
session_start();
require_once '../database.php';
if(isset($_GET['logout'])){
	session_destroy();
	header("location:../index.php");
}

?>