<?php
if($_POST){
    $nama_outlet=$_POST['nama_outlet'];
    $alamat=$_POST['alamat'];
    $telepon=$_POST['telepon'];
    $id_outlet=$_POST['id_outlet'];
    if(empty($nama_outlet)){
        echo "<script>alert('Nama outlet tidak boleh kosong');location.href='tambah_outlet.php';</script>";
    }elseif(empty($alamat)){
        echo "<script>alert('Alamat tidak boleh kosong');location.href='tambah_outlet.php';</script>";
    } else {
        include "koneksi.php";
        if(empty($telepon)){
            $update=mysqli_query($conn,"Update outlet set nama_outlet='".$nama_outlet."', alamat='".$alamat."', id_outlet='".$id_outlet."' where id_outlet = '".$id_outlet."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update outlet');location.href='tampil_outlet.php';</script>";
            } else {
                echo "<script>alert('Gagal update outlet');location.href='ubah_outlet.php?id_outlet=".$id_outlet."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"Update outlet set nama_outlet='".$nama_outlet."', telepon='".$telepon."', alamat='".$alamat."', id_outlet='".$id_outlet."' where id_outlet = '".$id_outlet."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update outlet');location.href='tampil_outlet.php';</script>";
            } else {
                echo "<script>alert('Gagal update outlet');location.href='ubah_outlet.php?id_outlet=".$id_outlet."';</script>";
            }
        }
    } 
}
?>
 
