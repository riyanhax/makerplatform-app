<html>
	<head>
		<title></title>
		<meta charset="utf-8">
	</head>
	
	<body>
		<img src="images/avatar.jpg">
		{{$infoUser['surname']}} {{$infoUser['name']}}  {{$infoUser['patronymic']}}
		<form method='post' action="{{route('saveProject')}}"  enctype="multipart/form-data"> <!--атрибуты у формы не убирать-->
			Название проекта <input type="text" name="Projectname">
			<p>Описание проекта <textarea name="Description"></textarea>
			<p>Загрузите доументы <input type="file" multiple name="file[]">
			<p><button type=submit>Загрузить</button>
			{{ csrf_field() }} <!--это тоже не убирать-->
		</form>
	</body>
</html>