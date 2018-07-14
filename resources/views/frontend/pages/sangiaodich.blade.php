
@section('title')
Sàn Giao Dịch Bất Động Sản Tecco @stop

@section('seoDescription')
{{$config->seoDescription}}@stop

@section('seoKeywords')
{{$config->seoKeywords}}@stop

@section('seoTitle')
{{$config->seoTitle}}@stop

@section('url')
{{route('getSanGiaoDich')}}@stop
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
            <div class="col-md-9">
                <div class="breadcrumb clearfix">
                    <ul>
                        <li class="home">
                            <a title="Đến trang chủ" href="{{route('getIndexFrontend')}}"><span>Trang chủ</span></a>
                        </li>
                        <b></b> 
                        <li>&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i><strong> Sàn giao dịch</strong></li>
                    </ul>
                </div>
                <script type="text/javascript">
                    $(".link-site-more").hover(function () { $(this).find(".s-c-n").show(); }, function () { $(this).find(".s-c-n").hide(); });
                </script>
                <section class="property-content clearfix">
                    <h1 class="title clearfix">
                        <span>Sàn giao dịch</span>
                    </h1>
                    <nav class="navbar navbar-default filter">
                        <ul class="display">
                            <li id="grid" class="active grid"><a href="#" title="Grid"><i class="glyphicon glyphicon-th-list"></i></a></li>
                            <li id="list" class="list"><a href="#" title="List"><i class="glyphicon glyphicon-th"></i></a></li>
                        </ul>
                        <div class="limit hidden-xs">
                            <span>Sàn giao dịch/trang</span>
                            <select id="lblimit" name="lblimit" onchange="window.location.href = this.options[this.selectedIndex].value">
                                <option value="?limit=10">10</option>
                                <option selected="selected" value="?limit=12">12</option>
                                <option value="?limit=20">20</option>
                                <option value="?limit=50">50</option>
                                <option value="?limit=100">100</option>
                                <option value="?limit=250">250</option>
                                <option value="?limit=500">500</option>
                            </select>
                        </div>
                        <div class="sort hidden-xs">
                            <span>Sắp xếp</span>
                            <select id="lbsort" onchange="window.location.href = this.options[this.selectedIndex].value">
                                <option value="?sort=index&amp;order=asc">Mặc định</option>
                                <option value="?sort=price&amp;order=asc">Gi&#225; tăng dần</option>
                                <option value="?sort=price&amp;order=desc">Gi&#225; giảm dần</option>
                                <option value="?sort=name&amp;order=asc">T&#234;n giao dịch: A to Z</option>
                                <option value="?sort=name&amp;order=desc">T&#234;n giao dịch: Z to A</option>
                                <option value="?sort=createddate&amp;order=asc">Ng&#224;y tăng dần</option>
                                <option value="?sort=createddate&amp;order=desc">Ng&#224;y giảm dần</option>
                            </select>
                        </div>
                    </nav>
                    <div class="property-tabs">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="?tab=#tatca">Tất Cả</a></li>
                            <li><a data-toggle="tab" href="#muaban">Mua Bán</a></li>
                            <li><a data-toggle="tab" href="#chothue">Cho Thuê</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tatca" class="property-block property-list clearfix tab-pane fade in active">
                                <div class="row">
                                    <div class="property-resize property-item-box clearfix">
                                        @foreach($sangiaodich as $value)
                                        <div class="property-item clearfix">
                                            <div class="image image-resize col-md-3 col-xs-12 col-sm-4">
                                                <a href="{{route('getSanGiaoDichDetail',['slug'=>$value->slug])}}">
                                                <img src="{{url('')}}/uploads/san-giao-dich/{{$value->image}}" class="img-responsive" />
                                                </a>
                                                <span class="ribbon ribbon2">{{$value->type}}</span>
                                            </div>
                                            <div class="right-block col-md-9 col-xs-12 col-sm-8">
                                                <h2 class="name">
                                                    <a href="{{route('getSanGiaoDichDetail',['slug'=>$value->slug])}}">{{$value->title}}
                                                    </a>
                                                </h2>
                                                <div class="property-date">Ngày đăng: {{date('d/m/Y',strtotime($value->created_at))}} {{date('H:i',strtotime($value->created_at))}}</div>
                                                <div class="description hidden-xs">
                                                    <p>
                                                        {{$value->summary}}
                                                    </p>
                                                </div>
                                                <ul class="detail clearfix">
                                                    <li><i class="fa fa-map-marker"></i><span>{{$value->area}}</span></li>
                                                    <li><i class="fa fa-dollar"></i><span>{{number_format($value->price, 0, ',', '.')}} (đ)</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div id="muaban" class="property-block property-list clearfix tab-pane fade">
                                <div class="row">
                                    <div class="property-resize property-item-box clearfix">
                                        @foreach($muaban as $value)
                                        <div class="property-item clearfix">
                                            <div class="image image-resize col-md-3 col-xs-12 col-sm-4">
                                                <a href="/san-giao-dich/that-de-dang-khi-so-huu-lo-dat-nen-du-an-gia-re-quan-9.html">
                                                <img src="{{url('')}}/{{$value->image}}" class="img-responsive" />
                                                </a>
                                                <span class="ribbon ribbon2">{{$value->type}}</span>
                                            </div>
                                            <div class="right-block col-md-9 col-xs-12 col-sm-8">
                                                <h2 class="name">
                                                    <a href="{{route('getSanGiaoDichDetail',['slug'=>$value->slug])}}">{{$value->title}}
                                                    </a>
                                                </h2>
                                                <div class="property-date">Ngày đăng: {{date('d/m/Y',strtotime($value->created_at))}} {{date('H:i',strtotime($value->created_at))}}</div>
                                                <div class="description hidden-xs">
                                                    <p>
                                                        {{$value->summary}}
                                                    </p>
                                                </div>
                                                <ul class="detail clearfix">
                                                    <li><i class="fa fa-map-marker"></i><span>{{$value->area}}</span></li>
                                                    <li><i class="fa fa-dollar"></i><span>{{number_format($value->price, 0, ',', '.')}} (đ)</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div id="chothue" class="property-block property-list clearfix tab-pane fade">
                                <div class="row">
                                    <div class="property-resize property-item-box clearfix">
                                        @foreach($chothue as $value)
                                        <div class="property-item clearfix">
                                            <div class="image image-resize col-md-3 col-xs-12 col-sm-4">
                                                <a href="/san-giao-dich/that-de-dang-khi-so-huu-lo-dat-nen-du-an-gia-re-quan-9.html">
                                                <img src="{{url('')}}/{{$value->image}}" class="img-responsive" />
                                                </a>
                                                <span class="ribbon ribbon2">{{$value->type}}</span>
                                            </div>
                                            <div class="right-block col-md-9 col-xs-12 col-sm-8">
                                                <h2 class="name">
                                                    <a href="{{route('getSanGiaoDichDetail',['slug'=>$value->slug])}}">{{$value->title}}
                                                    </a>
                                                </h2>
                                                <div class="property-date">Ngày đăng: {{date('d/m/Y',strtotime($value->created_at))}} {{date('H:i',strtotime($value->created_at))}}</div>
                                                <div class="description hidden-xs">
                                                    <p>
                                                        {{$value->summary}}
                                                    </p>
                                                </div>
                                                <ul class="detail clearfix">
                                                    <li><i class="fa fa-map-marker"></i><span>{{$value->area}}</span></li>
                                                    <li><i class="fa fa-dollar"></i><span>{{number_format($value->price, 0, ',', '.')}} (đ)</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            @include('frontend.general.danhmucsangiaodich')
        </div>
    </div>
</div>
@stop