// query AJAX ile get/post isteği yapan java script
$(document).ready(function(){
    $("#cevir").click(function(){
        $.get("getKelime.php", function(data, status){
            alert("Data: " + data + "\nStatus: " + status);
            $("#sonuc").load(data);
            var a=JSON.parse(data);
            console.log(JSON.stringify(a));

        });
    });
});