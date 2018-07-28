<html>
	<head>
		<title></title>
		<meta charset="utf-8">
	</head>
	
	<body>
		<img src = "images/avatar.jpg">
		<!-- Дальше выведет ФИО email (внутри форича можно использовать html теги)-->
		@foreach ($infoAboutUser as $info)
			{{$info->name}} {{$info->surname}} {{$info->patronymic}} {{$info->email}}
		@endforeach
		<p>Проекты:</p>
		@foreach ($projects as $project)
			Название: {{$project->ProjectName}} Дата добавления: {{$project->DateAdd}} Дата последнего редактирования:{{$project->dateUpdate}}<br>
		@endforeach
		</body>
</html>