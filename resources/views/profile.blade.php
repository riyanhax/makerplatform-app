@extends('layouts.app')

@section('content')
<section id="about">
  <div class="jumbotron jumbotron-fluid text-white my-0" style="background: url('assets/background.jpg') center center fixed no-repeat; background-size: cover;">
    <div class="container">
      <h1 class="display-4">Конкурсы и гранты</h1>
      <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.
      </p>
    </div>
  </div>
</section>

<section id="contests" class="py-1">
  <div class="container my-5 text-center">
  <img src = "images/avatar.jpg">
		<!-- Дальше выведет ФИО email (внутри форича можно использовать html теги)-->
		@foreach ($infoAboutUser as $info)
			{{$info->name}} {{$info->surname}} {{$info->patronymic}} {{$info->email}}
		@endforeach
		<p>Проекты:</p>
		@foreach ($projects as $project)
			Название: {{$project->ProjectName}} Дата добавления: {{$project->DateAdd}} Дата последнего редактирования:{{$project->dateUpdate}}<br>
		@endforeach

  </div>
</section>

@endsection
















<html>
	<head>
		<title></title>
		<meta charset="utf-8">
	</head>
	
	<body>
		
		</body>
</html>