<html>
	<head>
		<title></title>
		<meta charset="utf-8">
	</head>
	
	<body>
		<img src="images/avatar.jpg">
		{{$infoUser['surname']}} {{$infoUser['name']}}  {{$infoUser['patronymic']}}
		<form method='post'>
			Название проекта <input type="text">
			<p>Описание проекта <textarea></textarea>
			<p>Загрузите фото проекта (jpeg/png) <input type="file" multiple accept="image/png,image/jpeg">
			<p>Загрузите доументы <input type="file" multiple>
			<p><input type=submit value="Загрузить">
		</form>
	</body>
</html>