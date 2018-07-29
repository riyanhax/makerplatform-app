@extends('layouts.app') @section('content')
<section id="about">
	<div class="jumbotron jumbotron-fluid text-white my-0" style="background: url('assets/background.jpg') center center fixed no-repeat; background-size: cover;">
		<div class="container">
			<h1 class="display-5">{{$infoAboutUser->name}} {{$infoAboutUser->patronymic}} {{$infoAboutUser->surname}}</h1>
			<p class="lead"> {{$infoAboutUser->email}}
			</p>
		</div>
	</div>
</section>

<section id="contests" class="py-1">
	<div class="container my-5">
		<h2>Проекты:</h2>
		<div class="row">
			@foreach ($projects as $project)
			<div class="col-12 col-lg-6">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">{{$project->ProjectName}}</h5>
						<p class="card-text">{{$project->Text}}</p>
						<a href="#" class="btn btn-primary">Подробнее</a>
						<form action="" method="POST">
							<button type="submit" class="btn btn-primary">Удалить</button>
						</form>
					</div>
					<div class="card-footer text-muted">
						Добавлено: {{$project->created_at}} | Изменено: {{$project->updated_at}}
					</div>
				</div>
			</div>
			@endforeach
		</div>
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