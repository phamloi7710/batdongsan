<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta charset="UTF-8" />
    <title>RUNECOM12</title>
    <meta content="RUNECOM12" name="description" />
    <meta content="" name="keywords" />
    <link rel="shortcut icon" type="image/x-icon" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta property="fb:app_id" content="227481454296289" />

    <meta content="vi_VN" property="og:locale" />
    <meta content="website" property="og:type" />
    <meta content="RUNECOM12" property="og:title" />
    <meta content="RUNECOM12" property="og:description" />
    <meta content="http://runecom12.runtime.vn" property="og:image" />
    <meta content="/" property="og:url" />
    <meta content="RUNTIME" property="og:site_name" />

    <link href="Scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="App_Themes/Home/font-awesome.min.css" rel="stylesheet" />
    <link href="App_Themes/Home/common.css" rel="stylesheet" type="text/css" />
    <link href="App_Themes/Home/animate.css" rel="stylesheet" type="text/css" />
    <link href="Scripts/jQuery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css" />

    <script src="Scripts/jQuery/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="Scripts/jQuery/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
    <script src="Scripts/bootstrap/js/bootstrap.min.js"></script>
    <script src="Scripts/jQuery-ui/jquery-ui.min.js" type="text/javascript"></script>

    <script src="Scripts/common/fix-height.js" data-img-box=".image-resize" type="text/javascript"></script>
    <script src="Scripts/common/common.js" type="text/javascript"></script>
    <script src="Scripts/common/jquery.cookie.js" type="text/javascript"></script>
    <script src="Scripts/common/mycard.js" type="text/javascript"></script>
    <script src="Scripts/lazyLoad/jquery.lazyload.min.js" type="text/javascript"></script>

    <script src="Scripts/angularJS/angular.min.js"></script>
    <script src="Scripts/angularJS/angular-sanitize.min.js"></script>
    <script type="text/javascript" src="Scripts/angular-loading-spinner/spin.min.js"></script>
    <script type="text/javascript" src="Scripts/angular-loading-spinner/angular-spinner.min.js"></script>
    <script type="text/javascript" src="Scripts/angular-loading-spinner/angular-loading-spinner.js"></script>
    <script src="app/appMain.js"></script>
    <script src="app/directives/directive.js"></script>
    <script src="app/directives/angular-summernote.js"></script>
    <script src="app/directives/paging.js"></script>
    <script src="app/services/ajaxServices.js"></script>
    <script src="app/services/alertsServices.js"></script>
    <link href="http://static.runtime.vn/App_Themes/RUN012/style.css" rel="stylesheet" type="text/css" />
    <link href="http://static.runtime.vn/App_Themes/RUN012/responsive.css" rel="stylesheet" type="text/css" />

    

    
</head>
<body ng-app="appMain" style="">
        <div id="fb-root"></div>
        <script>
            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "/connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=227481454296289";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
    

<div class="wrapper page-home">
    
        <div class="header">

<script src="Scripts/common/login.js" type="text/javascript"></script>
    <section class="top-link clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav navbar-nav topmenu-contact pull-left">
                        <li><i class="fa fa-phone"></i> <span>Hotline:0908770095</span></li>
                    </ul>
                        <ul class="nav navbar-nav navbar-right topmenu  hidden-xs hidden-sm">
                            <li class="order-check"><a href="/kiem-tra-don-hang.html"><i class="fa fa-pencil-square-o"></i> Kiểm tra đơn hàng</a></li>
                            <li class="order-cart"><a href="/gio-hang.html"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                            <li class="account-login"><a href="/dang-nhap.html"><i class="fa fa-sign-in"></i> Đăng nhập </a></li>
                            <li class="account-register"><a href="/dang-ky.html"><i class="fa fa-key"></i> Đăng ký </a></li>
                        </ul>
                    <div class="show-mobile hidden-lg hidden-md">
                        <div class="quick-user">
                            <div class="quickaccess-toggle">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="inner-toggle">
                                    <ul class="login links">
                                        <li>
                                            <a href="/dang-ky.html"><i class="fa fa-sign-in"></i> Đăng ký</a>
                                        </li>
                                        <li>
                                            <a href="/dang-nhap.html"><i class="fa fa-key"></i> Đăng nhập</a>
                                        </li>
                                    </ul>
                            </div>
                        </div>
                        <div class="quick-access">
                            <div class="quickaccess-toggle">
                                <i class="fa fa-list"></i>
                            </div>
                            <div class="inner-toggle">
                                <ul class="links">
                                    <li><a id="mobile-wishlist-total" href="/kiem-tra-don-hang.html" class="wishlist"><i class="fa fa-pencil-square-o"></i> Kiểm tra đơn hàng</a></li>
                                    <li><a href="/gio-hang.html" class="shoppingcart"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        $("#btnsearch").click(function () {
            SearchProduct();
        });
        $("#txtsearch").keydown(function (event) {
            if (event.keyCode == 13) {
                SearchProduct();
            }
        });
        function SearchProduct() {
            var key = $('#txtsearch').val();
            if (key == '' || key == 'Tìm kiếm...') {
                $('#txtsearch').focus();
                return;
            }
            var group = $('#lbgroup').val();
            window.location = '/tim-kiem.html?group=' + group + '&key=' + key;
        }
    </script>
    <section class="navigation-menu clearfix">
        <div class="container">
            <div class="menu-top">
                <div class="row">
                    <div class="col-md-3 col-xs-12 col-sm-12 header-left">
                        <div class="logo clearfix">
                            <a href="/" title="">
                                <img alt="C&#212;NG TY TNHH PH&#193;T TRIỂN C&#212;NG NGHỆ RUNTIME" src="Uploads/shop108/images/logo.png" class="img-responsive" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-9 navigation-menu clearfix">
                        <nav class="navbar nav-menu">
                            <div class="navbar-header">
                                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="false">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <nav id="mobile-menu" class="mobile-menu collapse navbar-collapse">
                                <ul class='menu nav navbar-nav'><li class="level0"><a class='' href='/trang-chu.html'><span>Trang chủ</span></a></li>
