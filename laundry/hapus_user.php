<?php 
    if($_GET['id_user']){
        include "koneksi.php";
        $qry_hapus_user=mysqli_query($conn,"delete from user where id_user='".$_GET['id_user']."'");
        if($qry_hapus_user){
            echo "<script>alert('Sukses menghapus user');location.href='tampil_user.php';</script>";
        } else {
            echo "<script>alert('Gagal menghapus user');location.href='tampil_user.php';</script>";
        }
    }
