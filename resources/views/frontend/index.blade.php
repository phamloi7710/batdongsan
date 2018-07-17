@section('title')
@if($config){{$config->name}}@endif
@stop
@section('seoKeywords')
@if($config){{$config->seoKeywords}}@endif
@stop
@section('seoDescription')
@if($config){{$config->seoDescription}}@endif
@stop
@section('seoKeywords')
@if($config){{$config->seoKeywords}}@endif
@stop
@section('seoTitle')
@if($config){{$config->seoTitle}}@endif
@stop
@section('url'){{url('')}}@stop
@extends('frontend.general.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <script src="{{asset('')}}/assets/frontend/app/services/moduleServices.js"></script>
            <script src="{{asset('')}}/assets/frontend/app/controllers/moduleController.js"></script>
            <!--Begin-->
            <link href="{{asset('')}}/assets/frontend/flexSlider/flexslider.css" rel="stylesheet" type="text/css" />
            <script src="{{asset('')}}/assets/frontend/flexSlider/jquery.flexslider-min.js" type="text/javascript"></script>
            <div class="flexslider slideshow-content" id="bannerheaderhome" ng-controller="moduleController" ng-init="initSlideshowController('Slideshows')">
                <ul class="slides">
                    <li ng-repeat="item in Slideshows">
                        <a title="@{{item.Name}}" href="@{{item.Link}}">
                        <img alt="@{{item.Name}}" ng-src="@{{item.Image}}" />
                        </a>
                    </li>
                </ul>
            </div>
            <script type="text/javascript">
                $(document).ready(function () {
                    $('#bannerheaderhome').flexslider({
                        directionNav: true,
                        controlNav: false,
                        animation: "slide",
                        itemHeigh: 270,
                        itemMargin: 0,
                        animationSpeed: 700,
                        slideshowSpeed: 3000
                    });
                });
            </script>
            <script type="text/javascript">
                window.Slideshows = [
                    {
                        "Id": 492,
                        "ShopId": 108,
                        "Name": "1",
                        "Image": "{{url('')}}/assets/frontend/Images/banner-slide4.jpg",
                        "Link": "#",
                    },
                    {
                        "Id": 492,
                        "ShopId": 108,
                        "Name": "1",
                        "Image": "{{url('')}}/assets/frontend/Images/banner-slide0.jpg",
                        "Link": "#",
                    },
                    {
                        "Id": 492,
                        "ShopId": 108,
                        "Name": "1",
                        "Image": "{{url('')}}/assets/frontend/Images/banner-slide3.jpg",
                        "Link": "#",
                    },
                    {
                        "Id": 492,
                        "ShopId": 108,
                        "Name": "1",
                        "Image": "{{url('')}}/assets/frontend/Images/banner-slide33-3.jpg",
                        "Link": "#",
                    },
                    {
                        "Id": 492,
                        "ShopId": 108,
                        "Name": "1",
                        "Image": "{{url('')}}/assets/frontend/Images/banner-slide2.jpg",
                        "Link": "#",
                    },
                ];
            </script>                    
        </div>
    </div>
</div>
<div class="adv">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="advance-search">
                    <div class="item-adv-search">
                        <div class="top-title">
                            <i class="fa fa-search"></i><span>Tìm kiếm</span>
                        </div>
                        <form method="GET" action="{{route('getSearchDuAn')}}" class="form-horizontal form-label-left">
                            <div class="form-search clearfix">
                                <div class=col-md-10>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <select class="form-control"  name="danhmuc">
                                                <option value="">--Chọn danh mục--</option>
                                                @foreach($category as $value)
                                                <option value="{{$value->id}}">{{$value->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control" name="loaigiaodich">
                                                <option value="">--Chọn loại giao dịch--</option>
                                                <option value="Mua Bán">Mua Bán</option>
                                                <option value="Cho Thuê">Cho Thuê</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control" id="tinh" name="tinh">
                                                <option value="">--Chọn tỉnh--</option>
                                                @foreach($tinh as $value)
                                                <option value="{{$value->provinceid}}">{{$value->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control" id="huyen" name="huyen">
                                                <option value="">--Chọn huyện--</option>
                                                @foreach($huyen as $value)
                                                <option value="{{$value->name}}">{{$value->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-default">Tìm Kiếm</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <script type="text/javascript">
                    $("#btnSearchExchange").click(function () {
                        SearchExchange();
                    });
                    function SearchExchange() {
                        var price = $('#lbPrice').val();
                        var group = $('#lbExchangeGroup').val();
                        var type = $('#lbExchangeType').val();
                        var province = $('#lbProvince').val();
                        window.location = '/san-giao-dich/tim-kiem.html?sp=' + price + '&group=' + group + '&type=' + type + '&province=' + province;
                    }
                </script>
            </div>
        </div>
    </div>
</div>
<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <link href="{{asset('')}}/assets/frontend/owl-carousel/owl.carousel.css" rel="stylesheet" />
                <link href="{{asset('')}}/assets/frontend/owl-carousel/owl.theme.css" rel="stylesheet" />
                <script src="{{asset('')}}/assets/frontend/owl-carousel/owl.carousel.min.js"></script>
                <script src="{{asset('')}}/assets/frontend/app/services/projectServices.js"></script>
                <script src="{{asset('')}}/assets/frontend/app/controllers/projectController.js"></script>
                <!--Begin-->
                <div class="project-content owl-carousel animatedParent" data-sequence='10'>
                    <h1 class="title clearfix">
                        <span>VÌ SAO LẠI CHỌN CHÚNG TÔI?</span>
                    </h1>
                    <div class="row center">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item-top">
                            <img class="animated bounceInLeft" width="322" height="170" src="{{URL('')}}/assets/Frontend/Images/thongtin.jpg">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item-top">
                            <img class="animated bounceInDown" width="322" height="170" src="{{URL('')}}/assets/Frontend/Images/hoptac.jpg">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item-top">
                            <img class="animated bounceInRight" width="322" height="170" src="{{URL('')}}/assets/Frontend/Images/TUVANNHIETTINHCHUYENNGHIEP.jpg">
                        </div>
                    </div>
                </div>
                <section class="project-content clearfix">
                    <h1 class="title clearfix">
                        <span>Dự Án</span>
                    </h1>
                    <nav class="navbar navbar-default filter">
                        <ul class="display">
                            <li id="grid" class="active grid"><a href="#" title="Grid"><i class="glyphicon glyphicon-th-list"></i></a></li>
                            <li id="list" class="list"><a href="#" title="List"><i class="glyphicon glyphicon-th"></i></a></li>
                        </ul>
                        <div class="limit hidden-xs">
                            <span>Dự án/trang</span>
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
                                <option selected="selected" value="?sort=index&amp;order=asc">Mặc định</option>
                                <option value="?sort=name&amp;order=asc">Tên dự án: A to Z</option>
                                <option value="?sort=name&amp;order=desc">Tên dự án: Z to A</option>
                            </select>
                        </div>
                    </nav>
                    <div class="project-block project-grid clearfix">
                        <div class="row">
                            @foreach($duan as $value)
                            <div class="col-md-3 col-sm-3 col-xs-12 project-resize project-item-box">
                                <div class="project-item">
                                    <h2 class="name">
                                        <a href="du-an/{{$value->slug}}.html" title="Căn Hộ Sunview Town-Thủ Đức">{{$value->title}}</a>
                                    </h2>
                                    <div class="image image-resize">
                                        <a href="du-an/{{$value->slug}}.html" title="Căn Hộ Sunview Town-Thủ Đức">
                                        <img src="{{asset('')}}/uploads/du-an/{{$value->image}}" class="img-responsive" />
                                        </a>
                                        <span class="ribbon">{{$value->danhmuc->title}}</span>
                                    </div>
                                    <div class="description">
                                        {{$value->summary}}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </section>
                <section class="property-content clearfix">
                    <h1 class="title clearfix">
                        <span>Tin Tức Về Các Dự Án Đang Triển Khai</span>
                    </h1>
                    <nav class="navbar navbar-default filter">
                        <ul class="display">
                            <li id="grid" class="active grid"><a href="#" title="Grid"><i class="glyphicon glyphicon-th-list"></i></a></li>
                            <li id="list" class="list"><a href="#" title="List"><i class="glyphicon glyphicon-th"></i></a></li>
                        </ul>
                        <div class="limit hidden-xs">
                            <span>Tin tức/trang</span>
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
                                <option selected="selected" value="?sort=index&amp;order=asc">Mặc định</option>
                                <option value="?sort=name&amp;order=asc">Tên tin tức: A to Z</option>
                                <option value="?sort=name&amp;order=desc">Tên tin tức: Z to A</option>
                            </select>
                        </div>
                    </nav>
                    <div class="property-tabs">
                        <div class="property-block property-list clearfix">
                            <div class="row">
                                <div class="property-resize property-item-box clearfix">
                                    @foreach($news as $value)
                                    <div class="property-item clearfix">
                                        <div class="image image-resize col-md-3 col-xs-12 col-sm-4">
                                            <a href="{{route('getNewsDetail',['slug'=>$value->slug])}}">
                                            <img src="{{asset('')}}/uploads/tin-tuc/{{$value->image}}" class="img-responsive" />
                                            </a>
                                            <span class="ribbon ribbon2">{{$value->type}}</span>
                                        </div>
                                        <div class="right-block col-md-9 col-xs-12 col-sm-8">
                                            <h2 class="name">
                                                <a href="{{route('getNewsDetail',['slug'=>$value->slug])}}">
                                                {{$value->title}}
                                                </a>
                                            </h2>
                                            <div class="property-date">Ngày đăng: {{date('d/m/Y',strtotime($value->created_at))}} {{date('H:i',strtotime($value->created_at))}}</div>
                                            <div class="description hidden-xs">
                                                <p>
                                                    {{$value->summary}}
                                                </p>
                                            </div>
                                            <!-- <ul class="detail clearfix">
                                                <li><i class="fa fa-map-marker"></i><span> {{$value->address}}</span></li>
                                                <li><i class="fa fa-dollar"></i><span>{{number_format($value->price, 0, ',', '.')}} (đ)</span></li>
                                                </ul> -->
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="center" style="margin-bottom: 20px;">{{$news->links()}}</div>
                </section>
                <link href="{{asset('')}}/assets/frontend/fancyBox/jquery.fancybox.css?v=2.1.5" rel="stylesheet" type="text/css" media="screen" />
                <script src="{{asset('')}}/assets/frontend/fancyBox/jquery.fancybox.js" type="text/javascript"></script>
                <div style="visibility: hidden;" id="loadslide">
                    <div id="photos">
                        <ul class="slides"></ul>
                    </div>
                </div>
                <script type="text/javascript">
                    $(document).ready(function () {
                        $(".gallery-block a").click(function () {
                            var id = $(this).attr("data-id");
                            LoadGallery(id);
                            return false;
                        });
                        function LoadGallery(id) {
                            $.ajax({
                                url: '/Gallery/GetGallery',
                                type: 'POST',
                                data: JSON.stringify({ 'id': id }),
                                dataType: 'json',
                                contentType: 'application/json; charset=utf-8',
                                success: function (data) {
                                    if (data.Result == "OK") {
                                        var strHtml = '';
                                        $("#photos ul.slides").html('');
                                        $.each(data.Data, function (index, it) {
                                            strHtml += '<li><a title="' + it.Name + '" href="' + it.Image + '" rel="fancy_album_' + id + '"></a></li>';
                                        });
                                        $("#photos ul.slides").html(strHtml);
                                        var length = $("#photos ul.slides li").length;
                                        if (length > 0) {
                                            $("#photos a").fancybox({
                                                prevEffect: 'none',
                                                nextEffect: 'none'
                                            });
                                            $("#photos ul.slides li:first a").trigger("click");
                                        }
                                        else {
                                        }
                                    }
                                    else {
                                        alert(data.Message);
                                    }
                                },
                                error: function () {
                                },
                                beforeSend: function () {
                                    $("#loading-mask").show();
                                }, complete: function () {
                                    $("#loading-mask").hide();
                                }
                            });
                        }
                    });
                </script>
                @section('script')
                <script>
                    $(document).ready(function(){
                        $("#tinh").change(function(){
                            var provinceid = $(this).val();
                            $.get("ajax/district/"+provinceid, function(data){
                                $("#huyen").html(data);
                            })
                        });
                    })
                </script>
                @endsection
            </div>
        </div>
    </div>
</div>
@endsection