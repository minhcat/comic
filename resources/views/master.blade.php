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
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="jquery/jquery.dotdotdot.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$(".topic-content h5").dotdotdot();

		$(window).scroll(function(){
			if ($(this).scrollTop()>100){
				$("#nav").addClass("fixed-top");
				$("#navbar").addClass("width-page");
			}else{
				$("#nav").removeClass("fixed-top");
				$("#navbar").removeClass("width-page");
			}
		});
	});
	</script>
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
								<div class="dropdown-menu bg-green padding-tb0 multi-menu">
									<div class="row">
										<div class="col-md-3 padding-tb1"><a href="" class="">Submenu 1</a></div>
										<div class="col-md-3 padding-tb1"><a href="" class="">Submenu 2</a></div>
										<div class="col-md-3 padding-tb1"><a href="" class="">Submenu 3</a></div>
										<div class="col-md-3 padding-tb1"><a href="" class="">Submenu 4</a></div>
										<div class="col-md-3 padding-tb1"><a href="" class="">Submenu 5</a></div>
										<div class="col-md-3 padding-tb1"><a href="" class="">Submenu 6</a></div>
										<div class="col-md-3 padding-tb1"><a href="" class="">Submenu 7</a></div>
										<div class="col-md-3 padding-tb1"><a href="" class="">Submenu 8</a></div>
										<div class="col-md-3 padding-tb1"><a href="" class="">Submenu 9</a></div>
										<div class="col-md-3 padding-tb1"><a href="" class="">Submenu 10</a></div>
										<div class="col-md-3 padding-tb1"><a href="" class="">Submenu 11</a></div>
										<div class="col-md-3 padding-tb1"><a href="" class="">Submenu 12</a></div>
										<div class="col-md-3 padding-tb1"><a href="" class="">Submenu 13</a></div>
										<div class="col-md-3 padding-tb1"><a href="" class="">Submenu 14</a></div>
										<div class="col-md-3 padding-tb1"><a href="" class="">Submenu 15</a></div>
										<div class="col-md-3 padding-tb1"><a href="" class="">Submenu 16</a></div>
										<div class="col-md-3 padding-tb1"><a href="" class="">Submenu 17</a></div>
										<div class="col-md-3 padding-tb1"><a href="" class="">Submenu 18</a></div>
										<div class="col-md-3 padding-tb1"><a href="" class="">Submenu 19</a></div>
										<div class="col-md-3 padding-tb1"><a href="" class="">Submenu 20</a></div>
									</div>
								</div>
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
								<a href="#"><img src="image/90x120.png"></a>
								<a href="#"><h5>Book name sed do eiusmod tempor</h5></a>
							</div>
							<div class="col-md-2">
								<a href="#"><img src="image/90x120.png"></a>
								<a href="#"><h5>Book name sed do eiusmod tempor</h5></a>
							</div>
							<div class="col-md-2">
								<a href="#"><img src="image/90x120.png"></a>
								<a href="#"><h5>Book name sed do eiusmod tempor</h5></a>
							</div>
							<div class="col-md-2">
								<a href="#"><img src="image/90x120.png"></a>
								<a href="#"><h5>Book name sed do eiusmod tempor</h5></a>
							</div>
							<div class="col-md-2">
								<a href="#"><img src="image/90x120.png"></a>
								<a href="#"><h5>Book name sed do eiusmod tempor</h5></a>
							</div>
							<div class="col-md-2">
								<a href="#"><img src="image/90x120.png"></a>
								<a href="#"><h5>Book name sed do eiusmod tempor</h5></a>
							</div>
							<div class="col-md-2">
								<a href="#"><img src="image/90x120.png"></a>
								<a href="#"><h5>Book name sed do eiusmod tempor</h5></a>
							</div>
							<div class="col-md-2">
								<a href="#"><img src="image/90x120.png"></a>
								<a href="#"><h5>Book name sed do eiusmod tempor</h5></a>
							</div>
							<div class="col-md-2">
								<a href="#"><img src="image/90x120.png"></a>
								<a href="#"><h5>Book name sed do eiusmod tempor</h5></a>
							</div>
							<div class="col-md-2">
								<a href="#"><img src="image/90x120.png"></a>
								<a href="#"><h5>Book name sed do eiusmod tempor</h5></a>
							</div>
							<div class="col-md-2">
								<a href="#"><img src="image/90x120.png"></a>
								<a href="#"><h5>Book name sed do eiusmod tempor</h5></a>
							</div>
							<div class="col-md-2">
								<a href="#"><img src="image/90x120.png"></a>
								<a href="#"><h5>Book name sed do eiusmod tempor</h5></a>
							</div>
						</div>
					</div>

					<div class="topic">
						<div class="topic-header">
							<h4 class="topic-title">Topic Title</h4>
						</div>
						<div class="topic-content row">
							<div class="col-md-2">
								<a href="#"><img src="image/90x120.png"></a>
								<a href="#"><h5>Book name sed do eiusmod tempor</h5></a>
							</div>
							<div class="col-md-2">
								<a href="#"><img src="image/90x120.png"></a>
								<a href="#"><h5>Book name sed do eiusmod tempor</h5></a>
							</div>
							<div class="col-md-2">
								<a href="#"><img src="image/90x120.png"></a>
								<a href="#"><h5>Book name sed do eiusmod tempor</h5></a>
							</div>
							<div class="col-md-2">
								<a href="#"><img src="image/90x120.png"></a>
								<a href="#"><h5>Book name sed do eiusmod tempor</h5></a>
							</div>
							<div class="col-md-2">
								<a href="#"><img src="image/90x120.png"></a>
								<a href="#"><h5>Book name sed do eiusmod tempor</h5></a>
							</div>
							<div class="col-md-2">
								<a href="#"><img src="image/90x120.png"></a>
								<a href="#"><h5>Book name sed do eiusmod tempor</h5></a>
							</div>
							<div class="col-md-2">
								<a href="#"><img src="image/90x120.png"></a>
								<a href="#"><h5>Book name sed do eiusmod tempor</h5></a>
							</div>
							<div class="col-md-2">
								<a href="#"><img src="image/90x120.png"></a>
								<a href="#"><h5>Book name sed do eiusmod tempor</h5></a>
							</div>
							<div class="col-md-2">
								<a href="#"><img src="image/90x120.png"></a>
								<a href="#"><h5>Book name sed do eiusmod tempor</h5></a>
							</div>
							<div class="col-md-2">
								<a href="#"><img src="image/90x120.png"></a>
								<a href="#"><h5>Book name sed do eiusmod tempor</h5></a>
							</div>
							<div class="col-md-2">
								<a href="#"><img src="image/90x120.png"></a>
								<a href="#"><h5>Book name sed do eiusmod tempor</h5></a>
							</div>
							<div class="col-md-2">
								<a href="#"><img src="image/90x120.png"></a>
								<a href="#"><h5>Book name sed do eiusmod tempor</h5></a>
							</div>
						</div>
					</div>

					<div class="topic">
						<div class="topic-header">
							<h4 class="topic-title">Topic Title</h4>
						</div>
						<div class="topic-content row">
							<div class="col-md-2">
								<a href="#"><img src="image/90x120.png"></a>
								<a href="#"><h5>Book name sed do eiusmod tempor</h5></a>
							</div>
							<div class="col-md-2">
								<a href="#"><img src="image/90x120.png"></a>
								<a href="#"><h5>Book name sed do eiusmod tempor</h5></a>
							</div>
							<div class="col-md-2">
								<a href="#"><img src="image/90x120.png"></a>
								<a href="#"><h5>Book name sed do eiusmod tempor</h5></a>
							</div>
							<div class="col-md-2">
								<a href="#"><img src="image/90x120.png"></a>
								<a href="#"><h5>Book name sed do eiusmod tempor</h5></a>
							</div>
							<div class="col-md-2">
								<a href="#"><img src="image/90x120.png"></a>
								<a href="#"><h5>Book name sed do eiusmod tempor</h5></a>
							</div>
							<div class="col-md-2">
								<a href="#"><img src="image/90x120.png"></a>
								<a href="#"><h5>Book name sed do eiusmod tempor</h5></a>
							</div>
							<div class="col-md-2">
								<a href="#"><img src="image/90x120.png"></a>
								<a href="#"><h5>Book name sed do eiusmod tempor</h5></a>
							</div>
							<div class="col-md-2">
								<a href="#"><img src="image/90x120.png"></a>
								<a href="#"><h5>Book name sed do eiusmod tempor</h5></a>
							</div>
							<div class="col-md-2">
								<a href="#"><img src="image/90x120.png"></a>
								<a href="#"><h5>Book name sed do eiusmod tempor</h5></a>
							</div>
							<div class="col-md-2">
								<a href="#"><img src="image/90x120.png"></a>
								<a href="#"><h5>Book name sed do eiusmod tempor</h5></a>
							</div>
							<div class="col-md-2">
								<a href="#"><img src="image/90x120.png"></a>
								<a href="#"><h5>Book name sed do eiusmod tempor</h5></a>
							</div>
							<div class="col-md-2">
								<a href="#"><img src="image/90x120.png"></a>
								<a href="#"><h5>Book name sed do eiusmod tempor</h5></a>
							</div>
						</div>
					</div>
					
				</div>
				<div class="aside-group col-md-3">
					<div class="aside">
						<div class="aside-header">Aside Title</div>
						<div class="aside-content">
							<p class="line-section2">type</p>
							<div class="row">
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
							<p class="line-section2">type</p>
							<div class="row">
								<div class="col-md-4">
									<label><input type="radio" name=""/> type 1</label>
								</div>
								<div class="col-md-4">
									<label><input type="radio" name=""/> type 1</label>
								</div>
								<div class="col-md-4">
									<label><input type="radio" name=""/> type 1</label>
								</div>
								<div class="col-md-4">
									<label><input type="radio" name=""/> type 1</label>
								</div>
								<div class="col-md-4">
									<label><input type="radio" name=""/> type 1</label>
								</div>
								<div class="col-md-4">
									<label><input type="radio" name=""/> type 1</label>
								</div>
							</div>
						</div>
					</div>

					<div class="aside">
						<div class="aside-header">Aside Title</div>
						<div class="aside-content">
							<div class="aside-item row">
								<div class="col-md-3 padding-lr0"><a href="#"><img src="image/45x60.png"></a></div>
								<div class="col-sm-9 padding-lr0">
									<p class="name"><a href="#">Book name sed do eiusmod tempor</a></p>
									<p class="info">info ut enim ad minim veniam</p>
								</div>
							</div>
							<div class="aside-item row">
								<div class="col-md-3 padding-lr0"><a href="#"><img src="image/45x60.png"></a></div>
								<div class="col-sm-9 padding-lr0">
									<p class="name"><a href="#">Book name sed do eiusmod tempor</a></p>
									<p class="info">info ut enim ad minim veniam</p>
								</div>
							</div>
							<div class="aside-item row">
								<div class="col-md-3 padding-lr0"><a href="#"><img src="image/45x60.png"></a></div>
								<div class="col-sm-9 padding-lr0">
									<p class="name"><a href="#">Book name sed do eiusmod tempor</a></p>
									<p class="info">info ut enim ad minim veniam</p>
								</div>
							</div>
							<div class="aside-item row">
								<div class="col-md-3 padding-lr0"><a href="#"><img src="image/45x60.png"></a></div>
								<div class="col-sm-9 padding-lr0">
									<p class="name"><a href="#">Book name sed do eiusmod tempor</a></p>
									<p class="info">info ut enim ad minim veniam</p>
								</div>
							</div>
						</div>
					</div>

					<div class="aside">
						<div class="aside-header">Aside Title</div>
						<div class="aside-content">
							<div class="aside-comment">
								<p><a href="">user 1 sint occae cupida</a> on <a href="">link lorem ipsum dolor sit amet</a></p>
							</div>
							<div class="aside-comment">
								<p><a href="">user 1 sint occae cupida</a> on <a href="">link lorem ipsum dolor sit amet</a></p>
							</div>
							<div class="aside-comment">
								<p><a href="">user 1 sint occae cupida</a> on <a href="">link lorem ipsum dolor sit amet</a></p>
							</div>
							<div class="aside-comment">
								<p><a href="">user 1 sint occae cupida</a> on <a href="">link lorem ipsum dolor sit amet</a></p>
							</div>
							<div class="aside-comment">
								<p><a href="">user 1 sint occae cupida</a> on <a href="">link lorem ipsum dolor sit amet</a></p>
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