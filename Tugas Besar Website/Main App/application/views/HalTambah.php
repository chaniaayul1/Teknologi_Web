<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Shop Homepage - Start Bootstrap Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="<?php echo base_url('assets\css\styles2.css'); ?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets\css\styles.css'); ?>" rel="stylesheet" />
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">

      <a class="navbar-brand" href="<?php echo site_url('ctoko'); ?>">
        <h1>Be.U</h1>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars ms-1"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
          <li class="nav-item"><a class="nav-link" href="<?php echo site_url('ctoko/belanja'); ?>">Belanja</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo site_url('ctoko/tambah'); ?>">Jual</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo site_url('ctoko/'); ?>#services">Manfaat</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo site_url('ctoko/'); ?>#portfolio">Kategori</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo site_url('ctoko/'); ?>#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo site_url('ctoko/'); ?>#team">Team</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo site_url('ctoko/'); ?>#contact">Contact</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo site_url('clogin/logout'); ?>">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Header-->
  <header class="bg-dark py-5">

    <div class="container px-4 px-lg-5 my-5">
      <div class="text-center text-white">

      </div>
    </div>
  </header>
  <br>
  <!-- Form Tambah Produk -->
  <div class="container">
    <h2>Formulir Penambahan Produk</h2>
    <form class="form-horizontal" action="<?php echo base_url() . 'ctoko/prosestambah'; ?>" method="POST">

      <div class="form-group">
        <label class="control-label col-sm-2" for="id">ID Barang</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="id" placeholder="ID Barang" name="id">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="nama">Nama Barang</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nama" placeholder="Nama Barang" name="nama">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="harga">Harga Barang</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="harga" placeholder="Harga Barang" name="harga">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="stok">Stok Barang</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="stok" placeholder="Stok Barang" name="stok">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="toko">Nama Toko</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="toto" placeholder="Nama Toko" name="toto">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </div>
    </form>
  </div>

  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="<?php echo base_url('assets\js\scripts.js'); ?>"></script>
</body>

</html>