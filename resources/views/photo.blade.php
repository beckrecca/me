@extends('master')

@section('title', 'Photo')

@section('header')
    <header>
		<div class="container">
    		<a href="javascript:history.back();">&lt;&lt;&lt;</a>
    	</div>
	</header>
@stop

@section('content')
	@if (isset($file))
		<img src="../img/{{$file}}.jpg" class="img-responsive">
	@endif
@stop