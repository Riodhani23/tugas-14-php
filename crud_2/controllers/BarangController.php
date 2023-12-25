<?php 
    require_once '../models/dbkoneksi.php';
    require_once 'class_produk.php';

    // tangkap request element form
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $kondisi = $_POST['kondisi'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $idjenis = $_POST['jenis'];
    $foto = $_POST['foto'];
    $tombol = $_POST['submit'];

    // Menyimpan data diatas ke sebuah array
    $data = [
        $kode,      // ? 1 
        $nama,      // ? 2
        $kondisi,   // ? 3
        $harga,     // ? 4
        $stok,      // ? 5
        $idjenis,   // ? 6
        $foto       // ? 7
    ];

    // proses
    $obj = new Produk($dbh);
    $obj->simpan($data);

    // Landing Page
    header('Location://localhost/Latihan_PHP/p13/crud_2/index.php');

?>