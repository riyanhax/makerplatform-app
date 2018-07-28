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
        <div class="col-auto d-none d-lg-block">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" width="450">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="http://placehold.it/800x600/f44242/fff" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="http://placehold.it/800x600/f44242/fff" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="http://placehold.it/800x600/f44242/fff" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="projects">
  <div class="container my-5 text-center">
    <h2>Список проектов</h2>
    <p>Проекты, набравшие наибольшее количество положительных оценок</p>

    <div class="card-columns">
      <div class="card">
        <img class="card-img-top" src="http://placehold.it/800x600/f44242/fff" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title that wraps to a new line</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a
            little bit longer.</p>
        </div>
      </div>
      <div class="card p-3">
        <blockquote class="blockquote mb-0 card-body">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          <footer class="blockquote-footer">
            <small class="text-muted">
              Someone famous in
              <cite title="Source Title">Source Title</cite>
            </small>
          </footer>
        </blockquote>
      </div>
      <div class="card">
        <img class="card-img-top" src="http://placehold.it/800x600/f44242/fff" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          <p class="card-text">
            <small class="text-muted">Last updated 3 mins ago</small>
          </p>
        </div>
      </div>
      <div class="card bg-primary text-white text-center p-3">
        <blockquote class="blockquote mb-0">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
          <footer class="blockquote-footer">
            <small>
              Someone famous in
              <cite title="Source Title">Source Title</cite>
            </small>
          </footer>
        </blockquote>
      </div>
      <div class="card text-center">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This card has a regular title and short paragraphy of text below it.</p>
          <p class="card-text">
            <small class="text-muted">Last updated 3 mins ago</small>
          </p>
        </div>
      </div>
      <div class="card">
        <img class="card-img" src="http://placehold.it/800x600/f44242/fff" alt="Card image">
      </div>
      <div class="card p-3 text-right">
        <blockquote class="blockquote mb-0">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          <footer class="blockquote-footer">
            <small class="text-muted">
              Someone famous in
              <cite title="Source Title">Source Title</cite>
            </small>
          </footer>
        </blockquote>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly
            taller overall.</p>
          <p class="card-text">
            <small class="text-muted">Last updated 3 mins ago</small>
          </p>
        </div>
      </div>
    </div>

    <a class="btn btn-primary btn-lg my-1" href="#more" role="button">Показать ещё</a>
  </div>
</section>

@endsection