<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="Images/favicon.png">

    <title>TKB Project</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.3.5/dist/css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="bootstrap-3.3.5/dist/css/bootstrap-theme.css" rel="stylesheet">

    <!-- Custom styles for this template -->
	<link href="css/master_style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="bootstrap-3.3.5/docs/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap-3.3.5/docs/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body role="document">
	<!-----------------------------------Menu de connexion------------------------------------>
	<header class="header-top">
		<div class="container">
			<div class="col-sm-12">
				<div class="dropdown cpt">
					<a class="btn-premium bgnoir pull-right" href="">Se connecter</a>	
					<a class="btn-premium pull-right mr10" href="">Créer un compte</a>
				</div>
			</div>
		</div>
	</header>
	<!----------------------------------------------------------------------------------------->
	<nav class=" navbar navbar-top menu-top" id="menuperso">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">
					<img alt="teamKB" src="Images/logo.png"/>
				</a>
			</div>
			
			<div class="collapse navbar-collapse" id="menu">
				<ul id="menu-menu" class="nav navbar-nav m128">
					<li id="menu-item-24" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24">
						<a title=="A propos" href="">
							A propos
						</a>
					</li>
					<li class="dropdown"> 
					  <a data-toggle="dropdown" href="#">Évenements <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li>
							<a title=="En cours" href="#">
							En cours
							</a>
						</li>
						<li>
							<a title=="Déjà paru" href="#">
								Déjà paru
							</a>
						</li>
						<li>
							<a title=="Top 10" href="#">
								Top 10
							</a>
						</li>
						<li class="divider"></li>
						<li>
							<a title=="Top 10" href="#">
								Au hasard
							</a>
						</li>
					  </ul>
					</li> 
					<li> 
						<a title=="Gallerie" href="#">Gallerie</a>
					</li>
					<li> 
						<a title=="Profils" href="#">
							Profils
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<header class="container-fluid bandeau-acc">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="mb50">
						<b>14</b>
						évenements déjà publiés <br/>
						<a class="dashed" href="">
							<b>3 évenements</b>
						</a>
						 sont en cours 
					</h1>
						toi aussi, 
						<a href="">publie</a>
						, 
						<a href="">commente</a>
						et 
						<a href="">participe</a>
						à un maximum d'évenements.
					
				</div>
			</div>
		</div>
	</header>
	
	<aside role="complementary" class="filtre filt hidden-sm hidden-xs">
		<div class="container">
			<div class="col-md-8 pd20 pull-left ft18 mt05 grismid">
				<i class=" glyphicon glyphicon-edit mr05 bleu">
				</i>
				<a class="mr10 grismid" href="" title="">Publie ton évenement</a>
				
				<i class=" glyphicon glyphicon-camera mr05 bleu">
				</i>
				<a class="mr10 grismid" href="" title="">Poste des photos de tes évenements</a>
				
			</div>
			<div class="col-md-4 pd20 pull-right">
				<form action="" autocomplete="on">
					<div class="input-group custom-search-form">
						<input type="text" id="s" name="s" class="form-control btn-upp" placeholder="Votre recherche">
						<span class="input-group-btn">
							<button class="btn btn-primary-search" type="button">
								<span class="glyphicon glyphicon-search">
								</span>
							</button>
						</span>
					</div>
				</form>
			</div>
		</div>
	</aside>
	
	<div class="container-fluid">
		<div class="col-md-12">
			<h1>Bootstrap 3 Thumbnail Slider</h1>
			<div class="well">
				<div id="carouselGallery" class="carousel slide">
					
					<!-- Carousel items -->
					<div class="carousel-inner">
						<div class="item active">
							<div class="row">
								<div class="col-sm-2"><a href="#x"><img src="images/TEST.jpg" alt="Image" class="img-responsive"></a>
								</div>
								<div class="col-sm-2"><a href="#x"><img src="images/TEST.jpg" alt="Image" class="img-responsive"></a>
								</div>
								<div class="col-sm-2"><a href="#x"><img src="images/TEST.jpg" alt="Image" class="img-responsive"></a>
								</div>
								<div class="col-sm-2"><a href="#x"><img src="images/TEST.jpg" alt="Image" class="img-responsive"></a>
								</div>
								<div class="col-sm-2"><a href="#x"><img src="images/TEST.jpg" alt="Image" class="img-responsive"></a>
								</div>
								<div class="col-sm-2"><a href="#x"><img src="images/TEST.jpg" alt="Image" class="img-responsive"></a>
								</div>
							</div>
							<!--/row-->
						</div>
						<!--/item-->
						<div class="item">
							<div class="row">
								<div class="col-sm-2"><a href="#x"><img src="images/TEST.jpg" alt="Image" class="img-responsive"></a>
								</div>
								<div class="col-sm-2"><a href="#x"><img src="images/TEST.jpg" alt="Image" class="img-responsive"></a>
								</div>
								<div class="col-sm-2"><a href="#x"><img src="images/TEST.jpg" alt="Image" class="img-responsive"></a>
								</div>
								<div class="col-sm-2"><a href="#x"><img src="images/TEST.jpg" alt="Image" class="img-responsive"></a>
								</div>
								<div class="col-sm-2"><a href="#x"><img src="images/TEST.jpg" alt="Image" class="img-responsive"></a>
								</div>
								<div class="col-sm-2"><a href="#x"><img src="images/TEST.jpg" alt="Image" class="img-responsive"></a>
								</div>
							</div>
							<!--/row-->
						</div>
						<!--/item-->
						<div class="item">
							<div class="row">
								<div class="col-sm-2"><a href="#x"><img src="images/TEST.jpg" alt="Image" class="img-responsive"></a>
								</div>
								<div class="col-sm-2"><a href="#x"><img src="images/TEST.jpg" alt="Image" class="img-responsive"></a>
								</div>
								<div class="col-sm-2"><a href="#x"><img src="images/TEST.jpg" alt="Image" class="img-responsive"></a>
								</div>
								<div class="col-sm-2"><a href="#x"><img src="images/TEST.jpg" alt="Image" class="img-responsive"></a>
								</div>
								<div class="col-sm-2"><a href="#x"><img src="images/TEST.jpg" alt="Image" class="img-responsive"></a>
								</div>
								<div class="col-sm-2"><a href="#x"><img src="images/TEST.jpg" alt="Image" class="img-responsive"></a>
								</div>
							</div>
							<!--/row-->
						</div>
						<!--/item-->
					</div>
					<!--/carousel-inner--> <a class="left carousel-control" href="#carouselGallery" data-slide="prev">‹</a>

					<a class="right carousel-control" href="#carouselGallery" data-slide="next">›</a>
				</div>
				<!--/carouselGallery-->
			</div>
			<!--/well-->
		</div>
	</div>
	
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap-3.3.5/dist/js/jquery-1.11.1.min.js"></script>
    <script src="bootstrap-3.3.5/dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-3.3.5/docs/assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap-3.3.5/docs/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>