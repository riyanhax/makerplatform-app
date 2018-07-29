@extends('layouts.app') 

@section('title', 'Проект "{{$project->ProjectName}}"')

@section('content')
<section id="about">
  <div class="jumbotron jumbotron-fluid text-white my-0" style="background: url('{{ asset('assets/background.jpg') }}') center center fixed no-repeat; background-size: cover;">
    <div class="container">
      <h1 class="display-4">Проект "{{$project->ProjectName}}"</h1>
    </div>
  </div>
</section>

<section id="project">
  <div class="container my-5">
    <p>{{$project->Text}}</p>
	<p>Автор: {{$project->name}} {{$project->surname}}</p>
	<p>Дата добавления: {{$project->created_at}}</p>
	<p>Последнее обновление: {{$project->updated_at}}</p>
	<p>Рейтинг на сайте: {{$project->Rating}}</p>
  </div>
</section>

@endsection