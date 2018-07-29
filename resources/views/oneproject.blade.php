@extends('layouts.app') 

@section('title', 'Полезные материалы')

@section('content')
<section id="about">
  <div class="jumbotron jumbotron-fluid text-white my-0" style="background: url('assets/background.jpg') center center fixed no-repeat; background-size: cover;">
    <div class="container">
      <h1 class="display-4">Методические материалы</h1>
      <p class="lead">Хочешь изучить что то новое? Закрепить изученный материал? Становись лучше с нашей помощью!
      </p>
    </div>
  </div>
</section>

{{$infoProject->name}} {{$infoProject->surname}}
	<p>{{$infoProject->ProjectName}}
	<p>{{$infoProject->Text}}
	<p>Дата добавления: {{$infoProject->created_at}}
	<p>Последнее обновление: {{$infoProject->updated_at}}
	<p>Рейтинг на сайте: {{$infoProject->Rating}}


<section id="projects">
  <div class="container my-5 text-center">
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