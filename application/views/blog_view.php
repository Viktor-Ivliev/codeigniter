<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="UTF-8">
    <!--  <link rel="shortcut icon" href="../../assets/ico/favicon.png">-->
    <title>Nekr.com</title>
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">
	
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
      <script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
    <![endif]-->
	
    <link href="dist/css/blog.css" rel="stylesheet">

  </head>

  <body >

 
 <!--////////////////////шапка//////////////////////////-->  
	<header class="navbar navbar-inverse blue_background_and_height_90 navbar-fixed-top  bs-docs-nav col-xs-10 col-sm-10 col-md-10 col-md-offset-1 col-sm-offset-1 col-xs-offset-1" role="banner">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand green_links">Главная</a>
			</div>
			<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
				<ul class="nav navbar-nav">
					<li >
						<a href="#" class="green_links">Новое</a>
					</li>
					<li class="active" >
						<a href="#" class="green_links_active">Блог</a>
					</li>
					<li >
						<a href="#"class="green_links">О нас</a>
					</li>
					<li>
						<a href="#" class="logo"><img src="img/logo.PNG"></img></a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
	
<!--////////////////////конец шапка//////////////////////////-->  

<!--////////////////////контент//////////////////////////-->  
  <div class="row">
		<div class="col-xs-10 col-sm-10 col-md-10 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 right_border content_frame">

			<div class="panel-group" id="accordion">
				<?php
					include("content_view.php");
				?>
			</div>
		</div>
  </div>
 <!--/////////////////////////конец контент///////////////////////////-->
	
  <!--//////////////////////форма ввода////////////////-->
	<div class="row">
		<div class="col-xs-10 col-sm-10 col-md-10 col-md-offset-1 margin_left">
			<?php
				include("form_add_stories_view.php");
			?>
		</div>
	</div>
	<!--//////////////////////конец форма ввода////////////////-->

  
	<!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->

    <script src="assets/js/jquery.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>