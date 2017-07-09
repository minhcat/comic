<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Comic</title>
	<!-- Bootstrap -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- CSS -->
	<style type="text/css">
	body{
		margin: 0px;
		background-color: gray;
	}
	.wrapper{
		width: 1020px;
		margin: auto;
	}
	header{
	}
	main{
		background-color: white;
	}
	footer{
		background-color: blue;
	}
	</style>
</head>
<body>
	<div class="wrapper">
		<header>
			<div class="logo">
				<img src="image/1020x100.png">
			</div>
			<nav id="navbar" class="navbar navbar-default">
					<div class="text-center">
						<ul class="nav navbar-nav">
							<li class="active home"><a class="page1" href=""><i class="glyphicon glyphicon-home"></i></a></li>
							<li class=""><a class="page2" href="">Menu 1</a></li>
							<li class=""><a class="page3" href="">Menu 2</a></li>
							<li class=""><a class="page4" href="">Menu 3</a></li>
							<li class=""><a class="page5" href="">Menu 4</a></li>
							<li class="dropdown">
								<a class="page6" href="#" class="dropdown-toggle" data-toggle="dropdown">Menu 5 <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="" class="">Submenu 1</a></li>
									<li><a href="" class="">Submenu 2</a></li>
									<li><a href="" class="">Submenu 3</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a class="page7" href="#" class="dropdown-toggle" data-toggle="dropdown">Menu 6 <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="" class="">Submenu 4</a></li>
									<li><a href="" class="">Submenu 5</a></li>
									<li><a href="" class="">Submenu 6</a></li>
								</ul>
							</li>
						</ul>
						<div class="right">
							<form class="navbar-form" method="GET" action="">
								<div class="input-group">
									
									<input type="text" name="search" class="form-control" placeholder="tìm kiếm">
									<div class="input-group-btn">
										<button class="btn btn-default" type="submit">
											<i class="glyphicon glyphicon-search"></i>
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</nav>
		</header>
		<main>
			<div class="slide">Slide</div>
			<div class="content">Content</div>
		</main>
		<footer>footer</footer>
	</div>
</body>
</html>