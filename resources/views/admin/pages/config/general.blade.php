@section('title')
Cấu Hình Thông Tin Chung Cho Website
@stop
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
	<div class="row">
	    <div class="col-md-12 col-sm-12 col-xs-12">
		    <div class="x_panel">
		        <div class="x_title">
		            <h2>Cấu Hình Thông Tin Chung Cho Website</h2>
		            <div class="clearfix"></div>
		        </div>
		        <div class="x_content">
		            <form method="POST" action="{{route('postGeneralConfig')}}" class="form-horizontal form-label-left">
	                	<input type="hidden" name="_token" value="{{csrf_token()}}"/>
					    <div class="form-group">
					        <label class="control-label col-md-3 col-sm-3 col-xs-12">
					        	Tên Website
					        </label>
					        <div class="col-md-6 col-sm-6 col-xs-12">
					            <input name="txtName" value="{{$general['name']}}" type="text" class="form-control">

					        </div>
					    </div>
					    <div class="form-group">
					        <label class="control-label col-md-3 col-sm-3 col-xs-12">
					        	Địa Chỉ
					        </label>
					        <div class="col-md-6 col-sm-6 col-xs-12">
					            <input name="txtAddress" value="{{$general['address']}}" type="text" class="form-control">
					        </div>
					    </div>
					    <div class="form-group">
					        <label class="control-label col-md-3 col-sm-3 col-xs-12">
					        	Số Điện Thoại 
					        </label>
					        <div class="col-md-6 col-sm-6 col-xs-12">
					            <input name="txtPhone" value="{{$general['phone']}}" type="text" class="form-control">
					        </div>
					    </div>
					    <div class="form-group">
					        <label class="control-label col-md-3 col-sm-3 col-xs-12">
					        	Hotline
					        </label>
					        <div class="col-md-6 col-sm-6 col-xs-12">
					            <input name="txtHotLine" value="{{$general['hotline']}}" type="text" class="form-control">
					        </div>
					    </div>
					    <div class="form-group">
					        <label class="control-label col-md-3 col-sm-3 col-xs-12">
					        	Email Liên Hệ
					        </label>
					        <div class="col-md-6 col-sm-6 col-xs-12">
					            <input name="txtEmail" value="{{$general['email']}}" type="text" class="form-control">
					        </div>
					    </div>
					    <div class="form-group">
						    <label class="control-label col-md-3 col-sm-3 col-xs-12">Thiết Lập Logo</label>
						    <div class="col-md-6 col-sm-6 col-xs-12">
						        <div class="imageupload panel panel-default">
						            <div class="panel-heading clearfix">
						                <i>Upload và chỉnh sửa hình ảnh của logo.</i>
						            </div>
						            @if(isset($general['logo']))
						            <img src="{{asset('')}}{{$general['logo']}}" id="previewLogo" style="margin-top:15px;max-height:200px;">
						            @else
						            <img id="previewLogo" style="margin-top:15px;max-height:200px;">
						            @endif
						            <input style="display: none;" name="logo" id="setUrlLogo" class="form-control" type="text" name="filepath">
						            <div class="file-tab panel-body">
						                <label class="btn btn-default btn-file">
						                <span class="lfm" id="lfm" data-input="setUrlLogo" data-preview="previewLogo">Tải Lên Hình Ảnh</span> 
						                </label>
						            </div>
						        </div>
						    </div>
						</div>
						<div class="form-group">
						    <label class="control-label col-md-3 col-sm-3 col-xs-12">Thiết Lập Favicon</label>
						    <div class="col-md-6 col-sm-6 col-xs-12">
						        <div class="imageupload panel panel-default">
						            <div class="panel-heading clearfix">
						                <i>Chỉnh sửa ảnh favicon để hiển thị logo trên thanh công cụ của trình duyệt. Cỡ ảnh (16x16px hoặc 32x32px), chấp nhận các định dạng ico, png, gif.</i>
						            </div>
						            @if(isset($general['favicon']))
						            <img src="{{asset('')}}{{$general['favicon']}}" id="previewFavicon" style="margin-top:15px;max-height:200px;">
						            @else
						            <img id="previewFavicon" style="margin-top:15px;max-height:200px;">
						            @endif
						            <input style="display: none;" name="favicon" id="setUrlFavicon" class="form-control" type="text" name="filepath">
						            <div class="file-tab panel-body">
						                <label class="btn btn-default btn-file">
						                <span class="lfm" id="lfm" data-input="setUrlFavicon" data-preview="previewFavicon">Tải Lên Hình Ảnh</span> 
						                </label>
						            </div>
						        </div>
						    </div>
						</div>
						<div class="form-group">
						    <label class="control-label col-md-3 col-sm-3 col-xs-12">Hình Ảnh</label>
						    <div class="col-md-6 col-sm-6 col-xs-12">
						        <div class="imageupload panel panel-default">
						            <div class="panel-heading clearfix">
						                <i>Thiết lập hình ảnh đại diện chung cho website. Hình ảnh này sẽ được hiển thị khi chia sẻ lên các mạng xã hội.</i>
						            </div>
						            @if(isset($general['image']))
						            <img src="{{asset('')}}{{$general['image']}}" id="previewImage" style="margin-top:15px;max-height:200px;">
						            @else
						            <img id="previewImage" style="margin-top:15px;max-height:200px;">
						            @endif
						            <input style="display: none;" name="image" id="setUrlFavicon" class="form-control" type="text" name="filepath">
						            <div class="file-tab panel-body">
						                <label class="btn btn-default btn-file">
						                <span class="lfm" id="lfm" data-input="setUrlFavicon" data-preview="previewImage">Tải Lên Hình Ảnh</span> 
						                </label>
						            </div>
						        </div>
						    </div>
						</div>
					    <div class="ln_solid"></div>
					    <div class="form-group">
					        <div class="col-md-4 col-sm-4 col-xs-5 pull-right">
					            <button type="submit" class="btn btn-success">Cập Nhật</button>
					        </div>
					    </div>
					</form>
		        </div>
		    </div>
		</div>
	</div>
</div>
<script>
 	$(document).ready(function(){
 		var domain = "";
 		$('.lfm').filemanager('image', {prefix: domain});
 		var lfm = function(options, cb) {
			var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
			window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=300,height=600');
			window.SetUrl = cb;
		}
		lfm({type: 'image', prefix: 'prefix'}, function(url, path) {
		});
 	});
 </script>	
@stop