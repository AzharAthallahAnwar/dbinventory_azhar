<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class ="container">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="../barang">Barang</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../jenis_barang/index1.php">Jenis barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<h1>tambah barang baru</h1>
    <form action="simpan.php" method="POST">
    <div class="mb-3">
        <label for="" class="form-label">ID barang</label>
        <input type="text" name="id_barang" class="form-control">
        </div>
        <br>
        
        <div class="mb-3">
        <label for="" class="form-label">ID jenis</label>
        <input type="text" name="id_jenis" class="form-control">
        </div>
        <br>

        <div class="mb-3">
        <label for="" class="form-label">Nama barang</label>
        <input type="text" name="nama_barang" class="form-control">
        </div>
        <br>

        <div class="mb-3">
        <label for="" class="form-label">Harga barang</label>
        <input type="number" name="harga_barang" class="form-control">
        </div>
        <br>

        <div class="mb-3">
        <label for="" class="form-label">Stok barang</label>
        <input type="number" name="stok_barang" class="form-control">
        </div>
        <br>

        <div class="mb-3">
        <label for="" class="form-label">expired barang</label>
        <input type="date" name="expired" class="form-control">
        </div>
        <br>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    </div>
</body>
</html>
<script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>