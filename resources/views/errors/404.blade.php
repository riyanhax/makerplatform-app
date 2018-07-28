@extends('layouts.app') 

@section('title', 'Ошибка 404') 

@section('content')
<section id="top">
    <div class="container my-5 text-center">
        <h1 class="display-1">404</h1>
        <h3 class="mb-5">Страница не найдена</h3>
        <a href="{{ route('home') }}" class="btn btn-primary"><i class="fas fa-chevron-left"></i> На главную</a>
    </div>
</section>
@endsection