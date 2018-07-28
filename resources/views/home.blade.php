@extends('layouts.app')

@section('content')
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
            <a class="btn btn-primary btn-lg my-1" href="{{ url('/addproject') }}" role="button">Добавить проект</a>
            <a class="btn btn-secondary btn-lg my-1" href="{{ url('/projects') }}" role="button">Все проекты</a>
          </p>
        </div>
        <div class="col-4 d-none d-lg-block">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="http://placehold.it/800x600/666655/fff" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="http://placehold.it/800x600/665566/fff" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="http://placehold.it/800x600/556666/fff" alt="Third slide">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<<<<<<< HEAD
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
              <h5 class="card-title">{{$max1['ProjectName']}}</h5>
              <p class="card-text">{{$max1['Text']}}</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
=======
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
>>>>>>> 1f56ccf79ecc8db84442ba9b01986322d084b684
          </div>
        </div>
      </div>

<<<<<<< HEAD
        <div class="col order-2 order-lg-1">
          <div class="card bg-dark text-white my-2">
            <img class="card-img-top" src="assets/background.jpg" alt="TITLE">
            <div class="card-body">
              <h5 class="card-title">{{$max2['ProjectName']}}</h5>
              <p class="card-text">{{$max2['Text']}}</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
=======
      <div class="col order-2 order-lg-1">
        <div class="card bg-dark text-white my-2">
          <img class="card-img-top" src="assets/background.jpg" alt="TITLE">
          <div class="card-body">
            <h5 class="card-title">Проект №2</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
>>>>>>> 1f56ccf79ecc8db84442ba9b01986322d084b684
          </div>
        </div>
      </div>

<<<<<<< HEAD
        <div class="col order-3">
          <div class="card bg-dark text-white my-2">
            <img class="card-img-top" src="assets/background.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{$max3['ProjectName']}}</h5>
              <p class="card-text">{{$max3['Text']}}</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
=======
      <div class="col order-3">
        <div class="card bg-dark text-white my-2">
          <img class="card-img-top" src="assets/background.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Проект №3</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
>>>>>>> 1f56ccf79ecc8db84442ba9b01986322d084b684
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
@endsection