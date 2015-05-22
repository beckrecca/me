@extends('master')

@section('title', 'Photo')

@section('header')
    <header>
		<div class="container">
    		<p><a href="javascript:history.back();">Go Back</a></p>
    	</div>
	</header>
@stop

@section('content')
	@if (isset($file))
		<img src="../img/{{$file}}.jpg" class="img-responsive">
	@endif
@stop