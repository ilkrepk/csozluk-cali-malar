// AJAX ile get/post yapan js
window.onload = function()
{
    var buton = document.getElementById("cevir");
    buton.onclick = cevir;
    function cevir() {
        var kelime = document.getElementById("kelime").value;

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            document.getElementById("sonuc").innerHTML = this.responseText;
            alert(this.responseText);
        }
        xmlhttp.open("GET", "getKelime", true);
        xmlhttp.send();
    }
}