<li class="level0"><a class='' href='/du-an.html'><span>Dự án</span></a></li>
<li class="level0"><a class='' href='/tin-tuc.html'><span>Tin tức</span></a></li>
<li class="level0"><a class='' href='/gioi-thieu.html'><span>Giới thiệu</span></a></li>
<li class="level0"><a class='' href='/lien-he.html'><span>Liên hệ</span></a></li>
<li class="level0"><a class='' href='/san-giao-dich.html'><span>Sàn giao dịch</span></a></li>
<li class="level0"><a class='' href='/thu-vien-anh.html'><span>Thư viện ảnh</span></a></li>
</ul class='menu nav navbar-nav'>
                            </nav>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
<script type="text/javascript">
    $(document).ready(function () {
        var str = location.href.toLowerCase();
        $("ul.menu li a").each(function () {
            if (str.indexOf(this.href.toLowerCase()) >= 0) {
                $("ul.menu li").removeClass("active");
                $(this).parent().addClass("active");
            }
        });
    });
</script>
<!--Template--
<section class="navigation-menu clearfix">
    <div class="container">
        <div class="menu-top">
            <div class="row">
                <div class="col-md-3 col-xs-12 col-sm-12 header-left">
                    <div class="logo clearfix">
                        <a title="" href="/">
                            <img class="img-responsive" src="Uploads/shop108/images/logo.png" alt="CÔNG TY TNHH PHÁT TRIỂN CÔNG NGHỆ RUNTIME">
                        </a>
                    </div>
                </div>
                <div class="col-md-9 navigation-menu clearfix">
                    <nav class="navbar nav-menu">
                        <div class="navbar-header">
                            <button aria-expanded="false" aria-controls="mobile-menu" data-target="#mobile-menu" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <nav class="mobile-menu collapse navbar-collapse" id="mobile-menu">
                            <ul class="menu nav navbar-nav">
                                <li class="level0"><a href="/trang-chu.html" class=""><span>Trang chủ</span></a></li>
                                <li class="level0"><a href="/du-an.html" class=""><span>Dự án</span></a></li>
                                <li class="level0"><a href="/tin-tuc.html" class=""><span>Tin tức</span></a></li>
                                <li class="level0"><a href="/gioi-thieu.html" class=""><span>Giới thiệu</span></a></li>
                                <li class="level0"><a href="/lien-he.html" class=""><span>Liên hệ</span></a></li>
                                <li class="level0"><a href="/san-giao-dich.html" class=""><span>Sàn giao dịch</span></a></li>
                                <li class="level0"><a href="/thu-vien-anh.html" class=""><span>Thư viện ảnh</span></a></li>
                            </ul>
                        </nav>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
--End-->
        </div>


    
        <div class="container">
            <div class="row">
                    <div class="col-md-12">

<script src="app/services/moduleServices.js"></script>
<script src="app/controllers/moduleController.js"></script>
    <!--Begin-->
    <link href="Scripts/flexSlider/flexslider.css" rel="stylesheet" type="text/css" />
    <script src="Scripts/flexSlider/jquery.flexslider-min.js" type="text/javascript"></script>
    <div class="flexslider slideshow-content" id="bannerheaderhome" ng-controller="moduleController" ng-init="initSlideshowController('Slideshows')">
        <ul class="slides">
            <li ng-repeat="item in Slideshows">
                <a title="tieu de" href="link">
                    <img alt="ten anh" ng-src="anh" />
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
    <!--End-->
<script type="text/javascript">
    window.Slideshows = [{"Id":492,"ShopId":108,"Name":"1","Image":"/Uploads/shop107/images/slide-one.jpg","Link":"#","Index":1,"Inactive":false,"Timestamp":"AAAAAAARF54="}];
</script>                    </div>
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
                        <select class="form-control" id="lbExchangeGroup" name="ExchangeGroupId"><option selected="selected" value="0">--Chọn danh mục--</option>
<option value="5">Đất nền</option>
<option value="6">Đất thổ cư</option>
<option value="7">Chung cư</option>
<option value="8">Nh&#224; phố</option>
<option value="9">BĐS kh&#225;c</option>
</select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control" id="lbExchangeType" name="ExchangeTypeId"><option selected="selected" value="0">--Chọn loại giao dịch--</option>
<option value="1">Mua b&#225;n</option>
<option value="2">Cho thu&#234;</option>
</select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control" id="lbProvince" name="ProvinceId"><option selected="selected" value="0">--Chọn khu vực--</option>
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
                        <select class="form-control" id="lbPrice" name="Price"><option selected="selected" value="0">-- Mức gi&#225; --</option>
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

