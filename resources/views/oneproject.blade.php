<html>
	<head>
		<title></title>
		<meta charset="utf-8">
	</head>
	<body>
	
	@foreach ($infoProject as $r) <!--Будет одна итерация-->
	{{$r->name}} {{$r->surname}}
	<p>{{$r->ProjectName}}
	<p>{{$r->Text}}
	<p>Дата добавления: {{$r->DateAdd}}
	<p>Последнее обновление: {{$r->dateUpdate}}
	<p>Рейтинг на сайте: {{$r->Rating}}
	@endforeach
	</body>
</html>