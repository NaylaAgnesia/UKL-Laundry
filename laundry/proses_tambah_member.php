<?php
if($_POST){
    $nama_member=$_POST['nama_member'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $tlp=$_POST['tlp'];
    $id_member=$_POST['id_member'];
    if(empty($nama_member)){
        echo "<script>alert('Nama pelanggan tidak boleh kosong');location.href='tambah_member.php';</script>";
 
    } elseif(empty($tlp)){
        echo "<script>alert('Telepon tidak boleh kosong');location.href='tambah_member.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into member (nama_member, alamat, jenis_kelamin, tlp, id_member) value ('".$nama_member."','".$alamat."','".$jenis_kelamin."','".$tlp."','".$id_member."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan pelanggan');location.href='tampil_member.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pelanggan');location.href='tambah_member.php';</script>";
        }
    }
}
?>
