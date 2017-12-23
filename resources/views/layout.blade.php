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
    <script type="text/javascript" src ="js/css3-mediaqueries.js"></script>
    <script type="text/javascript" href ="js/Search.js"></script>
    <link rel="stylesheet" href="css/style_menu.css" type="text/css">
    <link rel="stylesheet" href="css/slider.css">
    <!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
    <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
    <link href="css/bootstrap-rating.css" rel="stylesheet">
    <script type="text/javascript" src="js/bootstrap-rating.js"></script>
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
                                        <li><a href="{{URL::to('songnew')}}">Phim lẻ 2017</a></li>
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
                                            <li><a href="{{ URL::to('artists') }}">Các Phim Đánh Dấu</a></li>
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
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >
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
    @yield('content')

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
