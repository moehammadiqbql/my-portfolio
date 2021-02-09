<!DOCTYPE html>
<html lang="en" id="home">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title><?= $title; ?></title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

  <!-- navbar -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">

        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <a href="#home" class="navbar-brand page-scroll">Muhammad Iqbal</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#about" class="page-scroll">About</a></li>
          <li><a href="#portfolio" class="page-scroll">Portfolio</a></li>
          <li><a href="#contact" class="page-scroll">Contact</a></li>
      </div>
  </nav>
  <!-- akhir navbar -->


  <!-- jumbotron -->
  <div class="jumbotron text-center">
    <img src="<?= base_url('assets/'); ?>img/babal.png" class="img-circle">
    <h1>Muhammad Iqbal</h1>
    <p>Student | Web Development | Blogger</p>
  </div>
  <!-- akhir jumbtron -->


  <!-- about -->
  <section class="about" id="about">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2 class="text-center">About</h2>
          <hr>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-5 col-sm-offset-1">
          <h3>We Are Proffesional</h3>
          <p>Lorem, ipsum dolor sit, amet consectetur adipisicing elit. Sint sequi nemo itaque suscipit repellat delectus vitae commodi ullam recusandae, voluptatum, doloribus, laboriosam illum optio obcaecati a velit, numquam hic nisi!</p>
        </div>
        <div class="col-sm-5">
          <p>Web Development</p>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
              80%
            </div>
          </div>
          <p>Web Desaign</p>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
              70%
            </div>
          </div>
          <p>Game Development</p>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
              60%
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- akhir about -->



  <!-- portfolio -->
  <section class="portfolio" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h2>Portfolio</h2>
          <hr>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-4">
          <a class="thumbnail">
            <img src="<?= base_url('assets/'); ?>img/thumbs/1.png">
          </a>
        </div>
        <div class="col-sm-4">
          <a class="thumbnail">
            <img src="<?= base_url('assets/'); ?>img/thumbs/2.png">
          </a>
        </div>
        <div class="col-sm-4">
          <a class="thumbnail">
            <img src="<?= base_url('assets/'); ?>img/thumbs/3.png">
          </a>
        </div>
        <div class="col-sm-4">
          <a class="thumbnail">
            <img src="<?= base_url('assets/'); ?>img/thumbs/4.png">
          </a>
        </div>
        <div class="col-sm-4">
          <a class="thumbnail">
            <img src="<?= base_url('assets/'); ?>img/thumbs/5.png">
          </a>
        </div>
        <div class="col-sm-4">
          <a class="thumbnail">
            <img src="<?= base_url('assets/'); ?>img/thumbs/6.png">
          </a>
        </div>
      </div>

    </div>
  </section>
  <!-- akhir portfolio -->


  <!-- contact -->
  <section class="contact" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h2>Contact</h2>
          <hr>
          <div class="row">
            <div class="col-lg-3">

            </div>
            <div class="col-lg-6">
              <?= $this->session->flashdata('message') ?>
            </div>
            <div class="col-lg-3">

            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <form method="post" action="<?= base_url('home'); ?>">
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" id="nama" name="nama" class="form-control" placeholder="masukan nama">
              <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" id="email" name="email" class="form-control" placeholder="masukan email">
              <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
              <label for="telp">No Telepon</label>
              <input type="text" id="telp" name="notelp" class="form-control" placeholder="masukan no telp">
              <?= form_error('notelp', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
              <label for="pesan">Pesan</label>
              <textarea class="form-control" rows="10" name="pesan" placeholder="masukan pesan"></textarea>
              <?= form_error('pesan', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <button type="submit" class="btn btn-primary">Kirim pesan</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- akhir contact -->


  <!-- footer -->
  <footer>
    <div class="container text-center">
      <div class="row">
        <div class="col-sm-12">
          <p>&copy; copyright 2020 | built with <i class="glyphicon glyphicon-heart"></i> by. <a href="http://instagram.com/moehammadiqbql">Muhammad Iqbal</a></p>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <a href="http://twitter.com/moehammadiqbql" class="btn btn-primary"><i class="glyphicon glyphicon-send"></i> Follow to twitter</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- akhir footer -->


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="<?= base_url('assets/'); ?>js/jquery-3.5.1.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/jquery.easing.1.3.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

  <script src="<?= base_url('assets/'); ?>js/script.js"></script>
</body>

</html>