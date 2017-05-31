<?php
if ($_SERVER["REQUEST_METHOD"]=="GET"){
	include 'connect.php';
	showKullanici();
}

function showKullanici()
{
	global $connect;
	
	$query = "SELECT * FROM kelimeler; ";
	
	$result = mysqli_query($connect,$query);
	$number_of_rows = mysqli_num_rows($result);
	
	$temp_array = array();
	
	if($number_of_rows > 0) {
		while($row = mysqli_fetch_assoc($result)){
			$temp_array[]=$row;
		}
	}
	$i=0;
	header ('Content-Type: application/json');
	for ($i;$i<sizeof($temp_array);$i++){
		echo json_encode (array("kelime$i"=>$temp_array[$i]));
	}
	mysqli_close($connect);
}

?>