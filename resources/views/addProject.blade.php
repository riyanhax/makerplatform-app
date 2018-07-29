@extends('layouts.app') @section('content')
<section id="about">
	<div class="jumbotron jumbotron-fluid text-white my-0" style="background: url('assets/background.jpg') center center fixed no-repeat; background-size: cover;">
		<div class="container">
			<h1 class="display-5">Добавление проекта</h1>
		</div>
	</div>
</section>

<section id="contests" class="py-1">
	<div class="container my-5">
		<form method="post" action="{{route('saveProject')}}" enctype="multipart/form-data">
			<div class="form-group">
				<label for="exampleFormControlInput1">Название проекта</label>
				<input type="text" class="form-control" id="exampleFormControlInput1" placeholder=""  name="Projectname">
			</div>
			<div class="form-group">
				<label for="exampleFormControlTextarea1">Описание проекта</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Description"></textarea>
			</div>
			<div class="form-group">
				<label for="exampleFormControlSelect1">Файлы проекта</label>
				<input type="file" class="form-control" multiple name="file[]">
			</div>
			<button class="btn btn-primary" type=submit>Загрузить</button>
			{{ csrf_field() }}
		</form>
	</div>
</section>

@endsection