<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Level 3 - Tugas 10</title>
  </head>
  <body>
    <!-- connection -->
    <?php
    // connect ke file
    require_once("connect.php");

    // query data
    $dataProduk = mysqli_query($db, "SELECT * FROM produk"); ?>

    <!-- table -->
    <div class="container">
      <div class="row">
        <div class="col-sm-10 offset-sm-1">
          <h1 class="text-center m-4 py-4">Daftar Barang</h1>
          <table class="table text-center table-hover table-striped">
            <!-- table head -->
            <thead>
              <tr class="table-primary">
                <th>Nama Produk</th>
                <th>Keterangan</th>
                <th>Harga</th>
                <th>Jumlah</th>
              </tr>
            </thead>

            <!-- table data -->
            <tbody>
              <!-- loop buat nampilin data -->
              <?php
              foreach($dataProduk as $produk) {
                echo "<tr>
                        <td>" . $produk['nama_produk'] . "</td>
                        <td>" . $produk['keterangan'] . "</td>
                        <td>" . $produk['harga'] . "</td>
                        <td>" . $produk['jumlah'] . "</td>
                      </tr>";
              } ?>
            </tbody>
          </table>

          <!-- tambah produk -->
          <div class="row mb-3">
            <div class="col-sm-10 offset-sm-1 text-center">
              <a href="add.php" class="btn btn-primary mt-3 px-5 py-2">Tambahkan Baru</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> -->
  </body>
</html>