<link href="Scripts/owl-carousel/owl.carousel.css" rel="stylesheet" />
<link href="Scripts/owl-carousel/owl.theme.css" rel="stylesheet" />
<script src="Scripts/owl-carousel/owl.carousel.min.js"></script>
<script src="app/services/projectServices.js"></script>
<script src="app/controllers/projectController.js"></script>
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
                                <a href="link" title="tieude">tieude</a>
                            </h2>
                            <div class="image image-resize">
                                <a href="link" title="name">
                                    <img ng-src="image" class="img-responsive" alt="name" title="name"/>
                                </a>
                                <span class="ribbon">Serial</span>
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
    window.ProjectNewSlides = [{"Id":5,"ShopId":108,"ProjectGroupId":null,"ProjectGroupCode":null,"ProjectGroupName":null,"StateId":null,"StateImage":null,"Code":"can-ho-sunview-town-thu-duc","Serial":null,"Name":"Căn Hộ Sunview Town-Thủ Đức","CreatedDate":"2015-01-21T14:55:00","UpdatedDate":"2015-01-22T09:05:00","Image":"Uploads/shop107/images/product/property-04-244x163.jpg","ImageThumbnai":"Uploads/shop107/images/product/property-04-244x163.jpg","Summary":"<p>\r\n\tSunview Town là khu phức hợp căn hộ ven sông với tiện ích tuyệt vời cho phân khúc căn hộ giá rẻ nhưng được thiết kế theo tiêu chuẩn Singapore. Căn hộ Sunview Town liền kề Bình Thạnh với giá chỉ từ 688 triệu với 02 phòng ngủ. Dự án được hỗ trợ gói 30 nghìn tỷ do Đất Xanh Group làm chủ đầu tư. Diện tích từ 54m2. Hỗ trợ vay ngân hàng từ 15 - 20 năm. Liên hệ:  0914.66.88.15</p>\r\n","Content":null,"MetaTitle":null,"MetaKeyword":null,"MetaDescription":null,"Price":0.0000,"StrPrice":"0","PriceOld":0.0000,"StrPriceOld":"0","PriceDiscount":0.0000,"StrDiscountPrice":"0","PricePriority":0.0000,"StrPricePriority":"0","PriceHasVAT":false,"Percent":0.0,"StrPercent":"0","IsHot":true,"IsNew":true,"ShowHome":false,"CountView":0,"Index":1,"Inactive":false,"Timestamp":"AAAAAAARGb0=","ModelShared_ProjectImage":null,"ModelShared_ProjectTab":null},{"Id":6,"ShopId":108,"ProjectGroupId":null,"ProjectGroupCode":null,"ProjectGroupName":null,"StateId":null,"StateImage":null,"Code":"gold-hill-center","Serial":null,"Name":"Gold Hill Center","CreatedDate":"2015-01-21T15:06:00","UpdatedDate":"2015-01-22T09:05:00","Image":"Uploads/shop107/images/product/property-08-244x163.jpg","ImageThumbnai":"Uploads/shop107/images/product/property-08-244x163.jpg","Summary":"<p>\r\n\tSở hữu đất nền sổ đỏ tại Đồng Nai - dự án Gold Hill Center chỉ với 70 triệu thanh toán đợt 1, góp 7triệu/tháng. Tặng ngay 2 lượng vàng SJC khi ký hợp đồng. Phần còn lại được trả chậm 0% lãi suất từ 3, 6, 30 tháng</p>\r\n","Content":null,"MetaTitle":null,"MetaKeyword":null,"MetaDescription":null,"Price":0.0000,"StrPrice":"0","PriceOld":0.0000,"StrPriceOld":"0","PriceDiscount":0.0000,"StrDiscountPrice":"0","PricePriority":0.0000,"StrPricePriority":"0","PriceHasVAT":false,"Percent":0.0,"StrPercent":"0","IsHot":true,"IsNew":true,"ShowHome":false,"CountView":0,"Index":2,"Inactive":false,"Timestamp":"AAAAAAARF5I=","ModelShared_ProjectImage":null,"ModelShared_ProjectTab":null},{"Id":7,"ShopId":108,"ProjectGroupId":null,"ProjectGroupCode":null,"ProjectGroupName":null,"StateId":null,"StateImage":null,"Code":"can-ho-emerald-thu-duc","Serial":null,"Name":"Căn hộ Emerald-Thủ Đức","CreatedDate":"2015-01-21T15:16:00","UpdatedDate":"2015-01-22T11:10:00","Image":"Uploads/shop107/images/product/property-10-244x163.jpg","ImageThumbnai":"Uploads/shop107/images/product/property-10-244x163.jpg","Summary":"<p>\r\n\tCăn hộ trung tâm Thủ Đức - Chỉ cần có 399 triệu, bạn sở hữu ngay căn hộ mặt tiền đường Lê Văn Chí - một vị trí đẹp nhất quận Thủ Đức, Emerald Apartment tọa lạc ngay khu vực có vị trí giao thông rất thuận lợi ngay ngã tư Thủ Đức, Hỗ trợ vay đến 20 năm lãi suất 0.9%</p>\r\n","Content":null,"MetaTitle":null,"MetaKeyword":null,"MetaDescription":null,"Price":0.0000,"StrPrice":"0","PriceOld":0.0000,"StrPriceOld":"0","PriceDiscount":0.0000,"StrDiscountPrice":"0","PricePriority":0.0000,"StrPricePriority":"0","PriceHasVAT":false,"Percent":0.0,"StrPercent":"0","IsHot":true,"IsNew":true,"ShowHome":false,"CountView":0,"Index":3,"Inactive":false,"Timestamp":"AAAAAAARKTc=","ModelShared_ProjectImage":null,"ModelShared_ProjectTab":null},{"Id":8,"ShopId":108,"ProjectGroupId":null,"ProjectGroupCode":null,"ProjectGroupName":null,"StateId":null,"StateImage":null,"Code":"can-hotopaz-garden-tan-phu","Serial":null,"Name":"Căn HộTopaz Garden-Tân Phú","CreatedDate":"2015-01-21T15:17:00","UpdatedDate":"2015-01-22T09:05:00","Image":"Uploads/shop107/images/product/apartment-b-244x163.jpg","ImageThumbnai":"Uploads/shop107/images/product/apartment-b-244x163.jpg","Summary":"<p>\r\n\tSở hữu căn hộ Tân Phú - Topaz garden giá chỉ 12.8 triệu/m2. Vị trí trung tâm chỉ cách Đầm Sen 1km. Diện tích từ 64m2, gần chợ, bệnh viện, trường học. Tiện ích cao cấp, thuận tiện đi lại với các quận như Tân Bình, Quận 10, 11, quận 1... Liên hệ : 0914.66.88.15</p>\r\n","Content":null,"MetaTitle":null,"MetaKeyword":null,"MetaDescription":null,"Price":0.0000,"StrPrice":"0","PriceOld":0.0000,"StrPriceOld":"0","PriceDiscount":0.0000,"StrDiscountPrice":"0","PricePriority":0.0000,"StrPricePriority":"0","PriceHasVAT":false,"Percent":0.0,"StrPercent":"0","IsHot":true,"IsNew":true,"ShowHome":false,"CountView":0,"Index":4,"Inactive":false,"Timestamp":"AAAAAAARF5Y=","ModelShared_ProjectImage":null,"ModelShared_ProjectTab":null},{"Id":9,"ShopId":108,"ProjectGroupId":null,"ProjectGroupCode":null,"ProjectGroupName":null,"StateId":null,"StateImage":null,"Code":"4s-riversside-linh-dong","Serial":null,"Name":"4S RIVERSSIDE LINH ĐÔNG","CreatedDate":"2015-01-27T15:44:00","UpdatedDate":"2015-01-27T15:44:00","Image":"Uploads/shop108/images/apartment-a-244x163.jpg","ImageThumbnai":"/Uploads/shop108/_thumbs/images/apartment-a-244x163.jpg","Summary":"<p>\r\n\tCách trung tâm Quận 1 gần 5 Km và chỉ mất khoảng 15 phút để tới sân bay quốc tế Tân Sơn nhất..</p>\r\n","Content":null,"MetaTitle":null,"MetaKeyword":null,"MetaDescription":null,"Price":0.0000,"StrPrice":"0","PriceOld":0.0000,"StrPriceOld":"0","PriceDiscount":0.0000,"StrDiscountPrice":"0","PricePriority":0.0000,"StrPricePriority":"0","PriceHasVAT":false,"Percent":0.0,"StrPercent":"0","IsHot":true,"IsNew":true,"ShowHome":false,"CountView":0,"Index":5,"Inactive":false,"Timestamp":"AAAAAAARKoE=","ModelShared_ProjectImage":null,"ModelShared_ProjectTab":null},{"Id":10,"ShopId":108,"ProjectGroupId":null,"ProjectGroupCode":null,"ProjectGroupName":null,"StateId":null,"StateImage":null,"Code":"the-morning-star","Serial":null,"Name":"THE MORNING STAR","CreatedDate":"2015-01-27T15:45:00","UpdatedDate":"2015-01-27T15:45:00","Image":"Uploads/shop108/images/apartment-b-244x163.jpg","ImageThumbnai":"/Uploads/shop108/_thumbs/images/apartment-b-244x163.jpg","Summary":"<p>\r\n\tMorning Star Plaza hội tụ tất cả các tiện ích tốt nhất cho một phong cách sống thượng lưu.</p>\r\n","Content":null,"MetaTitle":null,"MetaKeyword":null,"MetaDescription":null,"Price":0.0000,"StrPrice":"0","PriceOld":0.0000,"StrPriceOld":"0","PriceDiscount":0.0000,"StrDiscountPrice":"0","PricePriority":0.0000,"StrPricePriority":"0","PriceHasVAT":false,"Percent":0.0,"StrPercent":"0","IsHot":true,"IsNew":true,"ShowHome":false,"CountView":0,"Index":6,"Inactive":false,"Timestamp":"AAAAAAARKoU=","ModelShared_ProjectImage":null,"ModelShared_ProjectTab":null}];
