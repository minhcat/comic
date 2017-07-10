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
	.navbar{
		margin-bottom: 0;
		border-radius: 0;
		border: 0;
	}
	.navbar ul>li>a{
		color: white !important;
	}
	.navbar li.dropdown ul.dropdown-menu{
		border-radius: 0;
		border-width: 0;
	}
	.navbar li.dropdown ul.dropdown-menu >li>a:hover{
		background-color: #090;
	}
	.navbar li.dropdown ul.dropdown-menu >li>a:focus{
		background-color: #090;
	}
	.navbar li.dropdown.open> a{
		background-color: #090 ;
	}
	.navbar li.dropdown.open> a:hover{
		background-color: #090 ;
	}
	.navbar li.dropdown.open> a:focus{
		background-color: #090 ;
	}
	.navbar li.dropdown.open> ul{
		background-color: #0b0;
	}
	.bg-green{
		background-color: #0a0;
	}
	.right {
		float: right;
	}
	.row{
		margin: 0;
	}
	.color-white{
		color: white;
	}
	.line-section{
		border-bottom: solid 2px rgba(0,255,0,0.6);
	}
	.link{
		color: white;
	}
	.link:hover{
		color: white;
	}
	.link:focus{
		color: white;
	}
	.topic-group{
		height: 500px;
		padding-right: 10px;
		padding-left: 10px; 
	}
	.topic-header{
		height: 40px;
		margin-top: 10px;
		margin-bottom: 10px;
	}
	.topic-title{
		padding: 10px;
		background-color: #0b0;
		color: white;
		width: 100px;
		font-size: 16px;
		position: relative;
		margin: 0;
		float: left;
	}
	.topic-title:after{
		border: 18.5px solid transparent;
		border-left-color: #0b0;
		border-bottom-color: #0b0;
		position: absolute;
		top: 0;
		left: 100%;
		content: "";
	}
	.topic-content{
		margin-left: -15px;
		margin-right: -15px;
	}
	.aside-group{
		height: 500px;
		padding-right: 10px;
		padding-left: 10px;
	}
	.aside{
		margin-top: 10px;
		margin-bottom: 10px;
		border: 1px solid #0b0;
	}
	.aside-header{
		padding: 10px;
		color: white;
		background-color: #0b0;
	}
	.aside-content{
		padding-top: 10px;
		padding-bottom: 10px;
	}
	.aside-content .col-md-4{
		padding-right: 10px;
		padding-left: 10px;
	}
	</style>
