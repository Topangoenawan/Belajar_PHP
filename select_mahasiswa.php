<?php
include "config.php";

$sql =mysqli_query ($mysqli, "SELECT * FROM `mahasiswa`");

while($data = mysqli_fetch_array($sql)) {
    echo "NIM : ".$data['nim']."<br>";
    echo "Nama Mahasiswa : ".$data['nama_mahasiswa']."<br>";
    echo "No Telpon : ".$data['no_tlp']."<br>";
    echo "Email : ".$data['email']."<br>";
    echo "<br>";
}



?>
card