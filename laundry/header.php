<?php 
session_start();
    if($_SESSION['status_login']!=true){
        header('location: login.php');

    }
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Laundry</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info" style="box-shadow: 4px 4px 5px -4px;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">LAUNDRY</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.php">Home</a>
            </li>
            
            <?php
            if ($_SESSION['role'] != 'owner'){
            ?>
            <?php
            if ($_SESSION['role'] != 'kasir'){
            ?>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="tampil_paket.php">Paket Laundry</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="tampil_outlet.php">Data Outlet</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="tampil_user.php">Data Pegawai</a>
            </li>
            <?php
            }
            ?>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="tampil_member.php">Data Pelanggan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="transaksi.php">Transaksi</a>
            </li>
            <?php
            }
            ?>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="laporan.php">Laporan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <div class="container bg-light rounded" style="margin-top:10px">
