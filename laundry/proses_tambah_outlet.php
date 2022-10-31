<?php
if($_POST){
    $nama_outlet=$_POST['nama_outlet'];
    $alamat=$_POST['alamat'];
    $telepon=$_POST['telepon'];
    $id_outlet=$_POST['id_outlet'];
    if(empty($nama_outlet)){
        echo "<script>alert('Nama outlet tidak boleh kosong');location.href='tambah_outlet.php';</script>";
    } elseif(empty($alamat)){
        echo "<script>alert('Alamat tidak boleh kosong');location.href='tambah_outlet.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into outlet (nama_outlet, alamat, telepon, id_outlet) value ('".$nama_outlet."','".$alamat."','".$telepon."','".$id_outlet."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan outlet');location.href='tampil_outlet.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan outlet');location.href='tambah_outlet.php';</script>";
        }
    }
}
?>
