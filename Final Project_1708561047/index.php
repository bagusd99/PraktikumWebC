<?php 
include 'function.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"/>
      <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet"> 
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,700&display=swap"
      rel="stylesheet"/>
      <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <title>Simak Udayana</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Simak</a>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item align-self-center active">
              <a class="nav-link" href="index.php"
                >Home <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item align-self-center">
              <a class="nav-link"  href="#berita">Berita <span class="sr-only"></span></a>
            </li>
            
            <li class="nav-item align-self-center">
              <a href="login.php" class="btn px-4 btn-secondary ml-5 logintombol">Log In</a>
            </li>
            <li class="nav-item align-self-center ">
              <a class="btn px-4 btn-primary ml-2 registombol" href="register.php" role="button"
              >Register</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>

<br><br>
      <div class="container">
        <h1 class="display-4">Selamat Datang Di Halaman Website <br> Universitas Udayana</h1>
      </div>


    <section id="berita" class="content">
      <div class="container">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia repellendus dolorem amet aliquid dignissimos unde, dolor quasi recusandae ex nesciunt quisquam obcaecati vitae deserunt sequi iste ut ducimus tempore. Tempora.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem voluptatibus doloribus quaerat. Quo non consequatur, nihil dignissimos quos eaque ipsum quaerat accusamus error dolores? Neque vitae ipsa laborum nesciunt sit.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi pariatur eum nostrum omnis velit itaque odio, vero aliquid dolor laudantium impedit amet cumque ipsum sed. Nesciunt facere voluptate voluptatum labore.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia repellendus dolorem amet aliquid dignissimos unde, dolor quasi recusandae ex nesciunt quisquam obcaecati vitae deserunt sequi iste ut ducimus tempore. Tempora.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem voluptatibus doloribus quaerat. Quo non consequatur, nihil dignissimos quos eaque ipsum quaerat accusamus error dolores? Neque vitae ipsa laborum nesciunt sit.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi pariatur eum nostrum omnis velit itaque odio, vero aliquid dolor laudantium impedit amet cumque ipsum sed. Nesciunt facere voluptate voluptatum labore.</p>
        <h2 style="color: black; clear: both;">Berita Lainnya</h2>
        <img src="gambar/4.jpg" alt="foto"
            style="width: 250px; float: left; margin-right: 25px; margin-bottom: 35px;">
            <img src="gambar/4.jpg" alt="foto"
            style="width: 250px; float: left; margin-right: 25px; margin-bottom: 35px;">
            <img src="gambar/4.jpg" alt="foto"
            style="width: 250px; float: left; margin-right: 25px; margin-bottom: 35px;">
      </div>
    </section>
    <section class="footer">
        <footer class="page-footer font-small mdb-color lighten-3 pt-4">
        <div class="container text-center text-md-left">
          <div class="row">


            <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

            
              <h5 class="font-weight-bold text-uppercase mb-4">Lorem Ipsum</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit amet numquam iure provident voluptate
                esse
                quasi, veritatis totam voluptas nostrum.</p>
            </div>
            <hr class="clearfix w-100 d-md-none">
            <hr class="clearfix w-100 d-md-none">
            <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

              <h5 class="font-weight-bold text-uppercase mb-4">Address</h5>
              <ul class="list-unstyled">
                <li>
                  <p>
                    <i class="fas fa-home mr-3"></i> Bali</p>
                </li>
                <li>
                  <p>
                    <i class="fas fa-envelope mr-3"></i> email@email.com</p>
                </li>
                <li>
                  <p>
                    <i class="fas fa-phone mr-3"></i> +6289898989</p>
                </li>
                <li>
                  <p>
                    <i class="fas fa-print mr-3"></i> +6289898989</p>
                </li>
              </ul>
            </div>
            </div>
          </div>
        </div>
</footer>
    </section>
  </body>
  <script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"
  ></script>
  <script
    src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"
  ></script>
</html>
