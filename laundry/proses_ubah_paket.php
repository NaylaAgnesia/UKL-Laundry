<?php
if($_POST){
    $id_paket=$_POST['id_paket'];
    $jenis=$_POST['jenis'];
    $harga=$_POST['harga'];
    if(empty($jenis)){
        echo "<script>alert('Paket laundry tidak boleh kosong');location.href='tambah_paket.php';</script>";
    } else {
        include "koneksi.php";
        if(empty($harga)){
            $update=mysqli_query($conn,"update paket set jenis='".$jenis."', id_paket='".$id_paket."' where id_paket = '".$id_paket."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update paket laundry');location.href='tampil_paket.php';</script>";
            } else {
                echo "<script>alert('Gagal update paket laundry');location.href='ubah_paket.php?id_paket=".$id_paket."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update paket set jenis='".$jenis."', harga='".$harga."', id_paket='".$id_paket."' where id_paket = '".$id_paket."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update paket laundry');location.href='tampil_paket.php';</script>";
            } else {
                echo "<script>alert('Gagal update paket laundry');location.href='ubah_paket.php?id_paket=".$id_paket."';</script>";
            }
        }
    } 
}
?>
 
