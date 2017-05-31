<html>
    <head>

    </head>
    <body>
        <?php
            $file= file_get_contents('getKelime.php');
            $json=json_decode($file, true);
            print_r($json);
        ?>
    </body>
</html>