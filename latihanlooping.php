<html>
<head>
    <title>Latihan Form 3 ~ BINTANG</title>
</head>
<body>
    <form action="" method="post">
    <h2><center>Looping Star</center></h2>
    <fieldset>
    <legend>Loop</legend>
    Masukkan Bilangan : <input type="number" name="bintang" require><br>   
    <button name="submit">Simpan</button>
    </form>


<?php
    if(isset($_POST['submit'])) {
        $a = $_POST['bintang'];

        echo "<br>Bintang<br>";
        for ($i=0; $i < $a; $i++) { 
            echo "* ";
        }

    echo "<hr>";
    echo "Bintang Piramid";
    echo "<br>";
    for ($i=1; $i <= $a; $i++) {        
            for ($x=$a; $x >= $i; $x--) {
                echo "&nbsp;";
            }     
                for ($n=1; $n <= $i; $n++) {  
                    echo " *";
                }
        echo "<br>";        
        }
        
        echo "<hr>";
        echo "Bintang Piramid Terbalik<br>";
        for ($i=$a; $i >= 1; $i--) {        
        for ($x=$a; $x >= $i; $x--) {
                echo "&nbsp;";
            }  
            for ($n=1; $n <= $i; $n++) {
                    echo " *";
                }
            echo "<br>";
        }
        echo "<hr>";
        echo "Bintang Belah Ketupat<br>";

        for ($i=1; $i <= $a; $i++) {        
            for ($x=$a; $x >= $i; $x--) {
                echo "&nbsp;";
            }     
                for ($n=1; $n <= $i; $n++) {  
                    echo " *";
                }
        echo "<br>";        
        }
        
        for ($i=$a; $i >= 1; $i--) {        
        for ($x=$a; $x >= $i; $x--) {
                echo "&nbsp;";
            }  
            for ($n=1; $n <= $i; $n++) {
                    echo " *";
                }
            echo "<br>";
         
            
        }
        echo "Total bintang = $a";
    }

?>
</fieldset>
</body>
</html>