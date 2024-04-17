<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dosya İşlemleri</title>
</head>
<body>
<?php
//$klasor = opendir("Resimler");
 //while($dosya = readdir($klasor)){  

    //if (!is_dir($dosya)){  
        //echo $dosya.'<br>';
            
    //}
 //}
 $profilAdi="yazilimci_01";
 $yil="2024";
 mkdir("aylar/".$profilAdi);
 mkdir("aylar/".$profilAdi."/".$yil);
 $aylar=["Ocak","Şubat","Mart","Nisan","Mayıs","Haziran","Temmuz" , 
"Ağutos", "Eylül","Ekim","Kasım","Aralık"];
 for($i=0;$i<12;$i++){
 $url="aylar/".$profilAdi."/".$yil."/".$aylar[$i];
 mkdir($url);
 }
?>
</body>
</html>