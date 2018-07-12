@section('title')
Kết Quả Tìm Kiếm Dự Án
@stop
@extends('frontend.general.master')
@section('content')
<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <section class="property-content clearfix">
                    <h1 class="title clearfix">
                        <span>Kết quả tìm kiếm</span>
                    </h1>
                    <div class="property-tabs">
                        <div class="property-block property-list clearfix">
                            <div class="row">
                                <div class="property-resize property-item-box clearfix">
                                    @foreach($duan as $value)
                                    <div class="property-item clearfix">
                                        <div class="image image-resize col-md-3 col-xs-12 col-sm-4">
                                            <a href="{{route('getDuAnDetail',['slug'=>$value->slug])}}">
                                            <img src="{{url('')}}/uploads/du-an/{{$value->image}}" class="img-responsive">
                                            </a>
                                            <span class="ribbon ribbon2">{{$value->type}}</span>
                                        </div>
                                        <div class="right-block col-md-9 col-xs-12 col-sm-8">
                                            <h2 class="name">
                                                <a href="{{route('getDuAnDetail',['slug'=>$value->slug])}}">
                                                {{$value->title}}
                                                </a>
                                            </h2>
                                            <div class="property-date">Ngày đăng: {{date('d/m/Y',strtotime($value->created_at))}} {{date('H:i',strtotime($value->created_at))}}</div>
                                            <div class="description hidden-xs">
                                                <p>
                                                    {{$value->summary}}
                                                </p>
                                            </div>
                                            <ul class="detail clearfix">
                                                <li><i class="fa fa-map-marker"></i><span>{{$value->tinh->name}}</span></li>
                                                <li><i class="fa fa-dollar"></i><span>{{number_format($value->price, 0, ',', '.')}} (đ)</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
@stop