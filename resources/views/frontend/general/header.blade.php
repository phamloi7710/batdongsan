
<!DOCTYPE html>
<html>
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <meta charset="UTF-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="@yield('seoDescription')"/>
        <meta name="keywords" content="@yield('seoKeywords')"/>
        <meta property="fb:app_id" content=""/>
        <meta property="og:locale" content="vi_VN">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="@if($config){{$config->name}}@endif">
        <meta property="og:title" content="@if($config){{$config->seoTitle}}@endif">
        <meta property="og:image" content="@if($config){{url('')}}/uploads/images/{{$config->image}}@endif">
        <meta property="og:description" content="@yield('seoDescription')">
        <meta property="og:url" content="{{url('')}}">
        <link rel="image_src" href="@if($config){{url('')}}/uploads/images/{{$config->logo}}@endif">
        <link rel="canonical" href="@yield('url')"/>
        <link rel="shortcut icon" href="@if($config){{url('')}}/uploads/images/{{$config->favicon}}@endif" type="image/x-icon">
        <link rel="icon" href="@if($config){{url('')}}/uploads/images/{{$config->favicon}}@endif" type="image/x-icon">
        <link href="{{asset('')}}/assets/frontend/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{asset('')}}/assets/frontend/App_Themes/Home/common.css" rel="stylesheet" type="text/css">
        <link href="{{asset('')}}/assets/frontend/App_Themes/Home/animate.css" rel="stylesheet" type="text/css">
        <link href="{{asset('')}}/assets/frontend/jQuery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css">
        <link href="{{asset('')}}/assets/frontend/style.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('')}}/assets/frontend/responsive.css" rel="stylesheet" type="text/css">
        <link type="text/css" rel="stylesheet" href="{{asset('')}}/assets/frontend/responsive.css">
        <link type="text/css" rel="stylesheet" href="{{asset('')}}/assets/frontend/custom.css">
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <script src="{{asset('')}}/assets/frontend/jQuery/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="{{asset('')}}/assets/frontend/angularJS/angular.min.js"></script>
        <script src="{{asset('')}}/assets/frontend/angularJS/angular-sanitize.min.js"></script>
        <script type="text/javascript" src="{{asset('')}}/assets/frontend/angular-loading-spinner/spin.min.js"></script>
        <script type="text/javascript" src="{{asset('')}}/assets/frontend/angular-loading-spinner/angular-spinner.min.js"></script>
        <script type="text/javascript" src="{{asset('')}}/assets/frontend/angular-loading-spinner/angular-loading-spinner.js"></script>
        <script src="{{asset('')}}/assets/frontend/app/appMain.js"></script>
        <script src="{{asset('')}}/assets/frontend/animations/css3-animate-it.js"></script>
        <link type="text/css" rel="stylesheet" href="{{asset('')}}/assets/frontend/animations/animations.css">
        <link type="text/css" rel="stylesheet" href="{{asset('')}}/assets/frontend/animations/animations-ie-fix.css">
        
        
        
        
        
    </head>
    <body ng-app="appMain" style="">
        <div class="wrapper page-home">
            <div class="header">
                <section class="top-link clearfix">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="nav navbar-nav topmenu-contact pull-left">
                                    <li><i class="fa fa-phone"></i> <span>Hotline: @if($config) {{$config->hotline}} @endif</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="navigation-menu clearfix">
                    <div class="container">
                        <div class="menu-top">
                            <div class="row">
                                <div class="col-md-3 col-xs-12 col-sm-12 header-left">
                                    <div class="logo clearfix">
                                        <a href="/" title="">
                                        <img alt="@if($config){{$config->name}}@endif" src="@if($config) {{asset('')}}/uploads/images/{{$config->logo}}@endif" class="img-responsive"/>
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
                                                <li class="level0"><a href="{{route('getIndexFrontend')}}"><span>Trang chủ</span></a></li>
                                                <li class="level0"><a href="{{route('getDuAn')}}"><span>Dự án</span></a></li>
                                                <li class="level0"><a href="{{route('getNewsFrontend')}}"><span>Tin tức</span></a></li>
                                                <li class="level0"><a href="ẻb "><span>Giới thiệu</span></a></li>
                                                <li class="level0"><a href="{{route('getLienHe')}} "><span>Liên hệ</span></a></li>
                                               <!--  <li class="level0"><a href="{{route('getSanGiaoDich')}}"><span>Sàn giao dịch</span></a></li> -->
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