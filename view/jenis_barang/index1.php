<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data barang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
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
<h1>tabel jenis barang</h1>
    <a href="tambah1.php" class="btn btn-primary">tambah jenis barang baru</a>
    
    <table class="table table-dark table-striped-columns">
        <tr>
             <td>No.</td>
            <td>ID Jenis</td>
            <td>Nama Barang</td>
            <td>Aksi</td>

        </tr>
        <?php
        include '../../config/koneksi.php';
        $query = mysqli_query($conn, "SELECT * FROM jenis_barang");
        $no=1;
        if(mysqli_num_rows($query)){
            echo "Data ada";
            while($result=mysqli_fetch_assoc($query)){
                ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $result['id_jenis'] ?></td>
                    <td><?php echo $result['nama_jenis'] ?></td>
                    <td>
                        <a href="" class="btn btn-warning">Edit |</a>
                        <a href="" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php
                $no++;
            }
        }else{
            echo "Data kosong";
        }
        ?>
    </table>
    </div>
</body>
</html>
<script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>