<?php
if($_POST){
    $jenis=$_POST['jenis'];
    $harga=$_POST['harga'];
    $id_paket=$_POST['id_paket'];
    if(empty($jenis)){
        echo "<script>alert('Jenis paket tidak boleh kosong');location.href='tambah_paket.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into paket (jenis, harga, id_paket) value ('".$jenis."','".$harga."','".$id_paket."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan paket laundry');location.href='tampil_paket.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan paket laundry');location.href='tambah_paket.php';</script>";
        }
    }
}
?>
