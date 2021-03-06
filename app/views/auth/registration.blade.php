@extends('layouts.main')

@section('title', 'Регистрация')
@section('meta-description', 'Описание')

@section('container')
	<main class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6">
				<article class="bg-white popup">
					<header class="text-center">
						<h1>Регистрация</h1>
					</header>
					<hr>
					@include('partials.error', ['field' => 'jsToken'])
					{{ Form::open(['route' => 'auth.registration.post', 'class' => 'register']) }}
						<input name="jsToken" type="hidden" data-token="{{ $jsToken }}">
						{{ Element::input('text', 'username', 'Имя пользователя', null, null, true) }}
						{{ Element::input('email', 'email', 'Email', null, null, true) }}
						{{ Element::password('password', 'Пароль') }}
						{{ Element::button('Зарегистрироваться') }}
						<p class="small text-center m-t-30 last">Регистрируясь на сайте, вы автоматически соглашаетесь с <a href="{{ route('pages.rules') }}">правилами</a>.</p>
					{{ Form::close() }}
				</article>
			</div>
		</div>
	</main>
@stop