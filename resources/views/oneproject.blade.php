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
	<p>Дата добавления: {{$r->created_at}}
	<p>Последнее обновление: {{$r->updated_at}}
	<p>Рейтинг на сайте: {{$r->Rating}}
	@endforeach
	</body>
</html>