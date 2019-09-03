<?php
$arrWarna = array ("Blue","Black","Red","Yellow","Green");

echo "Menampilkan isi  array dengan For : <br>";
for ($i=0; $i<count($arrWarna); $i++) { 
   echo "Do you like <font color=$arrWarna[$i]>". $arrWarna[$i]
."</font> ?<br>";}

echo "<br> Menampilkan isi array dengan Foreach : <br>";
foreach ($arrWarna as $warna){
    echo "Do you like <font color=$warna>". $warna ."</font> ? <br>";
}
?>