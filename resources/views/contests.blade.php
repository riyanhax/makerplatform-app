@extends('layouts.app') 

@section('content')
<section id="about">
  <div class="jumbotron jumbotron-fluid text-white my-0" style="background: url('assets/background.jpg') center center fixed no-repeat; background-size: cover;">
    <div class="container">
      <h1 class="display-4">Конкурсы и гранты</h1>
      <p class="lead">Нужны ресурсы на проект или есть что продемонстрировать? <br>Maker Platform поможет быть в курсе и напомнит о важных мероприятиях.
      </p>
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

@endsection