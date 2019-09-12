<?php
if (isset($_POST['Proses'])) {
    $saran = nl2br($_POST['saran']); // nl2br (new line break)
    echo "Kritik / Saran Anda adalah : <br>";
    echo "<font color=blue><b>$saran</b></font>";
}
?>