</script>

<section class="project-content clearfix">
    <h1 class="title clearfix">
        <span>Dự án</span>
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
                <div class="col-md-3 col-sm-3 col-xs-12 project-resize project-item-box">
                    <div class="project-item">
                        <h2 class="name">
                            <a href="/du-an/can-ho-sunview-town-thu-duc.html" title="Căn Hộ Sunview Town-Thủ Đức">Căn Hộ Sunview Town-Thủ Đức</a>
                        </h2>
                        <div class="image image-resize">
                            <a href="/du-an/can-ho-sunview-town-thu-duc.html" title="Căn Hộ Sunview Town-Thủ Đức">
                                <img src="Uploads/shop107/images/product/property-04-244x163.jpg" class="img-responsive" />
                            </a>
                            <span class="ribbon"></span>
                        </div>
                        <div class="description">
                            <p>
	Sunview Town là khu phức hợp căn hộ ven sông với tiện ích tuyệt vời cho phân khúc căn hộ giá rẻ nhưng được thiết kế theo tiêu chuẩn Singapore. Căn hộ Sunview Town liền kề Bình Thạnh với giá chỉ từ 688 triệu với 02 phòng ngủ. Dự án được hỗ trợ gói 30 nghìn tỷ do Đất Xanh Group làm chủ đầu tư. Diện tích từ 54m2. Hỗ trợ vay ngân hàng từ 15 - 20 năm. Liên hệ:  0914.66.88.15</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 project-resize project-item-box">
                    <div class="project-item">
                        <h2 class="name">
                            <a href="/du-an/gold-hill-center.html" title="Gold Hill Center">Gold Hill Center</a>
                        </h2>
                        <div class="image image-resize">
                            <a href="/du-an/gold-hill-center.html" title="Gold Hill Center">
                                <img src="Uploads/shop107/images/product/property-08-244x163.jpg" class="img-responsive" />
                            </a>
                            <span class="ribbon"></span>
                        </div>
                        <div class="description">
                            <p>
	Sở hữu đất nền sổ đỏ tại Đồng Nai - dự án Gold Hill Center chỉ với 70 triệu thanh toán đợt 1, góp 7triệu/tháng. Tặng ngay 2 lượng vàng SJC khi ký hợp đồng. Phần còn lại được trả chậm 0% lãi suất từ 3, 6, 30 tháng</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 project-resize project-item-box">
                    <div class="project-item">
                        <h2 class="name">
                            <a href="/du-an/can-ho-emerald-thu-duc.html" title="Căn hộ Emerald-Thủ Đức">Căn hộ Emerald-Thủ Đức</a>
                        </h2>
                        <div class="image image-resize">
                            <a href="/du-an/can-ho-emerald-thu-duc.html" title="Căn hộ Emerald-Thủ Đức">
                                <img src="Uploads/shop107/images/product/property-10-244x163.jpg" class="img-responsive" />
                            </a>
                            <span class="ribbon"></span>
                        </div>
                        <div class="description">
                            <p>
	Căn hộ trung tâm Thủ Đức - Chỉ cần có 399 triệu, bạn sở hữu ngay căn hộ mặt tiền đường Lê Văn Chí - một vị trí đẹp nhất quận Thủ Đức, Emerald Apartment tọa lạc ngay khu vực có vị trí giao thông rất thuận lợi ngay ngã tư Thủ Đức, Hỗ trợ vay đến 20 năm lãi suất 0.9%</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 project-resize project-item-box">
                    <div class="project-item">
                        <h2 class="name">
                            <a href="/du-an/can-hotopaz-garden-tan-phu.html" title="Căn HộTopaz Garden-T&#226;n Ph&#250;">Căn HộTopaz Garden-T&#226;n Ph&#250;</a>
                        </h2>
                        <div class="image image-resize">
                            <a href="/du-an/can-hotopaz-garden-tan-phu.html" title="Căn HộTopaz Garden-T&#226;n Ph&#250;">
                                <img src="Uploads/shop107/images/product/apartment-b-244x163.jpg" class="img-responsive" />
                            </a>
                            <span class="ribbon"></span>
                        </div>
                        <div class="description">
                            <p>
	Sở hữu căn hộ Tân Phú - Topaz garden giá chỉ 12.8 triệu/m2. Vị trí trung tâm chỉ cách Đầm Sen 1km. Diện tích từ 64m2, gần chợ, bệnh viện, trường học. Tiện ích cao cấp, thuận tiện đi lại với các quận như Tân Bình, Quận 10, 11, quận 1... Liên hệ : 0914.66.88.15</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 project-resize project-item-box">
                    <div class="project-item">
                        <h2 class="name">
                            <a href="/du-an/4s-riversside-linh-dong.html" title="4S RIVERSSIDE LINH Đ&#212;NG">4S RIVERSSIDE LINH Đ&#212;NG</a>
                        </h2>
                        <div class="image image-resize">
                            <a href="/du-an/4s-riversside-linh-dong.html" title="4S RIVERSSIDE LINH Đ&#212;NG">
                                <img src="Uploads/shop108/images/apartment-a-244x163.jpg" class="img-responsive" />
                            </a>
                            <span class="ribbon"></span>
                        </div>
                        <div class="description">
                            <p>
	Cách trung tâm Quận 1 gần 5 Km và chỉ mất khoảng 15 phút để tới sân bay quốc tế Tân Sơn nhất..</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 project-resize project-item-box">
                    <div class="project-item">
                        <h2 class="name">
                            <a href="/du-an/the-morning-star.html" title="THE MORNING STAR">THE MORNING STAR</a>
                        </h2>
                        <div class="image image-resize">
                            <a href="/du-an/the-morning-star.html" title="THE MORNING STAR">
                                <img src="Uploads/shop108/images/apartment-b-244x163.jpg" class="img-responsive" />
                            </a>
                            <span class="ribbon"></span>
                        </div>
                        <div class="description">
                            <p>
	Morning Star Plaza hội tụ tất cả các tiện ích tốt nhất cho một phong cách sống thượng lưu.</p>

                        </div>
                    </div>
                </div>
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
                        <div class="property-item clearfix">
                            <div class="image image-resize col-md-3 col-xs-12 col-sm-4">
                                <a href="/san-giao-dich/can-mua-dat-du-an-gia-hoa-quan-9-de-o.html">
                                    <img src="Uploads/shop108/images/property2.jpg" class="img-responsive" />
                                </a>
                                <span class="ribbon ribbon2"></span>
                            </div>
                            <div class="right-block col-md-9 col-xs-12 col-sm-8">
                                <h2 class="name">
                                    <a href="/san-giao-dich/can-mua-dat-du-an-gia-hoa-quan-9-de-o.html">
                                        Cần mua đất dự &#225;n Gia H&#242;a Quận 9 để ở
                                    </a>
                                </h2>
                                <div class="property-date">Ngày đăng: 27/01/2015</div>
                                <div class="description hidden-xs"><p>
	Tôi là cá nhân cần tìm mua 01 lô đất để ở tại dự án Gia Hòa, Quận 9. DT: từ 120 - 150 m2. Hướng: Đông, ĐN, nam.</p>
