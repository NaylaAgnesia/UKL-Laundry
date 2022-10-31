<?php
if($_POST){
    $nama_member=$_POST['nama_member'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $tlp=$_POST['tlp'];
    $id_member=$_POST['id_member'];
    if(empty($nama_member)){
        echo "<script>alert('Nama pelanggan tidak boleh kosong');location.href='tambah_member.php';</script>";
    }elseif(empty($alamat)){
        echo "<script>alert('Alamat tidak boleh kosong');location.href='tambah_member.php';</script>";
    } else {
        include "koneksi.php";
        if(empty($tlp)){
            $update=mysqli_query($conn,"Update member set nama_member='".$nama_member."', jenis_kelamin='".$jenis_kelamin."', alamat='".$alamat."', id_member='".$id_member."' where id_member = '".$id_member."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update member');location.href='tampil_member.php';</script>";
            } else {
                echo "<script>alert('Gagal update member');location.href='ubah_member.php?id_member=".$id_member."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"Update member set nama_member='".$nama_member."', jenis_kelamin='".$jenis_kelamin."', tlp='".$tlp."', alamat='".$alamat."', id_member='".$id_member."' where id_member = '".$id_member."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update member');location.href='tampil_member.php';</script>";
            } else {
                echo "<script>alert('Gagal update member');location.href='ubah_member.php?id_member=".$id_member."';</script>";
            }
        }
    } 
}
?>
 
