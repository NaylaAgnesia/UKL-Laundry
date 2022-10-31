<?php 
    if($_GET['id_outlet']){
        include "koneksi.php";
        $qry_hapus_outlet=mysqli_query($conn,"delete from outlet where id_outlet='".$_GET['id_outlet']."'");
        if($qry_hapus_outlet){
            echo "<script>alert('Sukses menghapus outlet');location.href='tampil_outlet.php';</script>";
        } else {
            echo "<script>alert('Gagal menghapus outlet');location.href='tampil_outlet.php';</script>";
        }
    }
