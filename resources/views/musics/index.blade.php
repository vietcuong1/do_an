@extends ('layout')

@section('content')
<style type="text/css">
    .pagination li {
        list-style: none;
        float: left;
        margin-left: 5px;
    }
    img.cangiua {display: block; margin-left: auto; margin-right: auto;}
 </style>
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
                                <a href="#" style="color:black;"><strong style="color: red;">01.</strong> Justice League</a>
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
	  			<hr style="border-color: white;"> <a href="#"><h3 style="color: white;"> Phim gợi ý</h3> </a>
	  			<hr style="border-color: white;">
	  			<div class="row">
                    @foreach($Recommendations as $mo)
	  				<div class="col-md-4">
	  					<div class="thumbnail">
                            <!-- <p>{{$mo->Movie->id}}</p> -->
	  						<a href="{{ route('artists.show', ['id' => $mo->id]) }}">
		  						<img src="poster/{{$mo->Movie->poster}}" alt="album1">
		  					</a>
	  					</div>
	  				</div>
	  				@endforeach
                    {!! $Recommendations->links() !!}
	  			</div>
                <!-- <p>{{ Auth::user()->id }}</p> -->
                <!-- <div class="row">
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="">
                                <img src="poster/3486392.jpg" alt="album1">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="">
                                <img src="poster/3473654.jpg" alt="album1">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="">
                                <img src="poster/3480796.jpg" alt="album1">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="">
                                <img src="poster/3273636.jpg" alt="album1">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="">
                                <img src="poster/3244992.jpg" alt="album1">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="">
                                <img src="poster/3218680.jpg" alt="album1">
                            </a>
                        </div>
                    </div>
                </div> -->
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
  	</div>
	<div id="player">
	    <audio controls autoplay hidden>
	     <source src="{{URL::asset('uploads/music.mp3')}}" type="audio/mpeg">
	                unsupported !!
	    </audio>
	</div>

@stop
