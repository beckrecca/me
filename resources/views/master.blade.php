<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/full-slider.css" rel="stylesheet">
    <link href="css/thumbnail-gallery.css" rel="stylesheet">

    <!-- Becky's CSS -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

    <body>

        <!-- Navigation -->
        <nav class="navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                      <span class="sr-only">Toggle navigation</span>
                      Menu
                    </button>
                    <a class="navbar-brand" href="/">Rebecca Doris</a>
                  </div>
                  <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                      <li><a href="about">About</a></li>
                      <li><a href="resume">Resume</a></li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Sample Projects <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="http://p2.beckrecca.me" target="_blank">PHP</a></li>
                          <li><a href="http://budgetbuddy.beckrecca.me" target="_blank">JavaScript</a></li>
                          <li><a href="dgmd">Digital Media</a></li>
                          <li><a href="http://www.beckrecca.me/howdocarswork" target="_blank">Instructional Design</a></li>
                        </ul>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Thesis Project <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><span>Proposal - Coming soon!</a></li>
                        </ul>
                      </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('header')

        <div class="container">
            @yield('content')

            <hr>
            <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; Rebecca Doris 2015</p>
                    </div>
                </div>
                <!-- /.row -->
            </footer>
        </div>

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Script to Activate the Carousel -->
        <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })
        </script>

        @yield('end')
    </body>
</html>