</div>
                                <ul class="detail clearfix">
                                    <li><i class="fa fa-map-marker"></i><span> Thừa Thi&#234;n - Huế</span></li>
                                    
                                    <li><i class="fa fa-dollar"></i><span>1.201.000.000đ</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="property-item clearfix">
                            <div class="image image-resize col-md-3 col-xs-12 col-sm-4">
                                <a href="/san-giao-dich/can-mua-dat-gan-khu-long-bien-gia-lam-cau-duong-khoang-30-50m2.html">
                                    <img src="Uploads/shop108/images/property8.jpg" class="img-responsive" />
                                </a>
                                <span class="ribbon ribbon2"></span>
                            </div>
                            <div class="right-block col-md-9 col-xs-12 col-sm-8">
                                <h2 class="name">
                                    <a href="/san-giao-dich/can-mua-dat-gan-khu-long-bien-gia-lam-cau-duong-khoang-30-50m2.html">
                                        Cần mua đất gần khu Long Bi&#234;n, Gia L&#226;m, cầu đuống khoảng 30-50m2
                                    </a>
                                </h2>
                                <div class="property-date">Ngày đăng: 27/01/2015</div>
                                <div class="description hidden-xs"><p>
	Cần mua đất gần khu Long Biên, Gia Lâm, cầu đuống khoảng 30-50m2 giá khoảng 500 triệu. Điện thoại: 0948775486. ...</p>
