@extends('layouts/main')

@section('container')

	@foreach ($posts as $post)
		<article class="mb-5">
		<h2> {{ $post["title"]}} </h2>
		<h5> {{ $post["author"]}} </h5>
		<p> {{ $post["body"]}} </p>
		<p>Hai Kamu Yang Disana</p>
		</article>
	@endforeach

@endsection


