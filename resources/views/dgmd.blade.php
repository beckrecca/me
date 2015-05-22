@extends('master')

@section('title', 'Photo and Video Too')

@section('header')
    <header>
		<div class="container">
    		<h2>Digital Media</h2>
    	</div>
	</header>
@stop

@section('content')
            <div class="row">

            <div class="col-lg-12">
                <h4 class="page-header">Videos</h4>
            </div>

            <div class="col-lg-12">
                <iframe class="hidden-xs" width="560" height="315" src="https://www.youtube.com/embed/Fo2MuZtegGw" frameborder="0" allowfullscreen></iframe>
                <div class="hidden-sm visible-xs">
                    <a href="https://www.youtube.com/embed/Fo2MuZtegGw" target="_blank">"Jurassic Peaks" on Youtube.</a>
                </div>
                <br>
                    Part of my final project for a digital media class, this is an edit of the "They can open doors..." scene of Jurassic Park.
            </div>

            <div class="space"></div>

            <div class="col-lg-12">
                <iframe class="hidden-xs" width="560" height="315" src="https://www.youtube.com/embed/Bh4KIR89uic" frameborder="0" allowfullscreen></iframe>
                <div class="hidden-sm visible-xs">
                    <a href="https://www.youtube.com/embed/Bh4KIR89uic" target="_blank">"Dough Timelapse" on Youtube.</a>
                </div>
                <br>
                    A timelapse of dough rising, shot with a Canon 70D every 15 seconds for a bit less than an hour.
            </div>

            </div>

			<div class="row">

            <div class="col-lg-12">
                <h4 class="page-header">Photos</h4>
            </div>

            <div class="col-xs-6 thumb">
                <a class="thumbnail" href="view-long-exposure">
                    <img class="img-responsive" src="img/long-exposure.JPG" alt="Storrow Drive, Boston">
                </a>
            </div>
            <div class="col-xs-6 thumb">
                <a class="thumbnail" href="view-races">
                    <img class="img-responsive" src="img/races.jpg" alt="A man counting money in front of a table horse race">
                </a>
            </div>
            <div class="col-xs-6 thumb">
                <a class="thumbnail" href="view-snowbingocatch">
                    <img class="img-responsive" src="img/snowbingocatch.jpg" alt="Bingo the mutt catching a snow ball">
                </a>
            </div>
            <div class="col-xs-6 thumb">
                <a class="thumbnail" href="view-snowfriends">
                    <img class="img-responsive" src="img/snowfriends.jpg" alt="Two women chatting by the Charles River in Boston after a period of record snow in March 2015">
                </a>
            </div>
            <div class="col-xs-6 thumb">
                <a class="thumbnail" href="view-snowbingodig">
                    <img class="img-responsive" src="img/snowbingodig.jpg" alt="Bingo the mutt digging in the snow">
                </a>
            </div>
            <div class="col-xs-6 thumb">
                <a class="thumbnail" href="view-danceclass">
                    <img class="img-responsive" src="img/danceclass.jpg" alt="Women in colorful skirts in a dance class, with a young girl imitating">
                </a>
            </div>
            <div class="col-xs-6 thumb">
                <a class="thumbnail" href="view-headstand">
                    <img class="img-responsive" src="img/headstand.jpg" alt="A girl doing a headstand on the beach">
                </a>
            </div>
            <div class="col-xs-6 thumb">
                <a class="thumbnail" href="view-snowbingoknuckle">
                    <img class="img-responsive" src="img/snowbingoknuckle.jpg" alt="Bingo and Knuckle the brother mutts playing in the snow">
                </a>
            </div>
            <div class="col-xs-6 thumb">
                <a class="thumbnail" href="view-catsofsanjuan">
                    <img class="img-responsive" src="img/catsofsanjuan.jpg" alt="The perceptive cats of San Juan lounging in a golf cart">
                </a>
            </div>
            <div class="col-xs-6 thumb">
                <a class="thumbnail" href="view-sanjuan">
                    <img class="img-responsive" src="img/sanjuan.jpg" alt="The streets of San Juan">
                </a>
            </div>
            <div class="col-xs-6 thumb">
                <a class="thumbnail" href="view-mosaic">
                    <img class="img-responsive" src="img/mosaic.jpg" alt="A man standing on scaffolding while working on a mosaic public mural">
                </a>
            </div>
            <div class="col-xs-6 thumb">
                <a class="thumbnail" href="view-storm">
                    <img class="img-responsive" src="img/storm.jpg" alt="A storm far off the coast of San Juan at sunset">
                </a>
            </div>
        </div>

@stop