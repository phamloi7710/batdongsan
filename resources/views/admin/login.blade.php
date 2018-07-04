<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <!-- Bootstrap -->
        <link href="{{asset('')}}assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{asset('')}}assets/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="{{asset('')}}assets/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- Animate.css -->
        <link href="{{asset('')}}assets/admin/vendors/animate.css/animate.min.css" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="{{asset('')}}assets/admin/build/css/custom.min.css" rel="stylesheet">
    </head>
    <body class="login">
        <div>
            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
                        <form action="{{route('postLoginAdmin')}}" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <h1>Login Form</h1>
                            <div>
                                <input name="txtUsername" type="text" class="form-control" placeholder="Tên Đăng Nhập" required="required">
                            </div>
                            <div>
                                <input name="txtPassword" type="password" class="form-control" placeholder="Mật Khẩu" required="required" />
                            </div>
                            <div class="col-md-12 col-xs-12 col-sm-12">
                                <div class="col-md-6 col-xs-6 col-sm-6">
                                    <label class="pull-left">
                                        <input type="checkbox" name="remember"> Ghi Nhớ Đăng Nhập
                                    </label>
                                </div>
                                <div class="col-md-6 col-xs-6 col-sm-6">
                                    <label class="pull-right">
                                        <a href="">Quên Mật Khẩu?</a>
                                    </label>
                                </div>
                            </div>
                            
                            <div class="clearfix"></div>
                            <button type="submit" class="btn btn-default submit pull-right">Đăng Nhập</button>
                            <div class="clearfix"></div>
                            <div class="separator">
                                <br />
                                <div>
                                    <h1><i class="fa fa-paw"></i> Bất Động Sản</h1>
                                    <p>©2018 Developed by  <a target="_blank" style="color: #008CDB" href="https://facebook.com/culoi7710">Lợi Phạm</a></p>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </body>
</html>