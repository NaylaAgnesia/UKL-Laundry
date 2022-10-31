<?php 
    if($_GET['id_paket']){
        include "koneksi.php";
        $qry_hapus_paket=mysqli_query($conn,"delete from paket where id_paket='".$_GET['id_paket']."'");
        if($qry_hapus_paket){
            echo "<script>alert('Sukses menghapus paket');location.href='tampil_paket.php';</script>";
        } else {
            echo "<script>alert('Gagal menghapus paket');location.href='tampil_paket.php';</script>";
        }
    }
