@section('title')
{{$newsDetail->title}}
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
                                <div class="col-md-8 col-sm-8 col-xs-8 news-info">
                                    <h2 class="name"><a href="{{route('getNewsDetail',['slug'=>$value->slug])}}">{{$value->title}}</a></h2>
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
                        <li>&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i><a href="{{route('getNewsCategory',['slug'=>$newsDetail->category->slug])}}" title="{{$newsDetail->category->title}}"> {{$newsDetail->category->title}}</a></li><b></b> 
                        <li>&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i><strong>{{$newsDetail->title}}</strong> </li>
                    </ul>
                </div>
                <div class="news-content">
                    <h1 class="title"><span>Nội Dung</span></h1>
                    <div class="news-block clearfix">
                        <div class="news-detail">
                        <div class="news-block">
                            <h2>{{$newsDetail->title}}</h2>
                            <div class="date"> Đăng Bởi: {{$newsDetail->user->name}} ({{date('d/m/Y',strtotime($newsDetail->created_at))}})
                            </div>
                            
                            <hr>
                            <div class="content">
                                {!!$newsDetail->description!!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop