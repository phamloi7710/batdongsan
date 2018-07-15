@section('title')
Liên Hệ @stop
@section('seoDescription')
{{$config->seoDescription}}@stop
@section('seoKeywords')
{{$config->seoKeywords}}@stop
@section('seoTitle')
{{$config->seoTitle}}@stop
@section('url')
{{route('getLienHe')}}@stop
@extends('frontend.general.master')
@section('content')
<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <script src="http://maps.google.com/maps/api/js?key=AIzaSyBO93-_2pxx4UBTNduADxfoWpsFrHAFKsA&amp;sensor=true" type="text/javascript"></script>
                <div class="contact-content clearfix ng-scope" ng-controller="contactController" ng-init="initController('Shop','Maps')">
                    <h1 class="title">
                        <span>
                        Thông tin liên hệ
                        </span>
                    </h1>
                    <div class="contact-block clearfix">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="/">
                                <img class="img-responsive" src="{{url('')}}/uploads/images/{{$config->logo}}">
                                </a>
                            </div>
                            <div class="col-md-8">
                                <div class="contact-info">
                                    <div class="docs"><b class="name ng-binding">{{$config->name}}</b></div>
                                    <div class="docs ng-binding">
                                        <i class="fa fa-map-marker"></i>
                                        <b>Địa chỉ:</b> {{$config->address}}
                                    </div>
                                    <div class="docs ng-binding">
                                        <i class="fa fa-phone"></i>
                                        <b>Điện thoại:</b>  {{$config->phone}}
                                    </div>
                                    <div class="docs ng-binding">
                                        <i class="fa fa-mobile"></i>
                                        <b>Hotline</b> {{$config->hotline}}
                                    </div>
                                    <div class="docs ng-binding">
                                        <i class="fa fa-fax"></i>
                                        <b>Fax:</b>  {{$config->fax}}
                                    </div>
                                    <div class="docs">
                                        <i class="fa fa-envelope"></i>
                                        <a href="mailto:info@runtime.vn" class="ng-binding">{{$config->email}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="">
                        <h3 class="title">Gửi thông tin liên hệ</h3>
                        @if(Session('success'))
                        @else
                        <div class="description">
                            Xin vui lòng điền đầy đủ các yêu cầu vào mẫu dưới đây và gửi cho chúng tôi. <br> Chúng tôi
                            sẽ trả lời bạn ngay sau khi nhận được. Xin chân thành cảm ơn!
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="contact-feedback">
                                    @if(Session('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{Session('success')}} (<a href="{{route('getIndexFrontend')}}" class="alert-link">Trở về trang chủ</a>)
                                    </div>
                                    @endif
                                    <form method="POST" action="{{route('postLienHe')}}" class="form-horizontal form-label-left">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-user"></i></span>
                                            <input name="txtName" type="text" placeholder="Họ tên" class="form-control" required="required">
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                                            <input name="txtAddress" type="text" placeholder="Địa chỉ" class="form-control">
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                            <input name="txtEmail" type="email" placeholder="Email" class="form-control" required="required">
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                            <input name="txtPhone" type="text" placeholder="Số Điện thoại"  class="form-control" required="required">
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                            <input name="txtTitle" type="text" placeholder="Tiêu đề" class="form-control" required="required">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="content" placeholder="Nội dung" class="form-control" rows="3" required="required"></textarea>
                                        </div>
                                        <button class="btn btn-default pull-right" type="submit">Gửi Yêu Cầu</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="map clearfix">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2365.5430882569685!2d106.70546397160712!3d10.751674202199766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f7140dfb737%3A0xa870595fccbcd871!2zQ8O0bmcgVHkgVG5oaCBUbWR2IFbhuq1uIFThuqNpIEjhu5NuZyBWw6Ju!5e0!3m2!1svi!2s!4v1531620456298" width="600" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    <!-- ngIf: Maps.length>1 -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop