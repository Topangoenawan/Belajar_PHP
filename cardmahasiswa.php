<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
      html {
        position: relative;
      }

      body {
        margin-bottom: 100px;
      }

      .jumbotron img {
        width: 250px;
      }

      hr {
        border-top: 3px solid rgb(201, 201, 201);
      }

      section {
        min-height: 600px;
        padding: 20px;
      }

      .portfolio {
        background-color: rgb(224, 224, 224);
      }

      footer {
        position: absolute;
        bottom: 0;
        padding: 20px;
        width: 100%;
        height: 100px;
        background-color: rgb(63, 63, 63);
      }

      footer p {
        color: rgb(224, 224, 224);
      }

    </style>
    <title>Document</title>
</head>
<body>
    <!-- header -->
    <div class="jumbotron text-center">
      <img src="img/5.png" alt="" class="img-circle">
      <h1>Topan Goenawan</h1>
      <p>College Student | Employee | Ordinary People</p>
    </div>
    <!-- akhir header -->

     <!-- about -->
     <section class="about" id="about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h3 class="text-center">About</h3>
            <hr>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-5 col-sm-offset-1">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed quaerat nisi dolorem voluptatibus accusamus. Suscipit veritatis dolor tempore voluptate maxime labore, facilis harum cum quasi tempora eligendi temporibus velit aliquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea illum porro a cumque ducimus sint, eum itaque mollitia vel laboriosam quo quam sunt nulla voluptatem nemo doloribus dolorum. Iusto, accusantium.</p>
          </div>
          <div class="col-sm-5">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident, dolorum. Adipisci cumque ut atque vitae cupiditate voluptatum aliquam hic expedita assumenda delectus perferendis aut debitis, fuga magni quia quam ex unde culpa quisquam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Et placeat quaerat dolor enim, eveniet neque velit at, voluptatibus ipsam aut commodi laborum. Molestiae voluptatibus nulla nam quae doloribus, tempore est?</p>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir about -->

    <!-- Portfolio -->
    <section class="portfolio" id="portfolio">
    <div class="container">
    <?php include "config.php"?>
      <div class="row">
        <div class="col-sm-12">
          <h3 class="text-center">Portfolio</h3>
          <hr>
        </div>
      </div>

      <div class="row">
        <?php
          $sql =mysqli_query ($mysqli, "SELECT * FROM `mahasiswa`");
          while($hasil = mysqli_fetch_array($sql)){
            echo "
            <div class='card col-sm-3'>
              <img class='card-img-bottom img-thumbnail' src='img/img_avatar1.png' alt='Card image' >
                <div class='card-body'>
                  <h4 class='card-title'>$hasil[nama_mahasiswa]</h4>
                    <p>
                      NIM        : $hasil[nim] <br>  
                      No Telepon : $hasil[no_tlp] <br>
                      Email      : $hasil[email]
                    </p>
                </div>
            </div>
            ";
          }
        ?>
    </div>
    </div>
    </section>
    <!-- akhir portfolio -->

    <!-- kontak -->
    <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h3>Contact</h3>
          <hr>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <form>
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" placeholder="masukan nama">
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="masukan email">
            </div>

            <div class="form-group">
              <label for="no_telepon">No Telepon</label>
              <input type="text" class="form-control" id="no_telepon" placeholder="masukan no telepon">
            </div>

            <select class="form-control">
              <option>-- Pilih Kategori --</option>
              <option>Web Design</option>
              <option>Web Develepoment</option>
            </select>

            <div class="form-group">
              <label for="pesan">Pesan</label>
              <textarea class="form-control" rows="3" placeholder="masukan pesan"></textarea>
            </div>
            
            <button type="button" class="btn btn-primary">Kirim Pesan</button>
          </form>
        </div>
      </div>
    </div>
    </section>
    <!-- akhir kontak-->

    <!-- footer -->
    <footer>
    <div class="container text-center">
        <div class="row">
          <div class="col-sm-12">
            <p>&copy;Copyright 2021 | build by <a href="#">TopanGoenawan</a></p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">
            <button type="button" class="btn btn-danger">Subscribe to Youtube</button>
          </div>
        </div>
      </div>
    </footer>   
    <!-- akhir footer -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>