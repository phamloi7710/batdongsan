<!DOCTYPE html>
<html>
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <meta charset="UTF-8" />
        <title>@yield('title')</title>
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
        <link href="{{asset('')}}/assets/frontend/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="{{asset('')}}/assets/frontend/App_Themes/Home/font-awesome.min.css" rel="stylesheet" />
        <link href="{{asset('')}}/assets/frontend/App_Themes/Home/common.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('')}}/assets/frontend/App_Themes/Home/animate.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('')}}/assets/frontend/jQuery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css" />
        <script src="{{asset('')}}/assets/frontend/jQuery/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="{{asset('')}}/assets/frontend/jQuery/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
        <script src="{{asset('')}}/assets/frontend/bootstrap/js/bootstrap.min.js"></script>
        <script src="{{asset('')}}/assets/frontend/jQuery-ui/jquery-ui.min.js" type="text/javascript"></script>
        <script src="{{asset('')}}/assets/frontend/common/fix-height.js" data-img-box=".image-resize" type="text/javascript"></script>
        <script src="{{asset('')}}/assets/frontend/common/common.js" type="text/javascript"></script>
        <script src="{{asset('')}}/assets/frontend/common/jquery.cookie.js" type="text/javascript"></script>
        <script src="{{asset('')}}/assets/frontend/common/mycard.js" type="text/javascript"></script>
        <script src="{{asset('')}}/assets/frontend/lazyLoad/jquery.lazyload.min.js" type="text/javascript"></script>
        <script src="{{asset('')}}/assets/frontend/angularJS/angular.min.js"></script>
        <script src="{{asset('')}}/assets/frontend/angularJS/angular-sanitize.min.js"></script>
        <script type="text/javascript" src="{{asset('')}}/assets/frontend/angular-loading-spinner/spin.min.js"></script>
        <script type="text/javascript" src="{{asset('')}}/assets/frontend/angular-loading-spinner/angular-spinner.min.js"></script>
        <script type="text/javascript" src="{{asset('')}}/assets/frontend/angular-loading-spinner/angular-loading-spinner.js"></script>
        <script src="{{asset('')}}/assets/frontend/app/appMain.js"></script>
        <script src="{{asset('')}}/assets/frontend/app/directives/directive.js"></script>
        <script src="{{asset('')}}/assets/frontend/app/directives/angular-summernote.js"></script>
        <script src="{{asset('')}}/assets/frontend/app/directives/paging.js"></script>
        <script src="{{asset('')}}/assets/frontend/app/services/ajaxServices.js"></script>
        <script src="{{asset('')}}/assets/frontend/app/services/alertsServices.js"></script>
        <link href="http://static.runtime.vn/App_Themes/RUN012/style.css" rel="stylesheet" type="text/css" />
        <link href="http://static.runtime.vn/App_Themes/RUN012/responsive.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    </head>
    <body ng-app="appMain" style="">
        <div class="wrapper page-home">
            <div class="header">
                <script src="{{asset('')}}/assets/frontend/common/login.js" type="text/javascript"></script>
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
                                        <img alt="C&#212;NG TY TNHH PH&#193;T TRIỂN C&#212;NG NGHỆ RUNTIME" src="{{asset('')}}/assets/frontend/uploads/shop108/images/logo.png" class="img-responsive" />
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
                                            <ul class='menu nav navbar-nav'>
                                            <li class="level0"><a class='' href='/trang-chu.html'><span>Trang chủ</span></a></li>
                                            <li class="level0"><a class='' href='/du-an.html'><span>Dự án</span></a></li>
                                            <li class="level0"><a class='' href="{{route('getNewsFrontend')}}"><span>Tin tức</span></a></li>
                                            <li class="level0"><a class='' href='/gioi-thieu.html'><span>Giới thiệu</span></a></li>
                                            <li class="level0"><a class='' href='/lien-he.html'><span>Liên hệ</span></a></li>
                                            <li class="level0"><a class='' href="{{route('getSanGiaoDich')}}"><span>Sàn giao dịch</span></a></li>
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
            </div>