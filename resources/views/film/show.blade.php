@extends ('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <hr style="border-color: white;"> <a href="#"><h3 style="color: white;"> Phim </h3> </a>
                <hr style="border-color: white;">
                <div class="row">
                @foreach($Movie as $mo)
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="{{ asset('poster/'.$mo->poster) }}" alt="album1">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h2 style="color: white">{{$mo->title}}</h2>
                        <div id="movie-rating" class="rating" data-current-rate></div>
                        <button type="button" class="btn btn-primary btn lg">Xem phim</button>
                    </div>
                @endforeach
                </div>
                <div class="row">

                </div>
            </div>
            <div class="col-md-3" id="bxh" style="margin-top: 2px;">
                <div class="thumbnail" style="border-color: blue;">
                    <a href=""> <h3 style="text-align: center;color: blue;">BẢNG XẾP HẠNG</h3></a> <hr>
                        <div class="caption">
                            <div>
                                <img src="{{ asset('img/BXH/pic0006.jpg') }}" alt="picture" height="90" width="60">
                                <a href="{{ route('artists.index') }}" style="color:black;"><strong style="color: red;">01.</strong> Justice League</a>
                            </div>
                        </div>
                        <div class="caption">
                            <h5>
                                <img src="{{ asset('img/BXH/pic0002.jpg') }}" alt="picture" height="90" width="60">
                                <a href="" target="_blank" style="color: black;"><strong style="color: green;">02.</strong> Pacific Rim 2</a>
                            </h5>
                        </div>
                        <div class="caption">
                            <h5 >
                                <img src="{{ asset('img/BXH/pic0003.jpg') }}" alt="picture" height="90" width="60">
                                <a href="" target="_blank" style="color: black;"><strong style="color: yellow;">03.</strong> Sherlock Holmes</a>
                            </h5>
                        </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <hr style="border-color: white;"> <a href="#"><h3 style="color: white;"> Nội dung phim </h3> </a>
                <hr style="border-color: white;">
                <div class="row">
                    <div class="col-md-12">
                        <p style="color: white">{{$mo->plot}}</p>
                    </div>

                </div>
                <div class="row">

                </div>
            </div>
            <div class="col-md-3">
                <div class="thumbnail" style="margin-top: 20px;border-color: green;">
                    <h3 align="center"><a href="">CHỦ ĐỀ HOT</a></h3>
                    <hr>
                    <div class="row" style="margin-bottom: 7px;">
                        <a href="">
                            <img src="{{ asset('img/topic/pic00001.jpg') }}" alt="" width="90%">
                        </a>
                    </div>
                    <div class="row" style="margin-bottom: 7px;">
                        <a href="">
                            <img src="{{ asset('img/topic/pic00003.jpg') }}" alt="" width="90%">
                        </a>
                    </div>
                    <div class="row" style="margin-bottom: 7px;">
                        <a href="">
                            <img src="{{ asset('img/topic/pic00002.jpg') }}" alt="" width="90%">
                        </a>
                    </div>
                    <div class="row" style="margin-bottom: 7px;">
                        <a href="">
                            <img src="{{ asset('img/topic/pic00004.jpg') }}" alt="" width="90%">
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
@section('scripts')
    <script type="text/javascript" src="{{ asset('vendor/rater/rater.min.js') }}"></script>
    <script type="text/javascript">
        console.log("setup rating ");
        $(document).ready(function () {
            console.log("setup rating ");
            var options = {
                max_value: 5,
                step_size: 0.5,
                initial_value: $('.rating').attr('data-current-rate'),
                selected_symbol_type: 'utf8_star', // Must be a key from symbols
                cursor: 'default',
                readonly: false,
                change_once: false, // Determines if the rating can only be set once
                // ajax_method: 'POST',
                // url: 'http://localhost/test.php',
                additional_data: {}
            }
            $(".rating").rate(options);
            $(".rating").on("change", function(ev, data){
                //ajax to update rating
                $.ajax({
                    url: '{!! route('film.uprate') !!}',
                    type:"POST",
                });
                console.log(data.from, data.to);
            });
        });
    </script>
@endsection
