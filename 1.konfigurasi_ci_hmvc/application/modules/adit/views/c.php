<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Righteous|Viga&display=swap" rel="stylesheet">

  <!-- CSS -->
  <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">

  <!-- owl carousel -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/owlcarousel/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/owlcarousel/owl.theme.default.min.css">

  <!-- Fontawesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" integrity="sha384-v8BU367qNbs/aIZIxuivaU55N5GPF89WBerHoGA4QTcbUjYiLQtKdrfXnqAcXyTv" crossorigin="anonymous">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <title>profile</title>
</head>

<body>

  <!--Navbar  -->


  <nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container">
      <a class="navbar-brand" href="#">ditWeb</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Project</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- jumbotron -->


  <div class="jumbotron jumbotron-fluid ">
    <div class="container">
      <div class="sapa">
        <h1>Hai, i'm adit</h1>
        <span>Welcome to my website</span>
      </div>
    </div>
  </div>

  <!-- content -->
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <div class="bungkus shadow p-3 mb-5">
          <img src="<?= base_url() ?>assets/img/adit3.jpg" alt="foto" class="gambar">
          <div class="card kotak">
            <div class="card-body">
              <h5 class="card-title">Bio</h5>
              <p class="card-text text" style="color: black;">📲ID Line. adityaajinug
                <br> "hanyalah website yang berisi kebanggaan tersendiri" <br>
                Ungaran, Jawa Tengah, Indonesia <br>
                #TEPSEMANGATPAK
              </p>

              <div class="icon">
                <i class="fab fa-twitter"></i>&nbsp;
                <i class="fab fa-youtube"></i>&nbsp;
                <i class="fab fa-instagram"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-7 text-justify">
        <div class="text1">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui id minima fugiat vero rerum iusto placeat sequi nemo doloremque rem nostrum odit, enim similique. Provident ut repellendus, hic distinctio ipsum fuga voluptatum quibusdam animi rem necessitatibus quos voluptates ea nemo sint enim perspiciatis libero quae. Rerum, at tempora. Ipsum enim neque nihil ut delectus esse excepturi aspernatur similique unde! A earum ab veritatis, inventore ducimus eos quo dolore, alias consequatur delectus officiis fugit. Dolor molestiae accusantium, culpa architecto quisquam laborum. Dolorum, amet ex repudiandae quidem molestias rem itaque dolor aut tenetur, iusto temporibus reiciendis similique corrupti dignissimos voluptas saepe officia!
        </div>
      </div>
    </div>
  </div>

  <!-- About -->
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-5">
        <h1>About Me</h1>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus sapiente est eos odio itaque amet, voluptatem cupiditate quidem dolor nihil?
      </div>
      <div class="col-md-7">
        <h3>Website</h3>
        <div class="progress">
          <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
        </div>
        <h3>Website</h3>
        <div class="progress">
          <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">70%</div>
        </div>
        <h3>Website</h3>
        <div class="progress">
          <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">85%</div>
        </div>
      </div>
    </div>
  </div>

  <!-- gal -->
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="owl-carousel">
          <div><img src="adit3.jpg" alt="" width="100px"></div>
          <div><img src="adit3.jpg" alt="" width="100px"></div>
          <div><img src="adit3.jpg" alt="" width="100px"></div>
          <div><img src="adit3.jpg" alt="" width="100px"></div>
          <div><img src="adit3.jpg" alt="" width="100px"></div>
        </div>
      </div>
    </div>

  </div>


  <br>














  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <!-- owl carousel js -->
  <script src="js/jquery.min.js"></script>
  <script src="js/owl.carousel.js"></script>

  <script>
    $(document).ready(function() {
      $(".owl-carousel").owlCarousel();
    });
  </script>
</body>

</html>