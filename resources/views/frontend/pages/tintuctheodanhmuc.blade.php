@section('title')
{{$categoryNews->title}}
@stop
@extends('frontend.general.master')
@section('content')
<div class="box-html">
    <p>
        <img alt="" src="{{url('')}}/assets/frontend/uploads/shop108/images/banner06.jpg" style="width: 100%; " />
    </p>
</div>
<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="menu-news">
                    <h3 class="title">
                        <span>
                        Danh Mục Tin Tức
                        </span>
                    </h3>
                    <ul class="level0">
                        @foreach($category as $value)
                        <li><a href="{{route('getNewsCategory',['slug'=>$value->slug])}}"><i class="far fa-arrow-alt-circle-right"></i>{{$value->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="box-news">
                    <h3 class="title">
                        <span>
                        Tin tức nổi bật
                        </span>
                    </h3>
                    <div class="news-content">
                        <div class=" news-block clearfix">
                            @foreach($noibat as $value)
                            <div class="news-item clearfix">
                                <div class="col-md-4 col-sm-4 col-xs-4 image"><a href="{{route('getNewsDetail',['slug'=>$value->slug])}}"><img class="img-responsive" src="{{url('')}}/uploads/tin-tuc/{{$value->image}}" alt="{{$value->title}}"></a></div>
                                <div class="col-md-8 col-sm-8 col-xs-8 news-info ">
                                    <h2 class="name"><a href="">{{$value->title}}</a></h2>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="breadcrumb clearfix">
                    <ul>
                        <li class="home">
                            <a title="Đến trang chủ" href="{{route('getIndexFrontend')}}"><span>Trang chủ</span></a>
                        </li>
                        <b></b> 
                        <li>&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i><a href="{{route('getNewsFrontend')}}" title=""> Tin Tức</a></li><b></b> 
                        <li>&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i><strong>{{$categoryNews->title}}</strong> </li>
                    </ul>
                </div>
                <div class="news-content">
                    <h1 class="title"><span>Tin tức</span></h1>
                    <div class="news-block clearfix">
                        @foreach($newsCate as $value)
                        <div class="news-item clearfix">
                            <div class="col-md-3 col-sm-4 col-xs-12 image"><a href="{{route('getNewsDetail',['slug'=>$value->slug])}}"><img src="{{url('')}}/uploads/tin-tuc/{{$value->image}}" class="img-responsive" alt="{{$value->title}}"></a></div>
                            <div class="col-md-9 col-sm-8 col-xs-12 news-info ">
                                <h2 class="name"><a href="{{route('getNewsDetail',['slug'=>$value->slug])}}">{{$value->title}}</a></h2>
                                <p class="date">{{date('d/m/Y',strtotime($value->created_at))}} {{date('H:i',strtotime($value->created_at))}}</p>
                                <p class="date">Đăng Bởi: {{$value->user->name}}</p>
                                <div class="desc">
                                    <p>
                                        <span style="color: rgb(102, 102, 102); font-family: Arial, helvetica, sans-serif; line-height: 20px; text-align: justify;">{{$value->summary}}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop