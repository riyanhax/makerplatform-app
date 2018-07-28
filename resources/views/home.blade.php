<!doctype html>
<html class="no-js" lang="ru">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Заголовок</title>
  <meta name="description" content="ОПИСАНИЕ">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/vendor/normalize-8.0.0.css">
  <link rel="stylesheet" href="css/vendor/bootstrap-4.1.3.min.css">
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <link rel="stylesheet" href="css/main.css">

</head>

<body data-spy="scroll" data-target="#navbarMenu" data-offset="100">
  <!--[if lte IE 9]>
    <div class="bg-warning text-dark py-3 text-center">Вы используете <strong>устаревший</strong> браузер Internet Explorer.<br>Пожалуйста, <a href="https://browsehappy.com/">обновите браузер</a>.</div>
  <![endif]-->

  <header id="header">

    <nav id="navbar" class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="/">
          <span class="fa-stack fa-lg">
            <i class="fas fa-circle fa-stack-2x text-secondary"></i>
            <i class="fas fa-atom fa-stack-1x"></i>
          </span>
          Maker Platform
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent"
          aria-expanded="false" aria-label="Открыть меню">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto mr-3">
            <li class="nav-item px-1 active">
              <a class="nav-link" href="#">Главная</a>
            </li>
            <li class="nav-item px-1">
              <a class="nav-link" href="#">Проекты</a>
            </li>
            <li class="nav-item px-1 dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuCompetitions" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                Конкурсы
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuCompetitions">
                <a class="dropdown-item" href="#">Для школьников</a>
                <a class="dropdown-item" href="#">Для студентов</a>
              </div>
            </li>
            <li class="nav-item px-1">
              <a class="nav-link disabled" href="#">Материалы</a>
            </li>
          </ul>
          <div class="form-inline btn-group" role="group">
            <button class="btn btn-outline-light" type="button">Регистрация</button>
            <button class="btn btn-outline-light" type="button">Вход</button>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <section id="about">
    <div class="jumbotron jumbotron-fluid text-white" style="background: url('assets/background.jpg') center center fixed no-repeat; background-size: cover;">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1 class="display-4">Проектная платформа</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content
              or information.
            </p>
            <hr class="my-3 hr-inverse">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <p class="lead">
              <a class="btn btn-primary btn-lg my-1" href="#" role="button">Добавить проект</a>
              <a class="btn btn-secondary btn-lg my-1" href="#" role="button">Все проекты</a>
            </p>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src="http://placehold.it/450x300/8e41f4/fff" alt="" width="450">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="top">
    <div class="container my-5 text-center">
      <h2>Топ проектов</h2>
      <p>Проекты, набравшие наибольшее количество положительных оценок</p>
      <div class="row align-items-center">

        <div class="col-12 col-lg-5 order-1 order-lg-2">
          <div class="card bg-dark text-white my-2">
            <img class="card-img-top" src="assets/background.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Проект №1</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>

        <div class="col order-2 order-lg-1">
          <div class="card bg-dark text-white my-2">
            <img class="card-img-top" src="assets/background.jpg" alt="TITLE">
            <div class="card-body">
              <h5 class="card-title">Проект №2</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>

        <div class="col order-3">
          <div class="card bg-dark text-white my-2">
            <img class="card-img-top" src="assets/background.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Проект №3</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section id="contests" class="py-1 bg-dark">
    <div class="container my-5 text-center">
      <h2 class="text-white">Конкурсы проектов</h2>
      <p class="text-white">Use the
        <code>Portfolio module</code> to spread your works to the world</p>

      <div class="card text-center mb-3">
        <div class="card-header">
          Featured
        </div>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        <div class="card-footer text-muted">
          2 days ago
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6">
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>


  <section id="latest">
    <div class="container my-5 text-center">
      <h2>Новые проекты</h2>
      <p>Use the
        <code>Clients module</code> to show your customers, the clients who already trust your business</p>
      <hr>


      <div id="showcase" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner w-100 mx-auto">
            <div class="carousel-item active">
                <div class="card-deck mx-5">
                  <div class="card">
                    <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f44242/fff" alt="Card image cap">
                    <div class="card-body">
                      <h4 class="card-title">Card 1</h4>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content
                        is a little bit longer.</p>
                      <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                      </p>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f44242/fff" alt="Card image cap">
                    <div class="card-body">
                      <h4 class="card-title">Card 1</h4>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content
                        is a little bit longer.</p>
                      <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                      </p>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f44242/fff" alt="Card image cap">
                    <div class="card-body">
                      <h4 class="card-title">Card 1</h4>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content
                        is a little bit longer.</p>
                      <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                      </p>
                    </div>
                  </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card-deck mx-5">
                <div class="card">
                  <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f44242/fff" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Card 1</h4>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content
                      is a little bit longer.</p>
                    <p class="card-text">
                      <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                  </div>
                </div>
                <div class="card">
                  <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f44242/fff" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Card 1</h4>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content
                      is a little bit longer.</p>
                    <p class="card-text">
                      <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                  </div>
                </div>
                <div class="card">
                  <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f44242/fff" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Card 1</h4>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content
                      is a little bit longer.</p>
                    <p class="card-text">
                      <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                  </div>
                </div>
            </div>
          </div>
        </div>

        <a class="carousel-control-prev justify-content-start" href="#showcase" role="button" data-slide="prev">
            <i class="fas fa-arrow-circle-left fa-2x text-dark"></i>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next justify-content-end" href="#showcase" role="button" data-slide="next">
            <i class="fas fa-arrow-circle-right fa-2x text-dark"></i>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>
  </section>

  <section id="partners" class="py-1 bg-secondary text-white">
    <div class="container my-5 text-center">
      <h2>Наши партнёры</h2>
      <p>Use the
        <code>Clients module</code> to show your customers, the clients who already trust your business</p>

      <div class="row">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-4">
          <img src="https://www.utmn.ru/upload/medialibrary/bfc/utmn_inv2_rus.png" width="200">
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-4">
          <img src="https://www.utmn.ru/upload/medialibrary/bfc/utmn_inv2_rus.png" width="200">
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-4">
          <img src="https://www.utmn.ru/upload/medialibrary/bfc/utmn_inv2_rus.png" width="200">
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-4">
          <img src="https://www.utmn.ru/upload/medialibrary/bfc/utmn_inv2_rus.png" width="200">
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-4">
          <img src="https://www.utmn.ru/upload/medialibrary/bfc/utmn_inv2_rus.png" width="200">
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-4">
          <img src="https://www.utmn.ru/upload/medialibrary/bfc/utmn_inv2_rus.png" width="200">
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-4">
          <img src="https://www.utmn.ru/upload/medialibrary/bfc/utmn_inv2_rus.png" width="200">
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-4">
          <img src="https://www.utmn.ru/upload/medialibrary/bfc/utmn_inv2_rus.png" width="200">
        </div>
      </div>
    </div>
  </section>

  <footer id="footer" class="jumbotron jumbotron-fluid text-white bg-dark my-0 py-3">
    <div class="container">
      <ul class="nav justify-content-center pb-4 text-white">
        <li class="nav-item">
          <a class="nav-link text-info active" href="#">Link 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-info" href="#">Link 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-info" href="#">Link 3</a>
        </li>
      </ul>

      <div class="text-center">
        Made with
        <i class="fas fa-heart text-danger">
          <span class="sr-only">love</span>
        </i>
        <br> Copyright © 2017
      </div>
    </div>
  </footer>

  <script>
    $(document).ready(function () {
      $("#myCarousel").on("slide.bs.carousel", function (e) {
        var $e = $(e.relatedTarget);
        var idx = $e.index();
        var itemsPerSlide = 3;
        var totalItems = $(".carousel-item").length;

        if (idx >= totalItems - (itemsPerSlide - 1)) {
          var it = itemsPerSlide - (totalItems - idx);
          for (var i = 0; i < it; i++) {
            // append slides to end
            if (e.direction == "left") {
              $(".carousel-item")
                .eq(i)
                .appendTo(".carousel-inner");
            } else {
              $(".carousel-item")
                .eq(0)
                .appendTo($(this).find(".carousel-inner"));
            }
          }
        }
      });
    });

    /*$(document).ready(function () {
      if ($(document).scrollTop() > 40) {
        $("#navbar").removeClass("not-scrolled").addClass("scrolled");
      }

      $("#navbar-toggler").click(function () {
        var collapsing = $("#navbarMenu").hasClass("collapsing");
        if (collapsing) return;
        var expanded = ($("#navbar-toggler").attr("aria-expanded") === "false");
        $("#navbar").toggleClass("expanded", expanded);
        $("#navbar").toggleClass("not-expanded", !expanded);
      });


      $("#navbarMenu a").each(function () {
        var href = $(this).attr("href");
        if (!/^#.+/.test(href)) return;
        $(this).click(function (e) {
          $(window).scrollTo($(href), 500, {
            offset: -80
          });
          e.preventDefault();
          return false;
        });
      });
    });

    $(window).scroll(function () {
      var offset = $(document).scrollTop();
      var hasClass = $("#navbar").hasClass("scrolled");
      if (offset > 40 && !hasClass) {
        $("#navbar").removeClass("not-scrolled").addClass("scrolled");
      } else if (offset <= 40 && hasClass) {
        $("#navbar").removeClass("scrolled").addClass("not-scrolled");
      }
    });*/
  </script>












  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="js/vendor/jquery-3.3.1.min.js"></script>
  <script src="js/vendor/jquery.scrollTo-2.1.2.min.js"></script>
  <script src="js/vendor/popper-1.14.3.min.js"></script>
  <script src="js/vendor/bootstrap-4.1.3.min.js"></script>

  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
</body>

</html>