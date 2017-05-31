// action ile getKelimeler web servisini kullanan html
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="getKelime" method="GET">
            <span>Kelime giriniz</span><input type="text" name="istek" id="kelime">
            <input type="submit" value="çevir" id="cevir" />
            <p id="sonuc" >Buraya sonuç gelcek</p>
        </form>

    </body>
</html>