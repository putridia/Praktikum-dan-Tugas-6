<?php
    //mengambil data dari parameter form biodata
    $nama        = $_GET['nama'];
    $tempatlahir = $_GET['tempatlahir'];
    $tgllahir    = $_GET['tgllahir'];
    $kelamin     = $_GET['kelamin'];
    $alamat      = $_GET['alamat'];
    $agama       = $_GET['agama'];
    $pekerjaan   = $_GET['pekerjaan'];

    //menampilkan data dari biodata
    if (empty($nama) || empty($tempatlahir) || empty($tgllahir) || empty($kelamin) || empty($alamat) || empty($agama) || empty($pekerjaan)) {
        header('Location: Tugas 3. biodatatidaklengkap.php');
    } else {
    echo "<h2>FORM BIODATA SEDERHANA</h2>";
    echo "Nama                   = $nama"."<br>";
    echo "Tempat & Tanggal Lahir = $tempatlahir, $tgllahir"."<br>";
    echo "Jenis Kelamin          = $kelamin"."<br>";
    echo "Alamat                 = $alamat"."<br>";
    echo "Agama                  = $agama"."<br>";
    echo "Pekerjaan              = $pekerjaan"."<br>";
    }
?>