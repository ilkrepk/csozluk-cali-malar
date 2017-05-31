<?php

if($_SERVER ["REQUEST_METHOD"]=="POST"){
	require 'connect.php';
	createKullanici();
}


function createKullanici(){
	
	global $connect;
	
	$CKelime = $_POST["CKelime"];
	$TKelime = $_POST["TKelime"];
	$KategoriID = $_POST["KategoriID"];
	
	$query = "INSERT INTO kelimeler (CKelime, TKelime, KategoriID) values ('$CKelime','$TKelime','$KategoriID');";
	
	mysqli_query($connect, $query) or die (mysqli_error($connect));
	mysqli_close($connect);
}
?>