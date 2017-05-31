//sorgulanan kelimeyi JSON olarak çeken web servis
<?php
if ($_SERVER["REQUEST_METHOD"]=="GET"){
    include 'connect.php';
    getKullanici();
}

function getKullanici()
{
    global $connect;
    if(isset($_GET['istek']))
    {
        $request=$_GET['istek'];
        $query="SELECT * from kelimeler WHERE CKelime='$request'";
        $result = mysqli_query($connect,$query);
        $number_of_rows = mysqli_num_rows($result);
        $temp_array = array();

        if($number_of_rows > 0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $temp_array[]=$row;
            }
        }
        header ('Content-Type: application/json');
        echo json_encode (array("kelimeler"=>$temp_array));
        mysqli_close($connect);
    }
}
?>

