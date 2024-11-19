<?php 
    
    require_once '../models/koneksi.php';
    require_once 'kelas_produk.php';

    // tangkap request element form
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $min_stok = $_POST['min_stok'];
    $idjenis = $_POST['kategori'];
    $tombol = $_POST['submit'];

    // Menyimpan data diatas ke sebuah array
    $data = [
        $kode,      // ? 1 
        $nama,      // ? 2
        $harga,   // ? 3
        $stok,      // ? 5
        $min_stok,   // ? 6
        $idjenis     // ? 7
    ];

    // proses
    $obj = new produk($dbh);
    // $obj->simpan($data);
    switch ($tombol) {
        case 'simpan';
            $obj->simpan($data);
            break;
        case 'ubah';
            $data[] = $_POST['idx']; //tangkap hidden field u/ ? ke-8
            $obj->ubah($data);
            break;
        case 'hapus';
        $id[] = $_POST['idx']; //tangkap ke-1 where id=?
        $obj->hapus($id);
        break;  
        default://tombol batal
        header('Location:http://localhost/LATIHANPHP/PERTEMUAN-14/tugas14/crud/produk.php');
            break;
    }

    // Landing Page
    header('Location:http://localhost/LATIHANPHP/PERTEMUAN-14/tugas14/crud/produk.php');
?>
