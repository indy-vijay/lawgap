<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Law Gap</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Exo+2:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="{{ URL::asset('css/awesome-bootstrap-checkbox.css') }}">
	<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
	<header>
		<div class="top-header hidden-sm hidden-xs">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<p class="voffset2">Call us on: <span class="blue-highlight bold">01234 567 890</span></p>
					</div>
					<div class="col-md-4 col-md-offset-4">
						<div class="row">
							<div class="col-md-6 col-md-offset-2">
								<ul class="list-inline social text-right voffset1">
									<li>
										<a href="#" class="facebook">
											<span class="fa-stack fa-lg">
												<i class="fa fa-circle fa-stack-2x"></i>
												<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
											</span>
										</a>
									</li>
									<li>
										<a href="#" class="twitter">
											<span class="fa-stack fa-lg">
												<i class="fa fa-circle fa-stack-2x"></i>
												<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
											</span>
										</a>
									</li>
									<li>
										<a href="#" class="youtube">
											<span class="fa-stack fa-lg">
												<i class="fa fa-circle fa-stack-2x"></i>
												<i class="fa fa-youtube-play fa-stack-1x fa-inverse"></i>
											</span>
										</a>
									</li>
								</ul>
							</div>
							<div class="col-md-4">
								<a href="#" class="btn btn-ghost" data-toggle="modal" data-target="#login-modal">Login</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<nav class="navbar navbar-default" data-spy="affix" data-offset-top="60">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="logo" width="170" /></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">divorce <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="diy-divorce.php">DIY Divorce</a></li>
								<li><a href="personal.php">Personal</a></li>
								<li><a href="managed.php">Managed</a></li>
								<li><a href="managed-plus-consent-order.php">Managed + Consent Order</a></li>
							</ul>
						</li>
						<li><a href="injunctions.php">injuction</a></li>
						<li><a href="child-arrangements.php">children</a></li>
						<li><a href="clean-break-order.php">clean break order</a></li>
						<li><a href="why-us.php">why us</a></li>
						<li><a href="support.php">support</a></li>
						<li><a href="#" class="btn btn-yellow" data-toggle="modal" data-target="#ask-question-modal">Ask a Question</a></li>
						<li class="hidden-md hidden-lg"><a href="#" class="btn btn-ghost" data-toggle="modal" data-target="#login-modal">Login</a>
</li>
					</ul>


				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>

	</header>