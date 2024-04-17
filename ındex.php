<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
 <?php
 require_once("ekle_sil.php"); // Sayfa içeri aktarıldı.
 require_once("listele.php");
 klasor_ekle("Kayitlar"); 
klasor_ekle("Kayitlar/Yasir");
 klasor_ekle("Kayitlar/Selman");
 klasor_listele("Kayitlar");
//klasor_sil("Kayitlar/Yasir");
//klasor_sil("Kayitlar/Selman");
 ?>

</body>
</html>