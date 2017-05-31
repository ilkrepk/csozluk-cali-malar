<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
	include 'connect.php';
	insertUyeler();
}

function insertUyeler(){
	global $connect;
	
	if(isset($_POST["Ad"]) && isset($_POST["Soyad"]) && isset($_POST["Sifre"]) && isset($_POST["Email"]) && isset($_POST["D_Tarihi"]) && isset($_POST["Cinsiyet"])){
		
		$Ad = $_POST["Ad"];
		$Soyad = $_POST["Soyad"];
		$Sifre = $_POST["Sifre"];
		$Email = $_POST["Email"];
		$D_Tarihi = $_POST["D_Tarihi"];
		$Cinsiyet = $_POST["Cinsiyet"];
	}
	
	else{
		header("HTTP/1.1 POST 200 OK.");
		die("An HTTP error 400 (invalid request) occurred.");
	}
	$query = "INSERT INTO uyeler (Ad, Soyad, Sifre, Email, D_Tarihi, Cinsiyet) values ('$Ad','$Soyad','$Sifre','$Email','$D_Tarihi', '$Cinsiyet');";
	mysqli_query($connect, $query) or die (mysqli_error($connect));
	mysqli_close($connect);

}
?>