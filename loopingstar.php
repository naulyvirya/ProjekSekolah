<html>
<head>
    <title>Latihan Form 3 ~ BINTANG</title>
</head>
<body>
    <form action="" method="post">
    <h2><center>Looping Star Belah Ketupat</center></h2>
    Masukkan Bilangan : <input type="number" name="bintang" require>   
    <button name="submit">Submit</button>
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])) {
        $a = $_POST['bintang'];
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

