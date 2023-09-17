<!DOCTYPE html>
<html lang="tr-TR">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <meta http-equiv="Content-Language" content="tr">
   <meta charset="utf-8">
    <title>8.PHP GİRİŞ</title>
    <style>
        body {
            background-color: black;
            color: white;
        }
    </style>
    <script type="text/javascript" language="javascript">
        function Deneme() {
            document.getElementById("IslemAlani").innerHTML = "8.PHP GİRİŞ";
        }
    </script>
</head>

<body>
    <?php
    echo "Muhammet Ali Özbay<br /><br />";
    ?>
    <input type="button" onClick="Deneme();" value="İşlem yap"><br /><br />
    <div id="IslemAlani"></div>
</body>
</html>
