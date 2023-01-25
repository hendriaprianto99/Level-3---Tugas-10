<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Form Daftar</title>
  </head>
  <body>
    <!-- connection -->
    <?php
        // connect ke file
        include_once("connect.php");
    ?>

    <div class="container">
        <div class="row" style="margin: 50px;">
            <div class="col-md-12 text-center">
                <h4>Form Tambah Produk</h4>
            </div>
        </div>
        <!-- form isi -->
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <form action="add.php" method="post" name="formIsi">
                    <table width="100%" cellpadding="10">
                        <tr>
                            <td>Nama Produk</td>
                            <td><input type="text" class="form-control" name="nama_produk"></td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td><input type="text" class="form-control" name="keterangan"></td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td><input type="text" class="form-control" name="harga"></td>
                        </tr>
                        <tr>
                            <td>Jumlah</td>
                            <td><input type="text" class="form-control" name="jumlah"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" class="form-control btn btn-primary" name="Submit" value="Add"></td>
                        </tr>
                    </table>
                </form>
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

    <!-- Insert data -->
    <?php 
        if(isset($_POST['Submit'])) {
            // var_dump($_POST); die();
            $nama_produk = $_POST['nama_produk'];
            $keterangan = $_POST['keterangan'];
            $harga = $_POST['harga'];
            $jumlah = $_POST['jumlah'];

            $insert = mysqli_query($db, "INSERT INTO mahasiswa(id, nama_produk, keterangan, harga, jumlah) VALUES('', '$nama_produk', '$keterangan', '$harga', '$jumlah');");

            header("Location:index.php");
        }
    ?>