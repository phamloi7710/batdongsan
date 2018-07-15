<div class="partner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <link href="{{asset('')}}/assets/frontend/owl-carousel/owl.carousel.css" rel="stylesheet" />
                            <link href="{{asset('')}}/assets/frontend/owl-carousel/owl.theme.css" rel="stylesheet" />
                            <script src="{{asset('')}}/assets/frontend/owl-carousel/owl.carousel.min.js"></script>
                            <script src="{{asset('')}}/assets/frontend/app/services/moduleServices.js"></script>
                            <script src="{{asset('')}}/assets/frontend/app/controllers/moduleController.js"></script>
                            <!--Begin-->
                            <div class="partner-content owl-carousel" ng-controller="moduleController" ng-init="initPartnerController('Partners')">
                                <h3 class="title clearfix"><span>Đối tác</span></h3>
                                <div class="boxprevnext">
                                    <a class="prev prevlogo"><i class="fa fa-angle-left"></i></a>
                                    <a class="next nextlogo"><i class="fa fa-angle-right"></i></a>
                                </div>
                                <div class="partner-block">
                                    <div class="partner-item" ng-repeat="item in Partners">
                                        <a href="@{{item.Link}}" target="_blank" title="@{{item.Name}}">
                                            <img ng-src="@{{item.Logo}}" alt="@{{item.Name}}" class="img-responsive" />
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
                                window.Partners = [{
    "Id": 41,
    "ShopId": 108,
    "Name": "ssd",
    "Link": "#",
    "Logo": "http://runecom12.runtime.vn/Uploads/shop107/images/partner/logo-4.png",
    "Index": 1,
    "Inactive": false
}, {
    "Id": 42,
    "ShopId": 108,
    "Name": "22",
    "Link": "#",
    "Logo": "http://runecom12.runtime.vn/Uploads/shop107/images/partner/logo-4.png",
    "Index": 2,
    "Inactive": false
}, {
    "Id": 43,
    "ShopId": 108,
    "Name": "edg",
    "Link": "#",
    "Logo": "http://runecom12.runtime.vn/Uploads/shop107/images/partner/logo-4.png",
    "Index": 3,
    "Inactive": false
}, {
    "Id": 44,
    "ShopId": 108,
    "Name": "Ff",
    "Link": "#",
    "Logo": "http://runecom12.runtime.vn/Uploads/shop107/images/partner/logo-4.png",
    "Index": 4,
    "Inactive": false
}];
                            </script>                        
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="footer-content clearfix">
                    <div class="container">
                        <div class="row">
                            <div class="footer-box box-address col-md-3 col-sm-12 col-xs-12">
                                <div class="item">
                                    <h3>
                                        @if($config) {{$config->name}} @endif
                                    </h3>
                                    <div class="box-address-content">
                                        <p><i class="fa fa-map-marker"></i>@if($config) {{$config->address}} @endif</p>
                                        <p>
                                            <i class="fa fa-envelope"></i>
                                            <a href="mailto:@if($config) {{$config->email}} @endif">@if($config) {{$config->email}} @endif</a>
                                        </p>
                                        <p>
                                            <i class="fa fa-phone"></i>
                                            Phone:  @if($config) {{$config->phone}} @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="footer-box box-social col-md-3 col-sm-12 col-xs-12">
                                <div class="item">
                                    <h3>
                                        Kết Nối Mạng Xã Hội
                                    </h3>
                                    <div class="social-icon">
                                        <ul>
                                            <li><a href="" target="_blank"><i class="fab fa-google-plus-square"></i></a></li>
                                            <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                            <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-box col-md-3 col-sm-12 col-xs-12">
                                <div class="item">
                                    <h3>
                                        <span>Tin Tức Bất Động Sản</span>
                                    </h3>
                                </div>
                                <ul>
                                    @foreach($news as $value)
                                    <li>
                                        <a href="{{route('getNewsDetail',['slug'=>$value->slug])}}">{{$value->title}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="footer-box box-letter col-md-3 col-sm-12 col-xs-12">
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
                                                <input type="email" name="email" class="form-control" placeholder="Xin Mời Nhập Email Của Bạn">
                                            </div>
                                            <div class="button text-center">
                                                <a class="btn btn-success ">Nhận tin</a>
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
                <img alt="Loading..." src="{{asset('')}}/assets/frontend/Images/ajax-loader-main.gif" />
                <div>
                    Vui Lòng Chờ...
                </div>
            </div>
        </div>
        <a class="back-to-top" href="#" style="display: inline;">
        <i class="fa fa-angle-up">
        </i>
        </a>
        
        <script src="{{asset('')}}/assets/frontend/bootstrap/js/bootstrap.min.js"></script>
        <script src="{{asset('')}}/assets/frontend/jQuery/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
        <script src="{{asset('')}}/assets/frontend/jQuery-ui/jquery-ui.min.js" type="text/javascript"></script>
        <script src="{{asset('')}}/assets/frontend/common/fix-height.js" data-img-box=".image-resize" type="text/javascript"></script>
        <script src="{{asset('')}}/assets/frontend/common/common.js" type="text/javascript"></script>
        <script src="{{asset('')}}/assets/frontend/common/jquery.cookie.js" type="text/javascript"></script>
        <script src="{{asset('')}}/assets/frontend/lazyLoad/jquery.lazyload.min.js" type="text/javascript"></script>
        <script src="{{asset('')}}/assets/frontend/app/directives/directive.js"></script>
        <script src="{{asset('')}}/assets/frontend/app/directives/angular-summernote.js"></script>
        <script src="{{asset('')}}/assets/frontend/app/directives/paging.js"></script>
        <script src="{{asset('')}}/assets/frontend/app/services/ajaxServices.js"></script>
        <script src="{{asset('')}}/assets/frontend/app/services/alertsServices.js"></script>
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