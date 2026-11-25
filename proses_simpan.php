<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "ujian_bagas";

$link = mysqli_connect($host, $user, $pass, $database);

if (!$link) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if (isset($_POST['simpan'])) {
    $komptensi      = $_POST['komptensi'];
    $nis            = $_POST['nis'];
    $nama           = $_POST['nama'];
    $tahun_angkatan = $_POST['tahun_angkatan'];

    
    if ($komptensi == 'SIJA') {
        $kode = 'K01';  
    } elseif ($komptensi == 'TKJ') {
        $kode = 'K02';
    } elseif ($komptensi == 'RPL') {
        $kode = 'K03';
    } elseif ($komptensi == 'DKV') {
        $kode = 'K04';
    } else {
        $kode = '';
    }
    

    $file_foto = "";
    if (isset($_FILES['file_foto']) && $_FILES['file_foto']['error'] == 0) {
        $uploads_dir = 'uploads';
        
        if (!is_dir($uploads_dir)) {
            mkdir($uploads_dir, 0777, true);
        }

        $tmp_name  = $_FILES['file_foto']['tmp_name'];
        $file_foto = basename($_FILES['file_foto']['name']);
        
       
        move_uploaded_file($tmp_name, "$uploads_dir/$file_foto");
    }

    
    $sql = "INSERT INTO nama_kelas (kode, komptensi, nis, nama, tahun_angkatan, file_foto)
            VALUES ('$kode', '$komptensi', '$nis', '$nama', '$tahun_angkatan', '$file_foto')";

    if (mysqli_query($link, $sql)) {
        echo "<h2>Data Berhasil Disimpan</h2>";
        
    } else {
        echo "ERROR " . mysqli_error($link);
        echo "<br><br><a href='tambah_database.php'>Kembali ke Form</a>";
    }
} else {
    header("Location: tambah_database.php");
    exit();
}

mysqli_close($link);
?>
