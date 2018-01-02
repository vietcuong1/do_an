<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

     <title>Film Online</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap-theme.min.css">
    <script src="js/js/jquery.min.js"></script>
    <script src="js/js/bootstrap.min.js"></script> -->
    <script type="text/javascript" src ="js/css3-mediaqueries.js"></script>
    <script type="text/javascript" href ="js/Search.js"></script>
    <link rel="stylesheet" href="css/style_menu.css" type="text/css">
    <link rel="stylesheet" href="css/slider.css">

  </head>
  <body data-vide-bg="video/3" >
  	<div id="menu">
  		<div class="row">
  			<div class="col-md-12">
  				<nav class="navbar navbar-default" role="navigation"  >
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <a class="navbar-brand" href="{{ URL::to('/') }}" style="color: white">Film Online</a>
	            </div>
	            <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-2">
	                <ul class="nav navbar-nav">
	                	<li><a href="{{ URL::to('home') }}" style="color: white">Trang chủ</a></li>
	                    <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: white">Phim Lẻ<b class="caret"></b></a>
	                        <ul class="dropdown-menu multi-column columns-1">
	                            <li>
	                                <ul class="multi-column-dropdown col-sm-12">
	                                    <li><a href="{{URL::to('songnew')}}" >Phim lẻ 2017</a></li>
	                                    <li><a href="{{ URL::to('songvn') }}">Phim lẻ 2016</a></li>
	                                    <li><a href="{{ URL::to('trutinh') }}">Phim lẻ 2015</a></li>
	                                </ul>
	                            </li>
	                        </ul>
	                    </li>
	                    <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: white">Phim Bộ<b class="caret"></b></a>
	                        <ul class="dropdown-menu multi-column columns-1">
	                            <li>
	                                <ul class="multi-column-dropdown col-sm-12">
	                                    <li><a href="#">Phim Bộ 2017</a></li>
	                                    <li><a href="#">Phim Bộ 2016</a></li>
	                                    <li><a href="#">Phim Bộ 2015</a></li>
	                                </ul>
	                            </li>
	                        </ul>
	                    </li>
	                    <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: white">Quốc gia<b class="caret"></b></a>
	                        <ul class="dropdown-menu multi-column columns-1">
	                            <li>
	                                <ul class="multi-column-dropdown col-sm-12">
	                                    <li><a href="#">Âu-Mỹ</a></li>
	                                    <li><a href="#">Trung Quốc</a></li>
	                                    <li><a href="#">Hàn Quốc</a></li>
	                                    <li><a href="#">Nhật</a></li>
	                                    <li><a href="#">Việt Nam</a></li>
	                                </ul>
	                            </li>
	                        </ul>
	                    </li>
	                </ul>
	                <ul class="nav navbar-nav">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <!-- <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li> -->
                        @else
                            <li class="dropdown">
		                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: white">Quản lý<b class="caret"></b></a>
		                        <ul class="dropdown-menu multi-column columns-1">
		                            <li>
		                                <ul class="multi-column-dropdown col-sm-12">
		                                    <li><a href="{{ URL::to('musics') }}">Gợi ý phim</a></li>
		                                    <!-- <li class="divider"></li>
		                                    <li><a href="{{ URL::to('singers') }}">Các Phim Đã Xem</a></li> -->
		                                    <li class="divider"></li>
		                                    <li><a href="{{ route('artists.index') }}">Các Phim Đánh Dấu</a></li>
		                                </ul>
		                            </li>
		                        </ul>
		                    </li>
                        @endif
                    </ul> <!-- END_urQuanLy -->
	                <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }} " style="color: white">Login</a></li>
                            <li><a href="{{ url('/register') }}" style="color: white">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul> <!-- END_urLOGIN -->
	                <div class="row">
						<div class="input-group" style="margin-top: 10px;padding-left: 50px; ">
				                <div class="input-group-btn search-panel">
				                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				                    	<span id="search_concept">Tìm kiếm theo</span> <span class="caret"></span>
				                    </button>
				                    <ul class="dropdown-menu" role="menu">
				                      <li><a href="#contains">Bài hát</a></li>
				                      <li><a href="#its_equal">Ca sĩ</a></li>
				                      <li><a href="#greather_than">Album</a></li>
				                      <li><a href="#less_than">Playlist</a></li>
				                      <li class="divider"></li>
				                      <li><a href="#all">Tất cả</a></li>
				                    </ul>
				                </div>
				                <input type="hidden" name="search_param" value="all" id="search_param">
				                <input type="text" class="form-control" name="x" placeholder="Search term...">
				                <span class="input-group-btn">
				                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
				                </span>
				            </div>
					</div>
	            </div>
	            <!--/.navbar-collapse-->
	        </nav>
  			</div>
  		</div>
  	</div> <!-- menu -->
  	<div class="container">
  		<div class="row">
	  		<div class="col-md-9">
	  			<div class="example">
		            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  				<!-- Indicators -->
						  <ol class="carousel-indicators">
						    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
						  </ol>

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
						    <div class="item active">
						      <img src="img/carousel/pic002.jpg" alt="city" >
						    </div>
						    <div class="item">
						      <img src="img/carousel/pic005.jpg" alt="city" >
						    </div>
						    <div class="item">
						      <img src="img/carousel/pic003.jpg" alt="city" >
						    </div>
						    <div class="item">
						      <img src="img/carousel/pic004.jpg" alt="city" >
						    </div>
						    <div class="item">
						      <img src="img/carousel/pic001.jpg" alt="city" >
						    </div>
						    ...
						  </div>

						  <!-- Controls -->
						  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
					</div>
		        </div> <!-- /SLIDE -->
	  		</div>
	  		<div class="col-md-3" id="bxh" style="margin-top: 2px;">
	  			<div class="thumbnail" style="border-color: blue;">
	  				<a href=""> <h3 style="text-align: center;color: blue;">BẢNG XẾP HẠNG</h3></a> <hr>
		  				<div class="caption">
                            <div>
                                <img src="img/BXH/pic0006.jpg" alt="picture" height="90" width="60">
                                <a href="{{ route('artists.index') }}" style="color:black;"><strong style="color: red;">01.</strong> Justice League</a>
                            </div>
		  				</div>
		  				<div class="caption">
		  					<h5>
                                <img src="img/BXH/pic0002.jpg" alt="picture" height="90" width="60">
                                <a href="" target="_blank" style="color: black;"><strong style="color: green;">02.</strong> Pacific Rim 2</a>
                            </h5>
		  				</div>
		  				<div class="caption">
		  					<h5 >
                                <img src="img/BXH/pic0003.jpg" alt="picture" height="90" width="60">
                                <a href="" target="_blank" style="color: black;"><strong style="color: yellow;">03.</strong> Sherlock Holmes</a>
                            </h5>
		  				</div>

	  			</div>
	  		</div>
	  	</div>
	  	@yield('content')
	  	<div class="row">
	  		<div class="col-md-9">
	  			<hr style="border-color: white;"> <a href="#"><h3 style="color: white;"> Phim HOT</h3> </a>
	  			<hr style="border-color: white;">
	  			<div class="row">
	  				<div class="col-md-4">
	  					<div class="thumbnail">
	  						<a href="">
		  						<img src="img/hot/pic000001.jpg" alt="album1">
		  					</a>
	  					</div>
	  				</div>
	  				<div class="col-md-4">
	  					<div class="thumbnail">
	  						<a href="">
		  						<img src="img/hot/pic000002.jpg" alt="album1">
		  					</a>
	  					</div>
	  				</div>
	  				<div class="col-md-4">
	  					<div class="thumbnail">
	  						<a href="">
		  						<img src="img/hot/pic000003.jpg" alt="album1">
		  					</a>
	  					</div>
	  				</div>
	  			</div>
	  			<div class="row">
	  				<div class="col-md-4">
	  					<div class="thumbnail">
	  						<a href="">
		  						<img src="img/hot/pic000004.jpg" alt="album1">
		  					</a>
	  					</div>
	  				</div>
	  				<div class="col-md-4">
	  					<div class="thumbnail">
	  						<a href="">
		  						<img src="img/hot/pic000005.jpg" alt="album1">
		  					</a>
	  					</div>
	  				</div>
	  				<div class="col-md-4">
	  					<div class="thumbnail">
	  						<a href="">
		  						<img src="img/hot/pic000006.jpg" alt="album1">
		  					</a>
	  					</div>
	  				</div>
	  			</div>
	  		</div>
	  		<div class="col-md-3">
	  			<div class="thumbnail" style="margin-top: 20px;border-color: green;">
	  				<h3 align="center"><a href="">CHỦ ĐỀ HOT</a></h3>
	  				<hr>
	  				<div class="row" style="margin-bottom: 7px;">
	  					<a href="">
	  						<img src="img/topic/pic00001.jpg" alt="" width="90%">
	  					</a>
	  				</div>
	  				<div class="row" style="margin-bottom: 7px;">
	  					<a href="">
	  						<img src="img/topic/pic00003.jpg" alt="" width="90%">
	  					</a>
	  				</div>
	  				<div class="row" style="margin-bottom: 7px;">
	  					<a href="">
	  						<img src="img/topic/pic00002.jpg" alt="" width="90%">
	  					</a>
	  				</div>
	  				<div class="row" style="margin-bottom: 7px;">
	  					<a href="">
	  						<img src="img/topic/pic00004.jpg" alt="" width="90%">
	  					</a>
	  				</div>
	  			</div>
	  		</div>
	  	</div>
	  	<div class="row">
	  		<div class="col-md-9">
	  			<hr><a href="#"> <h3 style="color: white;"> Phim Bộ</h3></a> <hr>
	  			<div class="row">
	  				<div class="col-md-4">
	  					<div class="thumbnail">
	  						<a href="">
		  						<img src="img/filmbo/pic0000001.jpg" alt="mv1">
		  					</a>
	  					</div>
	  				</div>
	  				<div class="col-md-4">
	  					<div class="thumbnail">
	  						<a href="">
		  						<img src="img/filmbo/pic0000002.jpg" alt="mv1">
		  					</a>
	  					</div>
	  				</div>
	  				<div class="col-md-4">
	  					<div class="thumbnail">
	  						<a href="">
		  						<img src="img/filmbo/pic0000003.jpg" alt="mv1">
		  					</a>
	  					</div>
	  				</div>
	  			</div>
	  			<div class="row">
	  				<div class="col-md-4">
	  					<div class="thumbnail">
	  						<a href="">
		  						<img src="img/filmbo/pic0000006.jpg" alt="mv1">
		  					</a>
	  					</div>
	  				</div>
	  				<div class="col-md-4">
	  					<div class="thumbnail">
	  						<a href="">
		  						<img src="img/filmbo/pic0000004.jpg" alt="mv1">
		  					</a>
	  					</div>
	  				</div>
	  				<div class="col-md-4">
	  					<div class="thumbnail">
	  						<a href="">
		  						<img src="img/filmbo/pic0000008.jpg" alt="mv1">
		  					</a>
	  					</div>
	  				</div>
	  			</div>
	  		</div>
	  		<div class="col-md-3" style="margin-top: 20px;">
	  			<div class="thumbnail" style="border-color: #001100;">
	  				<a href="#"> <h3 style="text-align: center;color: blue;">BÁO ĐIỆN TỬ</h3></a> <hr>
		  				<div class="caption">
		  					<h5><a href="" target="_blank" style="color: black;"><strong style="color: red;">Tin tức 24h</strong> </a></h5>
		  				</div>
		  				<div class="caption">
		  					<h5><a href="" target="_blank" style="color: black;"><strong style="color: green;">Tin nhanh VnExpress</strong> </a></h5>
		  				</div>
		  				<div class="caption">
		  					<h5 ><a href="" target="_blank" style="color: black;"><strong style="color: #FFCC33;">Báo dân trí</strong> </a></h5>
		  				</div>
		  				<div class="caption">
		  					<h5 ><a href="" target="_blank" style="color: black;"><strong style="color: #66CC00;">Báo VietNamNet</strong> </a></h5>
		  				</div>
	  			</div>
	  			<hr>
	  		</div>
	  	</div>
  	</div>
	<div id="player">
	    <audio controls autoplay hidden>
	     <source src="{{URL::asset('uploads/music.mp3')}}" type="audio/mpeg">
	                unsupported !!
	    </audio>
	</div>
  	<div class="panel panel-primary" >
		<div class="panel-footer" style="background-color: #FAFAD2">
			<div class="container">
				<div class="caption">
					<p style="text-align: center;color: blue;">Copyright (@) AJAX TEAM</p>
				</div>
			</div>
		</div>
	</div>
	<script src="/js/app.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://vodkabears.github.io/vide/js/jquery.vide.min.js"></script>
  </body>
</html>
