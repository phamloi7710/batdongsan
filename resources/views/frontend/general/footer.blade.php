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
                                        <b>@if($config) {{$config->name}} @endif</b>
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
                <img alt="Loading..." src="{{asset('')}}/assets/frontend/Images/ajax-loader-main.gif" />
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