</div>
                                <ul class="detail clearfix">
                                    <li><i class="fa fa-map-marker"></i><span>Hồ Ch&#237; Minh</span></li>
                                    
                                    <li><i class="fa fa-dollar"></i><span>1.280.000.000đ</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="property-item clearfix">
                            <div class="image image-resize col-md-3 col-xs-12 col-sm-4">
                                <a href="/san-giao-dich/cho-thue-vp-quan-cau-giay-–-mat-duong-duong-dình-nghẹ-gia-160k-m2.-lh-0948-546-328.html">
                                    <img src="Uploads/shop108/images/property2.jpg" class="img-responsive" />
                                </a>
                                <span class="ribbon ribbon2"></span>
                            </div>
                            <div class="right-block col-md-9 col-xs-12 col-sm-8">
                                <h2 class="name">
                                    <a href="/san-giao-dich/cho-thue-vp-quan-cau-giay-–-mat-duong-duong-dình-nghẹ-gia-160k-m2.-lh-0948-546-328.html">
                                        CHO THU&#202; VP QUẬN CẦU GIẤY – MẶT ĐƯỜNG DƯƠNG ĐÌNH NGH&#202;̣ GI&#193; 160K/M2. LH 0948 546 328
                                    </a>
                                </h2>
                                <div class="property-date">Ngày đăng: 27/01/2015</div>
                                <div class="description hidden-xs"><p>
	Khu vực: Cho thuê văn phòng tại Đường Dương Đình Nghệ - Quận Cầu Giấy - Hà Nội. Giá: 160 nghìn/m2/tháng. Diện tích: 80m². . Thông tin mô tả. Độc quyền phân phối cho thuê văn phòng quận cầu giấy : Mỹ đình plaza, tòa nhà mặt đường dương đình nghệ .. ...</p>
</div>
                                <ul class="detail clearfix">
                                    <li><i class="fa fa-map-marker"></i><span>B&#224; Rịa-Vũng T&#224;u</span></li>
                                    
                                    <li><i class="fa fa-dollar"></i><span>1.450.000.000đ</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="property-item clearfix">
                            <div class="image image-resize col-md-3 col-xs-12 col-sm-4">
                                <a href="/san-giao-dich/cho-thue-toa-nha-van-phong-so-8-pho-duy-tan-quan-cau-giay-hn.html">
                                    <img src="Uploads/shop108/images/property3.jpg" class="img-responsive" />
                                </a>
                                <span class="ribbon ribbon2"></span>
                            </div>
                            <div class="right-block col-md-9 col-xs-12 col-sm-8">
                                <h2 class="name">
                                    <a href="/san-giao-dich/cho-thue-toa-nha-van-phong-so-8-pho-duy-tan-quan-cau-giay-hn.html">
                                        CHO THU&#202; T&#210;A NH&#192; VĂN PH&#210;NG SỐ 8 PHỐ DUY T&#194;N - QUẬN CẦU GIẤY - HN
                                    </a>
                                </h2>
                                <div class="property-date">Ngày đăng: 27/01/2015</div>
                                <div class="description hidden-xs"><p>
	Hotline: 0914-954-155, 0974-713-391 . Vị trí: Đường Trần Thái Tông khu ĐTM Yên Hòa, Cầu Giấy, đối diện KeangNam, MobiFone, dễ dàng kết nối với các tuyến đường trung tâm Phạm Hùng, Hồ Tùng Mậu, Lê Đức Thọ. Quy Mô: tòa nhà gồm 25 tầng nổi, 2 tầng hầm ....</p>
