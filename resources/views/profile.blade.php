@extends('layouts.app') @section('content')
<section id="about">
	<div class="jumbotron jumbotron-fluid text-white my-0" style="background: url('assets/background.jpg') center center fixed no-repeat; background-size: cover;">
		<div class="container">
			<h1 class="display-5">Профиль: {{ Auth::user()->name }}</h1>
			<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.
			</p>
		</div>
	</div>
</section>

<section id="contests" class="py-1">
	<div class="container my-5 text-center">
		<!-- Дальше выведет ФИО email (внутри форича можно использовать html теги)-->
		@foreach ($infoAboutUser as $info) {{$info->name}} {{$info->patronymic}} {{$info->surname}} {{$info->email}} @endforeach
		<h2>Проекты:</h2>
		@foreach ($projects as $project)
		<div class="card">
			<div class="card-body">
				<h5 class="card-title">{{$project->ProjectName}}</h5>
				<p class="card-text">{{$project->Text}}</p>
				<a href="#" class="btn btn-primary">Подробнее</a>
			</div>
			<div class="card-footer text-muted">
				Добавлено: {{$project->created_at}} | Изменено: {{$project->updated_at}}
			</div>
		</div>
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