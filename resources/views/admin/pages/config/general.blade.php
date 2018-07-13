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
		            <form method="POST" action="{{route('postGeneralConfig')}}" class="form-horizontal form-label-left" enctype="multipart/form-data">
	                	<input type="hidden" name="_token" value="{{csrf_token()}}"/>
					    <div class="form-group">
					        <label class="control-label col-md-3 col-sm-3 col-xs-12">
					        	Tên Website
					        </label>
					        <div class="col-md-6 col-sm-6 col-xs-12">
					            <input name="txtName" value="{{$config['name']}}" type="text" class="form-control">

					        </div>
					    </div>
					    <div class="form-group">
					        <label class="control-label col-md-3 col-sm-3 col-xs-12">
					        	Địa Chỉ
					        </label>
					        <div class="col-md-6 col-sm-6 col-xs-12">
					            <input name="txtAddress" value="{{$config['address']}}" type="text" class="form-control">
					        </div>
					    </div>
					    <div class="form-group">
					        <label class="control-label col-md-3 col-sm-3 col-xs-12">
					        	Số Điện Thoại 
					        </label>
					        <div class="col-md-2 col-sm-2 col-xs-12">
					            <input name="txtPhone" value="{{$config['phone']}}" type="text" class="form-control">
					        </div>
					        <label class="control-label col-md-1 col-sm-1 col-xs-12">
					        	Fax
					        </label>
					        <div class="col-md-3 col-sm-3 col-xs-12">
					            <input name="txtFax" value="{{$config['fax']}}" type="text" class="form-control">
					        </div>
					    </div>
					    <div class="form-group">
					        <label class="control-label col-md-3 col-sm-3 col-xs-12">
					        	Hotline
					        </label>
					        <div class="col-md-6 col-sm-6 col-xs-12">
					            <input name="txtHotLine" value="{{$config['hotline']}}" type="text" class="form-control">
					        </div>
					    </div>
					    <div class="form-group">
					        <label class="control-label col-md-3 col-sm-3 col-xs-12">
					        	Email Liên Hệ
					        </label>
					        <div class="col-md-6 col-sm-6 col-xs-12">
					            <input name="txtEmail" value="{{$config['email']}}" type="text" class="form-control">
					        </div>
					    </div>
		                <div class="form-group">
		                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> Logo</label>
		                    <div class="col-md-5 col-sm-5 col-xs-12">
		                        <div class="imageupload panel panel-default">
		                            <div class="panel-heading clearfix">
		                                <i class="panel-title pull-left"> Upload logo của website.</i>
		                            </div>
		                            <div class="file-tab panel-body">
		                                <label class="btn btn-default btn-file">
		                                    <span>Chọn Hình</span>
		                                    <!-- The file is stored here. -->
		                                    <input name="logo" type="file" name="image-file">
		                                </label>
		                                <button type="button" class="btn btn-default">Xoá</button>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="col-md-4 col-sm-4 col-xs-12">
		                        <div class="imageupload panel panel-default">
		                            <div class="panel-heading clearfix">
		                                <i class="panel-title pull-left"> Hình ảnh hiện tại</i>
		                            </div>
		                            <div class="panel-body">
		                                <img width="100%" src="@if($config) {{url('')}}/uploads/images/{{$config->logo}} @endif" alt="">
		                            </div>
		                        </div>
		                    </div>
		                </div>
						
		                <div class="form-group">
		                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> Favicon</label>
		                    <div class="col-md-5 col-sm-5 col-xs-12">
		                        <div class="imageupload panel panel-default">
		                            <div class="panel-heading clearfix">
		                                <i class="panel-title pull-left"> Chỉnh sửa ảnh favicon để hiển thị logo trên thanh công cụ của trình duyệt. Cỡ ảnh (16x16px hoặc 32x32px), chấp nhận các định dạng ico, png, gif.</i>
		                            </div>
		                            <div class="file-tab panel-body">
		                                <label class="btn btn-default btn-file">
		                                    <span>Chọn Hình</span>
		                                    <!-- The file is stored here. -->
		                                    <input name="favicon" type="file" name="image-file">
		                                </label>
		                                <button type="button" class="btn btn-default">Xoá</button>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="col-md-4 col-sm-4 col-xs-12">
		                        <div class="imageupload panel panel-default">
		                            <div class="panel-heading clearfix">
		                                <i class="panel-title pull-left"> Hình ảnh hiện tại</i>
		                            </div>
		                            <div class="panel-body">
		                                <img width="100%" src="@if($config) {{url('')}}/uploads/images/{{$config->favicon}} @endif" alt="">
		                            </div>
		                        </div>
		                    </div>
		                </div>
						
		                <div class="form-group">
		                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> Hình Ảnh</label>
		                    <div class="col-md-5 col-sm-5 col-xs-12">
		                        <div class="imageupload panel panel-default">
		                            <div class="panel-heading clearfix">
		                                <i class="panel-title pull-left"> Thiết lập hình ảnh đại diện chung cho website. Hình ảnh này sẽ được hiển thị khi chia sẻ lên các mạng xã hội.</i>
		                            </div>
		                            <div class="file-tab panel-body">
		                                <label class="btn btn-default btn-file">
		                                    <span>Chọn Hình</span>
		                                    <!-- The file is stored here. -->
		                                    <input name="image" type="file" name="image-file">
		                                </label>
		                                <button type="button" class="btn btn-default">Xoá</button>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="col-md-4 col-sm-4 col-xs-12">
		                        <div class="imageupload panel panel-default">
		                            <div class="panel-heading clearfix">
		                                <i class="panel-title pull-left"> Hình ảnh hiện tại</i>
		                            </div>
		                            <div class="panel-body">
		                                <img width="100%" src="@if($config){{url('')}}/uploads/images/{{$config->image}}@endif" alt="">
		                            </div>
		                        </div>
		                    </div>
		                </div>
		                <div class="x_title">
		                    <h4> SEO </h4>
		                    <span>(Không Bắt Buộc)</span>
		                    <div class="clearfix"></div>
		                </div>
		                <div class="form-group">
		                    <label class="control-label col-md-2 col-sm-2 col-xs-12"> Tiêu Đề Trang
		                    </label>
		                    <div class="col-md-8 col-sm-8 col-xs-12">
		                        <input name="txtSeoTitle" value="@if($config) {{$config->seoTitle}} @endif" type="text" class="form-control">
		                        <i>Tiêu đề tùy chỉnh hiển thị trong thẻ tiêu đề cho website</i>
		                        @if($errors->has('txtSeoTitle'))
		                            <p style="color:red; float:left">{{$errors->first('txtSeoTitle')}}</p>
		                        @endif
		                    </div>
		                </div>
		                <div class="form-group">
		                    <label class="control-label col-md-2 col-sm-2 col-xs-12"> Mô Tả Trang
		                    </label>
		                    <div class="col-md-8 col-sm-8 col-xs-12">
		                        <input name="txtSeoDescription" value="@if($config) {{$config->seoDescription}} @endif" type="text" class="form-control">
		                        <i>Mô tả META cho website.</i>
		                        @if($errors->has('txtSeoDescription'))
		                            <p style="color:red; float:left">{{$errors->first('txtSeoDescription')}}</p>
		                        @endif
		                    </div>
		                </div>
		                <div class="form-group">
		                    <label class="control-label col-md-2 col-sm-2 col-xs-12"> Từ Khoá Tìm Kiếm
		                    </label>
		                    <div class="col-md-8 col-sm-8 col-xs-12">
		                        <input name="txtSeoKeywords" value="@if($config) {{$config->seoKeywords}} @endif" type="text" class="form-control">
		                        <i>Các từ khoá xuất hiện trên các công cụ tìm kiếm, ngăn cách nhau bằng dấu phẩy.</i>
		                        @if($errors->has('txtSeoDescription'))
		                            <p style="color:red; float:left">{{$errors->first('txtSeoDescription')}}</p>
		                        @endif
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
@stop