</div>
                                <ul class="detail clearfix">
                                    <li><i class="fa fa-map-marker"></i><span>B&#224; Rịa-Vũng T&#224;u</span></li>
                                    
                                    <li><i class="fa fa-dollar"></i><span>2.100.000.000đ</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="property-item clearfix">
                            <div class="image image-resize col-md-3 col-xs-12 col-sm-4">
                                <a href="/san-giao-dich/cho-thue-nha-xuong-6000m2-mat-tien-tran-dai-nghia-gia-270-trieu-thang.-lh-0989616749.html">
                                    <img src="Uploads/shop108/images/property8.jpg" class="img-responsive" />
                                </a>
                                <span class="ribbon ribbon2"></span>
                            </div>
                            <div class="right-block col-md-9 col-xs-12 col-sm-8">
                                <h2 class="name">
                                    <a href="/san-giao-dich/cho-thue-nha-xuong-6000m2-mat-tien-tran-dai-nghia-gia-270-trieu-thang.-lh-0989616749.html">
                                        CHO THU&#202; NH&#192; XƯỞNG, 6000M2 MẶT TIỀN TRẦN ĐẠI NGHĨA, GI&#193; 270 TRIỆU/TH&#193;NG. LH: 0989616749
                                    </a>
                                </h2>
                                <div class="property-date">Ngày đăng: 27/01/2015</div>
                                <div class="description hidden-xs"><p>
	cCho thuê nhà xưởng.. - Thuận tiện giao thông, đầy đủ tiện nghi, đạt chứng nhận môi trường, PCCC.. - Mặt tiền đường Trần Đại Nghĩa, xã Tân Nhựt, Bình Chánh.. - Gần đường dẫn cao tốc Trung Lương – TP. HCM.. - Tổng diện tích khuôn viên đất 6.000m2.. - D...</p>
</div>
                                <ul class="detail clearfix">
                                    <li><i class="fa fa-map-marker"></i><span>B&#236;nh Phước</span></li>
                                    
                                    <li><i class="fa fa-dollar"></i><span>989.000.000đ</span></li>
                                </ul>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>

<link href="Scripts/fancyBox/jquery.fancybox.css?v=2.1.5" rel="stylesheet" type="text/css" media="screen" />
<script src="Scripts/fancyBox/jquery.fancybox.js" type="text/javascript"></script>

<section class="gallery-content clearfix">
    <h1 class="title clearfix">
        <span>Thư viện ảnh</span>
    </h1>
    <div class="gallery-block">
        <div class="row">
                <div class="col-md-6 gallery-item gallery-large-item">
                    <div class="image">
                        <a href="/thu-vien-anh/biet-thu.html" data-id="7">
                            <img src="Uploads/shop108/images/property3.jpg" class="img-responsive">
                        </a>
                        <div class="gallery-thumbnail">
                            <a href="/thu-vien-anh/biet-thu.html" data-id="7">Biệt thự</a>
                        </div>
                    </div>
                </div>
                            <div class="col-md-3 gallery-item gallery-small-item">
                    <div class="image">
                        <a href="/thu-vien-anh/canh-ho.html" data-id="9">
                            <img src="Uploads/shop108/images/property8.jpg" class="img-responsive">
                        </a>
                        <div class="gallery-thumbnail">
                            <a href="/thu-vien-anh/canh-ho.html" data-id="9">Canh hộ</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 gallery-item gallery-small-item">
                    <div class="image">
                        <a href="/thu-vien-anh/nha-pho.html" data-id="8">
                            <img src="Uploads/shop108/images/property2.jpg" class="img-responsive">
                        </a>
                        <div class="gallery-thumbnail">
                            <a href="/thu-vien-anh/nha-pho.html" data-id="8">Nh&#224; phố</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 gallery-item gallery-small-item">
                    <div class="image">
                        <a href="/thu-vien-anh/dat-cong-tac.html" data-id="16">
                            <img src="Uploads/shop108/images/apartment-a-244x163.jpg" class="img-responsive">
                        </a>
                        <div class="gallery-thumbnail">
                            <a href="/thu-vien-anh/dat-cong-tac.html" data-id="16">Đất c&#244;ng t&#225;c</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 gallery-item gallery-small-item">
                    <div class="image">
                        <a href="/thu-vien-anh/phong-ngu.html" data-id="24">
                            <img src="Uploads/shop108/images/apartment-b-244x163.jpg" class="img-responsive">
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

    
            <div class="partner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

<link href="Scripts/owl-carousel/owl.carousel.css" rel="stylesheet" />
<link href="Scripts/owl-carousel/owl.theme.css" rel="stylesheet" />
<script src="Scripts/owl-carousel/owl.carousel.min.js"></script>
<script src="app/services/moduleServices.js"></script>
<script src="app/controllers/moduleController.js"></script>
    <!--Begin-->
    <div class="partner-content owl-carousel" ng-controller="moduleController" ng-init="initPartnerController('Partners')">
        <h3 class="title clearfix"><span>Đối tác</span></h3>
        <div class="boxprevnext">
            <a class="prev prevlogo"><i class="fa fa-angle-left"></i></a>
            <a class="next nextlogo"><i class="fa fa-angle-right"></i></a>
        </div>
        <div class="partner-block">
            <div class="partner-item" ng-repeat="item in Partners">
                <a href="link" target="_blank" title="name">
                    <img ng-src="logo" alt="name" class="img-responsive" />
                </a>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            var owl = $(".partner-block");
            owl.owlCarousel({
                autoPlay: true,
                autoPlay: 5000,
                items: 6,
                slideSpeed: 1000,
                pagination: false,
                itemsDesktop: [1200, 6],
                itemsDesktopSmall: [980, 5],
                itemsTablet: [767, 4],
                itemsMobile: [480, 2]
            });
            $(".partner-content .nextlogo").click(function () {
                owl.trigger('owl.next');
            });
            $(".partner-content .prevlogo").click(function () {
                owl.trigger('owl.prev');
            });
        });
    </script>
    <!--End-->
