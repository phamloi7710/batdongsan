@section('title')
Cấu Hình Mạng Xã Hội
@stop
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
	<div class="row">
	    <div class="col-md-12 col-sm-12 col-xs-12">
		    <div class="x_panel">
		        <div class="x_title">
		            <h2>Cấu Hình Mạng Xã Hội</h2>
		            <div class="clearfix"></div>
		        </div>
		        <div class="x_content">
		            <form method="POST" action="{{route('postEmailMangXaHoi')}}" class="form-horizontal form-label-left">
	                	<input type="hidden" name="_token" value="{{csrf_token()}}"/>
					    <div class="form-group">
					        <label class="control-label col-md-3 col-sm-3 col-xs-12"> Đường Dẫn Facebook
					        </label>
					        <div class="col-md-6 col-sm-6 col-xs-12">
					            <input name="txtFacebook" value="@if($mangxahoi){{$mangxahoi->facebook}}@endif" type="text" class="form-control col-md-7 col-xs-12">
					        </div>
					    </div>
					    <div class="form-group">
					        <label class="control-label col-md-3 col-sm-3 col-xs-12">Đường Dẫn Youtube
					        </label>
					        <div class="col-md-6 col-sm-6 col-xs-12">
					            <input name="txtYoutube" value="@if($mangxahoi){{$mangxahoi->youtube}}@endif" type="text" class="form-control col-md-7 col-xs-12">
					        </div>
					    </div>
					    <div class="form-group">
					        <label class="control-label col-md-3 col-sm-3 col-xs-12">Đường Dẫn Google
					        </label>
					        <div class="col-md-6 col-sm-6 col-xs-12">
					            <input name="txtGoogle" value="@if($mangxahoi){{$mangxahoi->google}}@endif" type="text" class="form-control col-md-7 col-xs-12">
					        </div>
					    </div>
					    <div class="form-group">
					        <label class="control-label col-md-3 col-sm-3 col-xs-12">Đường Dẫn Twitter
					        </label>
					        <div class="col-md-6 col-sm-6 col-xs-12">
					            <input name="txtTwitter" value="@if($mangxahoi){{$mangxahoi->twitter}}@endif" type="text" class="form-control">
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