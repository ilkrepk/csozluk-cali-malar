<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
	include 'connect.php';
	insertKelimeler();
}

function insertKelimeler(){
	global $connect;
	
	if(isset($_POST["CKelime"]) && isset($_POST["TKelime"]) && isset($_POST["KategoriID"])){
		
		$CKelime = $_POST["CKelime"];
		$TKelime = $_POST["TKelime"];
		$KategoriID = $_POST["KategoriID"];
	}
	
	else{
		header("HTTP/1.1 POST 200 OK.");
		die("An HTTP error 400 (invalid request) occurred.");
	}
	$query = "INSERT INTO kelimeler (CKelime, TKelime, KategoriID) values ('$CKelime','$TKelime','$KategoriID');";
	mysqli_query($connect, $query) or die (mysqli_error($connect));
	mysqli_close($connect);

}
?>