<script type="text/javascript">
    window.Partners = [{"Id":41,"ShopId":108,"Name":"ssd","Link":"#","Logo":"/Uploads/shop107/images/partner/logo-1.png","Index":1,"Inactive":false},{"Id":42,"ShopId":108,"Name":"22","Link":"#","Logo":"/Uploads/shop107/images/partner/logo-2.png","Index":2,"Inactive":false},{"Id":43,"ShopId":108,"Name":"edg","Link":"#","Logo":"/Uploads/shop107/images/partner/logo-3.png","Index":3,"Inactive":false},{"Id":44,"ShopId":108,"Name":"Ff","Link":"#","Logo":"/Uploads/shop107/images/partner/logo-4.png","Index":4,"Inactive":false}];
</script>                        </div>
                    </div>
                </div>
            </div>

    
        <div class="footer">

    <div class="footer-content clearfix">
        <div class="container">
            <div class="row">
                    <div class="footer-box col-md-3 col-sm-12 col-xs-12">
                        <div class="item">
                            <h3>
                                <span>Th&#244;ng tin địa ốc</span>
                            </h3>
                        </div>
                            <ul>
                                                <li>
                                                    <a href="/tin-tuc.html">
                                                        Thị trường địa ốc
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/tin-tuc.html">
                                                        Hoạt động doanh nghiệp
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/tin-tuc.html">
                                                        Ch&#237;nh s&#225;ch - Quy hoạch
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/tin-tuc.html">
                                                        T&#224;i ch&#237;nh - Chứng kho&#225;ng
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/tin-tuc.html">
                                                        Bất động sản thế giới
                                                    </a>
                                                </li>
                            </ul>
                    </div>
                    <div class="footer-box col-md-3 col-sm-12 col-xs-12">
                        <div class="item">
                            <h3>
                                <span>Si&#234;u thị địa ốc</span>
                            </h3>
                        </div>
                            <ul>
                                                <li>
                                                    <a href="/san-giao-dich.html">
                                                        Nh&#224; phố
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/san-giao-dich.html">
                                                        Villa
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/san-giao-dich.html">
                                                        Căn hộ chung cư
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/san-giao-dich.html">
                                                        Đất thổ cư - Đất ở
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/san-giao-dich.html">
                                                        Đất dự &#225;n - Quy hoạch
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/san-giao-dich.html">
                                                        Văn ph&#242;ng
                                                    </a>
                                                </li>
                            </ul>
                    </div>
                <div class="footer-box box-address col-md-3 col-sm-12 col-xs-12">
                    <div class="item">
                        <h3>
                            Thông tin công ty
                        </h3>
                        <div class="box-address-content">
                            <b>C&#212;NG TY TNHH PH&#193;T TRIỂN C&#212;NG NGHỆ RUNTIME</b>
                            <p><i class="fa fa-map-marker"></i> 5/12A Quang Trung, P.14, Q.G&#242; Vấp, Tp.Hồ Ch&#237; Minh</p>
                            <p>
                                <i class="fa fa-envelope"></i>
                                <a href="mailto:info@runtime.vn">info@runtime.vn</a>
                            </p>
                            <p>
                                <i class="fa fa-phone"></i>
                                Phone:  (08) 85 85 66 38
                            </p>
                        </div>
                    </div>
                </div>
                <div class="footer-box box-social col-md-3 col-sm-12 col-xs-12">
                    <div class="item">
                        <h3>
                            Facebook
                        </h3>
                        <div class="fb-like-box" data-href="https://www.facebook.com/runtime.vn" data-width="289"
                             data-height="190" data-colorscheme="dark" data-show-faces="true" data-header="false"
                             data-stream="false" data-show-border="false">
                        </div>
                        <div class="social-icon">
                            <ul>
                                <li><a target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="https://www.facebook.com/runtime.vn" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a target="_blank"><i class="fa fa-youtube"></i></a></li>
                                <li><a target="_blank"><i class="fa fa-twitter "></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="footer-box box-letter col-md-3 col-sm-12 col-xs-12 hide">
                    <div class="item">
                        <h3>
                            Đăng ký nhận tin
                        </h3>
                        <div class="letter-title">
                            <span>Hộp thư</span><i class="icon-title"></i>
                        </div>
                        <div class="letter-content">
                            <div class="new-paper">
                                <div class="input-box">
                                    <input type="text" name="email" id="txtNewsletter" class="input-text form-control" value="" placeholder="Your Emain Address" />
                                </div>
                                <div class="button text-center">
                                    <a class="btn btn-primary">Nhận tin</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>

</div>


    
    <div style="display: none;" id="loading-mask">
        <div id="loading_mask_loader" class="loader">
            <img alt="Loading..." src="Images/ajax-loader-main.gif" />
            <div>
                Please wait...
            </div>
        </div>
    </div>
    <a class="back-to-top" href="#" style="display: inline;">
        <i class="fa fa-angle-up">
        </i>
    </a>
    
    
</body>
</html>
<script type="text/javascript">
    $(".header-content").css({ "background": '' });
    $("html").addClass('');
    $(document).ready(function () {
        $("img.lazy-img").each(function () {
            //$(this).attr("data-original", $(this).attr("src"));
            //$(this).attr("src", "/Images/blank.gif");
        });
        $("img.lazy-img").lazyload({
            effect: "fadeIn",
            threshold: 200
        });
    });
</script>


