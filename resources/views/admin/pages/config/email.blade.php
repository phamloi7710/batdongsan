@section('title')
Cấu Hình Email
@stop
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
	<div class="row">
	    <div class="col-md-12 col-sm-12 col-xs-12">
		    <div class="x_panel">
		        <div class="x_title">
		            <h2>Cấu Hình Email</h2>
		            <div class="clearfix"></div>
		        </div>
		        <div class="x_content">
		            <form method="POST" action="" class="form-horizontal form-label-left">
	                	<input type="hidden" name="_token" value="{{csrf_token()}}"/>
					    <div class="form-group">
					        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tên Người Gửi
					        </label>
					        <div class="col-md-6 col-sm-6 col-xs-12">
					            <input name="txtSender" value="{{$email['sender']}}" type="text" class="form-control col-md-7 col-xs-12">
					        </div>
					    </div>
					    <div class="form-group">
					        <label class="control-label col-md-3 col-sm-3 col-xs-12">Địa Chỉ Email
					        </label>
					        <div class="col-md-6 col-sm-6 col-xs-12">
					            <input name="txtEmail" value="{{$email['email']}}" type="text" class="form-control col-md-7 col-xs-12">
					        </div>
					    </div>
					    <div class="form-group">
					        <label class="control-label col-md-3 col-sm-3 col-xs-12">Mật Khẩu Email
					        </label>
					        <div class="col-md-6 col-sm-6 col-xs-12">
					            <input name="txtPassword" value="{{$email['password']}}" type="password" class="form-control col-md-7 col-xs-12">
					        </div>
					    </div>
					    <div class="form-group">
					        <label class="control-label col-md-3 col-sm-3 col-xs-12">Driver
					        </label>
					        <div class="col-md-6 col-sm-6 col-xs-12">
					            <input name="txtDriver" value="{{$email['driver']}}" type="text" class="form-control">
					        </div>
					    </div>
					     <div class="form-group">
					        <label class="control-label col-md-3 col-sm-3 col-xs-12">SMTP Host
					        </label>
					        <div class="col-md-6 col-sm-6 col-xs-12">
					            <input name="txtHost" value="{{$email['host']}}" type="text" class="form-control">
					        </div>
					    </div>
					    <div class="form-group">
					        <label class="control-label col-md-3 col-sm-3 col-xs-12">SMTP Port
					        </label>
					        <div class="col-md-6 col-sm-6 col-xs-12">
					            <input name="txtPort" value="{{$email['port']}}" type="text" class="form-control">
					        </div>
					    </div>
					    <div class="ln_solid"></div>
					    <div class="form-group">
					        <div class="col-md-4 col-sm-4 col-xs-5 pull-right">
					            <button type="submit" class="btn btn-success"> Cập Nhật</button>
					        </div>
					    </div>
					</form>
		        </div>
		    </div>
		</div>
	</div>
</div>
@stop