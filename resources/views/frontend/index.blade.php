@section('title')
Sàn Giao Dịch Bất Động Sản Tecco
@stop
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
                        "Image": "http://runecom12.runtime.vn/Uploads/shop107/images/slide-one.jpg",
                        "Link": "#",
                    },
                    {
                        "Id": 492,
                        "ShopId": 108,
                        "Name": "1",
                        "Image": "http://runecom12.runtime.vn/Uploads/shop107/images/slide-one.jpg",
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
                        <div class="form-search clearfix">
                            <div class=col-md-10>
                                <div class="row">
                                    <div class="col-md-3">
                                        <select class="form-control" id="lbExchangeGroup" name="ExchangeGroupId">
                                            <option selected="selected" value="0">--Chọn danh mục--</option>
                                            <option value="5">Đất nền</option>
                                            <option value="6">Đất thổ cư</option>
                                            <option value="7">Chung cư</option>
                                            <option value="8">Nh&#224; phố</option>
                                            <option value="9">BĐS kh&#225;c</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control" id="lbExchangeType" name="ExchangeTypeId">
                                            <option selected="selected" value="0">--Chọn loại giao dịch--</option>
                                            <option value="1">Mua b&#225;n</option>
                                            <option value="2">Cho thu&#234;</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control" id="lbProvince" name="ProvinceId">
                                            <option selected="selected" value="0">--Chọn khu vực--</option>
                                            <option value="1">Hồ Ch&#237; Minh</option>
                                            <option value="2">H&#224; Nội</option>
                                            <option value="3">Đ&#224; Nẵng</option>
                                            <option value="4">Cần Thơ</option>
                                            <option value="5"> Thừa Thi&#234;n - Huế</option>
                                            <option value="6">An Giang</option>
                                            <option value="7">B&#224; Rịa-Vũng T&#224;u</option>
                                            <option value="8">Bạc Li&#234;u</option>
                                            <option value="9">Bắc Kạn</option>
                                            <option value="10">Bắc Giang</option>
                                            <option value="11">Bắc Ninh</option>
                                            <option value="12">Bến Tre</option>
                                            <option value="13">B&#236;nh Dương</option>
                                            <option value="14">B&#236;nh Định</option>
                                            <option value="15">B&#236;nh Phước</option>
                                            <option value="16">B&#236;nh Thuận</option>
                                            <option value="17">C&#224; Mau</option>
                                            <option value="18">Cao Bằng</option>
                                            <option value="19">Đắk Lắk</option>
                                            <option value="20">Đắk N&#244;ng</option>
                                            <option value="21">Điện Bi&#234;n</option>
                                            <option value="22">Đồng Nai</option>
                                            <option value="23">Đồng Th&#225;p</option>
                                            <option value="24">Gia Lai</option>
                                            <option value="25">H&#224; Giang</option>
                                            <option value="26">H&#224; Nam</option>
                                            <option value="27">H&#224; T&#226;y</option>
                                            <option value="28">H&#224; Tĩnh</option>
                                            <option value="29">Hải Dương</option>
                                            <option value="30">Hải Ph&#242;ng</option>
                                            <option value="31">H&#242;a B&#236;nh</option>
                                            <option value="32">Hậu Giang</option>
                                            <option value="33">Hưng Y&#234;n</option>
                                            <option value="34">Kh&#225;nh H&#242;a</option>
                                            <option value="35">Ki&#234;n Giang</option>
                                            <option value="36">Kon Tum</option>
                                            <option value="37">Lai Ch&#226;u</option>
                                            <option value="38">L&#224;o Cai</option>
                                            <option value="39">Lạng Sơn</option>
                                            <option value="40">L&#226;m Đồng</option>
                                            <option value="41">Long An</option>
                                            <option value="42">Nam Định</option>
                                            <option value="43">Nghệ An</option>
                                            <option value="44">Ninh B&#236;nh</option>
                                            <option value="45">Ninh Thuận</option>
                                            <option value="46">Ph&#250; Thọ</option>
                                            <option value="47">Ph&#250; Y&#234;n</option>
                                            <option value="48">Quảng B&#236;nh</option>
                                            <option value="49">Quảng Nam</option>
                                            <option value="50">Quảng Ng&#227;i</option>
                                            <option value="51">Quảng Ninh</option>
                                            <option value="52">Quảng Trị</option>
                                            <option value="53">S&#243;c Trăng</option>
                                            <option value="54">Sơn La</option>
                                            <option value="55">T&#226;y Ninh</option>
                                            <option value="56">Th&#225;i B&#236;nh</option>
                                            <option value="57">Th&#225;i Nguy&#234;n</option>
                                            <option value="58">Thanh H&#243;a</option>
                                            <option value="59">Thừa Thi&#234;n - Huế</option>
                                            <option value="60">Tiền Giang</option>
                                            <option value="61">Tr&#224; Vinh</option>
                                            <option value="62">Tuy&#234;n Quang</option>
                                            <option value="63">Vĩnh Long</option>
                                            <option value="64">Vĩnh Ph&#250;c</option>
                                            <option value="65">Y&#234;n B&#225;i</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control" id="lbPrice" name="Price">
                                            <option selected="selected" value="0">-- Mức gi&#225; --</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <input type="button" class="btn btn-default" name="btnSearchExchange" id="btnSearchExchange" value="TÌM KIẾM" />
                            </div>
                        </div>
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
                <div class="project-content owl-carousel" ng-controller="projectController" ng-init="initProjectNewSlideController('ProjectNewSlides')">
                    <h1 class="title clearfix">
                        <span>Dự án mới</span>
                    </h1>
                    <div class="project-slide">
                        <div class="row">
                            <div class="controls boxprevnext">
                                <a class="prev prevlogo"><i class="fa fa-angle-left"></i></a>
                                <a class="next nextlogo"><i class="fa fa-angle-right"></i></a>
                            </div>
                            <div class="project-block project-grid clearfix" id="project-slide">
                                <div class="project-item-box fixheight" ng-repeat="item in ProjectNewSlides">
                                    <div class="project-item project-slide-resize">
                                        <h2 class="name">
                                            <a href="/du-an/@{{item.Code}}.html" title="@{{item.Name}}">@{{item.Name}}</a>
                                        </h2>
                                        <div class="image image-resize">
                                            <a href="/du-an/@{{item.Code}}.html" title="@{{item.Name}}">
                                                <img ng-src="@{{item.Image}}" class="img-responsive" alt="@{{item.Name}}" title="@{{item.Name}}"/>
                                            </a>
                                            <span class="ribbon">@{{item.Category}}</span>
                                        </div>
                                        <div class="description" ng-bind-html="item.Summary">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    $(document).ready(function () {
                        var owlproductslide2 = $("#project-slide");
                        owlproductslide2.owlCarousel({
                            autoPlay: true,
                            autoPlay: 5000,
                            items: 4,
                            slideSpeed: 1000,
                            pagination: false,
                            itemsDesktop: [1200, 4],
                            itemsDesktopSmall: [980, 3],
                            itemsTablet: [767, 2],
                            itemsMobile: [480, 1]
                        });
                        $(".project-slide .nextlogo").click(function () {
                            owlproductslide2.trigger('owl.next');
                        })
                        $(".project-slide .prevlogo").click(function () {
                            owlproductslide2.trigger('owl.prev');
                        })
                    });
                </script>
                <!--End-->
                <script type="text/javascript">
                    window.ProjectNewSlides = 
                    [
                        @foreach($duanmoi as $value)
                        {
                            "Id": "{{$value->id}}",
                            "Code": "{{$value->slug}}",
                            "Name": "{{$value->title}}",
                            "Image": "{{asset('')}}{{$value->image}}",
                            "ImageThumbnai": "{{asset('')}}/{{$value->image}}",
                            "Summary": "{!!$value->summary!!}",
                            "Category": "Mới"
                        },
                        @endforeach

                    ];
                </script>
                <section class="project-content clearfix">
                    <h1 class="title clearfix">
                        <span>Tất Cả Dự Án</span>
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
                                <option value="?sort=price&amp;order=asc">Gi&#225; tăng dần</option>
                                <option value="?sort=price&amp;order=desc">Gi&#225; giảm dần</option>
                                <option value="?sort=name&amp;order=asc">T&#234;n dự &#225;n: A to Z</option>
                                <option value="?sort=name&amp;order=desc">T&#234;n dự &#225;n: Z to A</option>
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
                                        <img src="{{asset('')}}{{$value->image}}" class="img-responsive" />
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
                        <span>Sàn giao dịch nổi bật</span>
                    </h1>
                    <div class="property-tabs">
                        <div class="property-block property-list clearfix">
                            <div class="row">
                                <div class="property-resize property-item-box clearfix">
                                    @foreach($sangiaodichnoibat as $value)
                                    <div class="property-item clearfix">
                                        <div class="image image-resize col-md-3 col-xs-12 col-sm-4">
                                            <a href="/san-giao-dich/can-mua-dat-du-an-gia-hoa-quan-9-de-o.html">
                                            <img src="{{asset('')}}{{$value->image}}" class="img-responsive" />
                                    
                                            </a>
                                            <span class="ribbon ribbon2"></span>
                                        </div>
                                        <div class="right-block col-md-9 col-xs-12 col-sm-8">
                                            <h2 class="name">
                                                <a href="{{route('getSanGiaoDichDetail',['slug'=>$value->slug])}}">
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
                                                <li><i class="fa fa-map-marker"></i><span> {{$value->address}}</span></li>
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
                <link href="{{asset('')}}/assets/frontend/fancyBox/jquery.fancybox.css?v=2.1.5" rel="stylesheet" type="text/css" media="screen" />
                <script src="{{asset('')}}/assets/frontend/fancyBox/jquery.fancybox.js" type="text/javascript"></script>
                <section class="gallery-content clearfix">
                    <h1 class="title clearfix">
                        <span>Thư viện ảnh</span>
                    </h1>
                    <div class="gallery-block">
                        <div class="row">
                            <div class="col-md-6 gallery-item gallery-large-item">
                                <div class="image">
                                    <a href="/thu-vien-anh/biet-thu.html" data-id="7">
                                    <img src="{{asset('')}}/assets/frontend/uploads/shop108/images/property3.jpg" class="img-responsive">
                                    </a>
                                    <div class="gallery-thumbnail">
                                        <a href="/thu-vien-anh/biet-thu.html" data-id="7">Biệt thự</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 gallery-item gallery-small-item">
                                <div class="image">
                                    <a href="/thu-vien-anh/canh-ho.html" data-id="9">
                                    <img src="{{asset('')}}/assets/frontend/uploads/shop108/images/property8.jpg" class="img-responsive">
                                    </a>
                                    <div class="gallery-thumbnail">
                                        <a href="/thu-vien-anh/canh-ho.html" data-id="9">Canh hộ</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 gallery-item gallery-small-item">
                                <div class="image">
                                    <a href="/thu-vien-anh/nha-pho.html" data-id="8">
                                    <img src="{{asset('')}}/assets/frontend/uploads/shop108/images/property2.jpg" class="img-responsive">
                                    </a>
                                    <div class="gallery-thumbnail">
                                        <a href="/thu-vien-anh/nha-pho.html" data-id="8">Nh&#224; phố</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 gallery-item gallery-small-item">
                                <div class="image">
                                    <a href="/thu-vien-anh/dat-cong-tac.html" data-id="16">
                                    <img src="{{asset('')}}/assets/frontend/uploads/shop108/images/apartment-a-244x163.jpg" class="img-responsive">
                                    </a>
                                    <div class="gallery-thumbnail">
                                        <a href="/thu-vien-anh/dat-cong-tac.html" data-id="16">Đất c&#244;ng t&#225;c</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 gallery-item gallery-small-item">
                                <div class="image">
                                    <a href="/thu-vien-anh/phong-ngu.html" data-id="24">
                                    <img src="{{asset('')}}/assets/frontend/uploads/shop108/images/apartment-b-244x163.jpg" class="img-responsive">
                                    </a>
                                    <div class="gallery-thumbnail">
                                        <a href="/thu-vien-anh/phong-ngu.html" data-id="24">Ph&#242;ng ngủ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
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
            </div>
        </div>
    </div>
</div>
@endsection