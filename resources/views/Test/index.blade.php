@extends ('layout')

@section('content')
<style type="text/css">
    .symbol {
       display: inline-block;
       border-radius: 50%;
       border: 5px double white;
       width: 30px;
       height: 30px;
     }

     .symbol-empty {
       background-color: #ccc;
     }

     .symbol-filled {
       background-color: yellow;
     }
</style>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <hr style="border-color: white;"> <a href="#"><h3 style="color: white;"> Phim </h3> </a>
                <hr style="border-color: white;">
                <div class="row">
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="">
                                <img src="img/BXH/pic0006.jpg" alt="album1">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h2 style="color: white">Justice League</h2>
                        <p style="color: white">Đánh giá dự kiến</p>
                        <input type="hidden" class="rating" data-filled="symbol symbol-filled" data-empty="symbol symbol-empty" value="3" />
                        <p></p>
                        <button type="button" class="btn btn-primary btn lg">Xem phim</button>
                    </div>

                </div>
                <div class="row">

                </div>
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
        <div class="row">
            <div class="col-md-9">
                <hr style="border-color: white;"> <a href="#"><h3 style="color: white;"> Nội dung phim </h3> </a>
                <hr style="border-color: white;">
                <div class="row">
                    <div class="col-md-12">
                        <p style="color: white">Phim Justice League: Câu chuyện xuất phát từ hành động xả thân của Superman, Batman quyết định bắt tay với Wonder Woman. Họ cùng nhau tập hợp nên một đội ngũ siêu nhân để chống lại hiểm họa mới đang trỗi dậy. Cuối cùng, dường như tất cả là quá muộn để cứu Trái đất khỏi một cuộc hủy diệt.</p>
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
