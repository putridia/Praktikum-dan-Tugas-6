<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
include "Tugas 1. data.php";

if (empty($nama) || empty($email)) {
    header('Location: Tugas 2. datatidaklengkap.php');
} else {
    echo "Nama : $nama"."<br>";
    echo "Email : $email"."<br>";
    echo "Terakhir Login : $tanggal $waktu";
}
?>