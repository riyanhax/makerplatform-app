@extends('layouts.app')

@section('title', 'Главная страница')

@section('content')
<section id="about">
  <div class="jumbotron jumbotron-fluid text-white my-0" style="background: url('assets/background.jpg') center center fixed no-repeat; background-size: cover;">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="display-4">Проектная платформа</h1>
          <p class="lead">У тебя есть проект? Давай расскажем миру о нем!
          </p>
          <hr class="my-3 hr-inverse">
          <p>Maker Platform — инструмент который поможет организовать твою проектную деятельность, собрать команду и представить свой проект на масштабных конкурсах.<br>Изучай! Общайся! Создавай!</p>
          <p class="lead">
            <a class="btn btn-primary btn-lg my-1" href="{{ route('addproject') }}" role="button">Добавить проект</a>
            <a class="btn btn-secondary btn-lg my-1" href="{{ route('projects') }}" role="button">Все проекты</a>
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
                <img class="d-block w-100" src="{{ asset('assets/photos/6.jpg') }}" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('assets/photos/2.jpg') }}" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('assets/photos/3.jpg') }}" alt="Third slide">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="top">
  <div class="container my-5 text-center">
    <h2>Топ проектов</h2>
    <p>Проекты, набравшие наибольшее количество положительных оценок</p>
    <div class="row">

      <div class="col-12 col-lg-4 order-1 order-lg-2">
        <div class="card bg-dark text-white my-2">
          <img class="card-img-top" src="{{ asset('assets/photos/4.jpg') }}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">{{ $top[0]['ProjectName'] }}</h5>
            <p class="card-text">{{ $top[0]['Text'] }}</p>
            <a href="#" class="btn btn-primary btn-sm">Подробнее</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-4 order-2 order-lg-1">
        <div class="card bg-dark text-white my-2">
          <img class="card-img-top" src="{{ asset('assets/photos/5.jpg') }}" alt="TITLE">
          <div class="card-body">
            <h5 class="card-title">{{ $top[1]['ProjectName'] }}</h5>
            <p class="card-text">{{ $top[1]['Text'] }}</p>
            <a href="#" class="btn btn-primary btn-sm">Подробнее</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-4 order-3">
        <div class="card bg-dark text-white my-2">
          <img class="card-img-top" src="{{ asset('assets/photos/1.jpg') }}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">{{ $top[2]['ProjectName'] }}</h5>
            <p class="card-text">{{ $top[2]['Text'] }}</p>
            <a href="#" class="btn btn-primary btn-sm">Подробнее</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section id="contests" class="py-1 bg-dark">
  <div class="container my-5 text-center">
    <h2 class="text-white">Конкурсы проектов</h2>
    <p class="text-white">Нужны ресурсы на проект или есть что продемонстрировать? <br>Maker Platform поможет быть в курсе и напомнит о важных мероприятиях.</p>

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
    <p>Компании, которые поддерживают нашу миссию</p>

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