</head>
<body>
	<div class="wrapper">
		<header>
			<!-- Banner -->
			<div class="logo">
				<img src="image/1020x100.png">
			</div>
			<!-- Menu -->
			<div id="nav" class="nav bg-green">
				<nav id="navbar" class="navbar navbar-default bg-green white">
					<div class="text-center">
						<ul class="nav navbar-nav">
							<li class=" home"><a class="page1" href=""><i class="glyphicon glyphicon-home"></i></a></li>
							<li class=""><a class="page2" href="">Menu 1</a></li>
							<li class=""><a class="page3" href="">Menu 2</a></li>
							<li class=""><a class="page4" href="">Menu 3</a></li>
							<li class=""><a class="page5" href="">Menu 4</a></li>
							<li class="dropdown">
								<a class="page6" href="#" class="dropdown-toggle" data-toggle="dropdown">Menu 5 <span class="caret"></span></a>
								<ul class="dropdown-menu bg-blue padding-tb0">
									<li><a href="" class="">Submenu 1</a></li>
									<li><a href="" class="">Submenu 2</a></li>
									<li><a href="" class="">Submenu 3</a></li>
									<li><a href="" class="">Submenu 1</a></li>
									<li><a href="" class="">Submenu 2</a></li>
									<li><a href="" class="">Submenu 3</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a class="page7" href="#" class="dropdown-toggle" data-toggle="dropdown">Menu 6 <span class="caret"></span></a>
								<ul class="dropdown-menu bg-blue padding-tb0">
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

			</div>
		</header>
		<main>
			<div class="slide">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
				    <!-- Indicators -->
				    <ol class="carousel-indicators">
				      	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				      	<li data-target="#myCarousel" data-slide-to="1"></li>
				      	<li data-target="#myCarousel" data-slide-to="2"></li>
				    </ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<img src="image/1020x300.png" alt="" style="width:100%;">
						</div>

						<div class="item">
							<img src="image/1020x300.png" alt="" style="width:100%;">
						</div>
						
						<div class="item">
							<img src="image/1020x300.png" alt="" style="width:100%;">
						</div>
					</div>

				    <!-- Left and right controls -->
				    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
				      	<span class="glyphicon glyphicon-chevron-left"></span>
				      	<span class="sr-only">Previous</span>
				    </a>
				    <a class="right carousel-control" href="#myCarousel" data-slide="next">
				      	<span class="glyphicon glyphicon-chevron-right"></span>
				      	<span class="sr-only">Next</span>
				    </a>
				</div>

			</div>
			<div class="content row">
				<div class="topic-group col-md-9">
					<div class="topic">
						<div class="topic-header">
							<h4 class="topic-title">Topic Title</h4>
						</div>
						<div class="topic-content row">
							<div class="col-md-2">
								<img src="image/90x120.png">
								<h5>Book name sed do eiusmod tempor</h5>
							</div>
							<div class="col-md-2">
								<img src="image/90x120.png">
								<h5>Book name sed do eiusmod tempor</h5>
							</div>
							<div class="col-md-2">
								<img src="image/90x120.png">
								<h5>Book name sed do eiusmod tempor</h5>
							</div>
							<div class="col-md-2">
								<img src="image/90x120.png">
								<h5>Book name sed do eiusmod tempor</h5>
							</div>
							<div class="col-md-2">
								<img src="image/90x120.png">
								<h5>Book name sed do eiusmod tempor</h5>
							</div>
							<div class="col-md-2">
								<img src="image/90x120.png">
								<h5>Book name sed do eiusmod tempor</h5>
							</div>
							<div class="col-md-2">
								<img src="image/90x120.png">
								<h5>Book name sed do eiusmod tempor</h5>
							</div>
							<div class="col-md-2">
								<img src="image/90x120.png">
								<h5>Book name sed do eiusmod tempor</h5>
							</div>
							<div class="col-md-2">
								<img src="image/90x120.png">
								<h5>Book name sed do eiusmod tempor</h5>
							</div>
							<div class="col-md-2">
								<img src="image/90x120.png">
								<h5>Book name sed do eiusmod tempor</h5>
							</div>
							<div class="col-md-2">
								<img src="image/90x120.png">
								<h5>Book name sed do eiusmod tempor</h5>
							</div>
							<div class="col-md-2">
								<img src="image/90x120.png">
								<h5>Book name sed do eiusmod tempor</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="aside-group col-md-3">
					<div class="aside">
						<div class="aside-header">Aside Title</div>
						<div class="aside-content row">
							<div class="col-md-4">
								<label><input type="checkbox" name=""/> type 1</label>
							</div>
							<div class="col-md-4">
								<label><input type="checkbox" name=""/> type 1</label>
							</div>
							<div class="col-md-4">
								<label><input type="checkbox" name=""/> type 1</label>
							</div>
							<div class="col-md-4">
								<label><input type="checkbox" name=""/> type 1</label>
							</div>
							<div class="col-md-4">
								<label><input type="checkbox" name=""/> type 1</label>
							</div>
							<div class="col-md-4">
								<label><input type="checkbox" name=""/> type 1</label>
							</div>
							<div class="col-md-4">
								<label><input type="checkbox" name=""/> type 1</label>
							</div>
							<div class="col-md-4">
								<label><input type="checkbox" name=""/> type 1</label>
							</div>
							<div class="col-md-4">
								<label><input type="checkbox" name=""/> type 1</label>
							</div>
							<div class="col-md-4">
								<label><input type="checkbox" name=""/> type 1</label>
							</div>
							<div class="col-md-4">
								<label><input type="checkbox" name=""/> type 1</label>
							</div>
							<div class="col-md-4">
								<label><input type="checkbox" name=""/> type 1</label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<footer class="row bg-green color-white">
			<div class="col-md-4">
				<h4 class="line-section">Title</h4>
				<p class="">Info 1</p>
				<p class="">Info 2</p>
				<p class="">Info 2</p>
			</div>
			<div class="col-md-4">
				<h4 class="line-section">Link</h4>
				<p class=""><a href="#" class="link">Link 1</a></p>
				<p class=""><a href="#" class="link">Link 2</a></p>
				<p class=""><a href="#" class="link">Link 3</a></p>
			</div>
			<div class="col-md-4">
				<h4 class="line-section">Title</h4>
				<p class="">Info 1</p>
				<p class="">Info 2</p>
				<p class="">Info 3</p>
			</div>
		</footer>
	</div>
</body>
</html>