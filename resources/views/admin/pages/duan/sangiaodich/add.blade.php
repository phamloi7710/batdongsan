@section('title')
Thêm Mới Sàn Giao Dịch
@stop
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
	<div class="x_panel">
        <div class="x_title">
            <h2>Thêm Mới Sàn Giao Dịch</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br />
            <form method="POST" action="{{route('postAddSanGiaoDich')}}" class="form-horizontal form-label-left" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> Tiêu Đề
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="txtTitle" value="{{old('txtTitle')}}" type="text" class="form-control" required="required">
                        @if($errors->has('txtTitle'))
                            <p style="color:red; float:left">{{$errors->first('txtTitle')}}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Danh Mục Sàn Giao Dịch
                    </label>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <select name="sltCate" class="form-control" required="required">
                            <option value="">-----Chọn Danh Mục-----</option>
                            @foreach($categories as $cate)
                            <option value="{{$cate->id}}">{{$cate->title}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('sltCate'))
                            <p style="color:red; float:left">{{$errors->first('sltCate')}}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> Giá
                    </label>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <input name="txtPrice" value="{{old('txtPrice')?old('txtPrice'):0}}" type="number" class="form-control" required="required">
                        @if($errors->has('txtPrice'))
                            <p style="color:red; float:left">{{$errors->first('txtPrice')}}</p>
                        @endif
                    </div>
                    <label class="control-label col-md-1 col-sm-1 col-xs-12"> Số Phòng
                    </label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <input name="txtRoom" value="{{old('txtRoom')?old('txtRoom'):0}}" type="number" class="form-control" required="required">
                        @if($errors->has('txtRoom'))
                            <p style="color:red; float:left">{{$errors->first('txtRoom')}}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Khu Vực
                    </label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <select name="sltArea" class="form-control" required="required">
                            <option value="Hồ Chí Minh" selected="selected">Hồ Chí Minh</option>
                            <option value="Hà Nội">Hà Nội</option>
                            <option value="Đà Nẵng">Đà Nẵng</option>
                            <option value="Cần Thơ">Cần Thơ</option>
                            <option value="Thừa Thiên - Huế"> Thừa Thiên - Huế</option>
                            <option value="An Giang">An Giang</option>
                            <option value="Bà Rịa-Vũng Tàu">Bà Rịa-Vũng Tàu</option>
                            <option value="Bạc Liêu">Bạc Liêu</option>
                            <option value="Bắc Kạn">Bắc Kạn</option>
                            <option value="Bắc Giang">Bắc Giang</option>
                            <option value="Bắc Ninh">Bắc Ninh</option>
                            <option value="Bến Tre">Bến Tre</option>
                            <option value="Bình Dương">Bình Dương</option>
                            <option value="Bình Định">Bình Định</option>
                            <option value="Bình Phước">Bình Phước</option>
                            <option value="Bình Thuận">Bình Thuận</option>
                            <option value="Cà Mau">Cà Mau</option>
                            <option value="Cao Bằng">Cao Bằng</option>
                            <option value="Đắk Lắk">Đắk Lắk</option>
                            <option value="Đắk Nông">Đắk Nông</option>
                            <option value="Điện Biên">Điện Biên</option>
                            <option value="Đồng Nai">Đồng Nai</option>
                            <option value="Đồng Tháp">Đồng Tháp</option>
                            <option value="Gia Lai">Gia Lai</option>
                            <option value="Hà Giang">Hà Giang</option>
                            <option value="Hà Nam">Hà Nam</option>
                            <option value="Hà Tây">Hà Tây</option>
                            <option value="Hà Tĩnh">Hà Tĩnh</option>
                            <option value="Hải Dương">Hải Dương</option>
                            <option value="Hải Phòng">Hải Phòng</option>
                            <option value="Hòa Bình">Hòa Bình</option>
                            <option value="Hậu Giang">Hậu Giang</option>
                            <option value="Hưng Yên">Hưng Yên</option>
                            <option value="Khánh Hòa">Khánh Hòa</option>
                            <option value="Kiên Giang">Kiên Giang</option>
                            <option value="Kon Tum">Kon Tum</option>
                            <option value="Lai Châu">Lai Châu</option>
                            <option value="Lào Cai">Lào Cai</option>
                            <option value="Lạng Sơn">Lạng Sơn</option>
                            <option value="Lâm Đồng">Lâm Đồng</option>
                            <option value="Long An">Long An</option>
                            <option value="Nam Định">Nam Định</option>
                            <option value="Nghệ An">Nghệ An</option>
                            <option value="Ninh Bình">Ninh Bình</option>
                            <option value="Ninh Thuận">Ninh Thuận</option>
                            <option value="Phú Thọ">Phú Thọ</option>
                            <option value="Phú Yên">Phú Yên</option>
                            <option value="Quảng Bình">Quảng Bình</option>
                            <option value="Quảng Nam">Quảng Nam</option>
                            <option value="Quảng Ngãi">Quảng Ngãi</option>
                            <option value="Quảng Ninh">Quảng Ninh</option>
                            <option value="Quảng Trị">Quảng Trị</option>
                            <option value="Sóc Trăng">Sóc Trăng</option>
                            <option value="Sơn La">Sơn La</option>
                            <option value="Tây Ninh">Tây Ninh</option>
                            <option value="Thái Bình">Thái Bình</option>
                            <option value="Thái Nguyên">Thái Nguyên</option>
                            <option value="Thanh Hóa">Thanh Hóa</option>
                            <option value="Thừa Thiên - Huế">Thừa Thiên - Huế</option>
                            <option value="Tiền Giang">Tiền Giang</option>
                            <option value="Trà Vinh">Trà Vinh</option>
                            <option value="Tuyên Quang">Tuyên Quang</option>
                            <option value="Vĩnh Long">Vĩnh Long</option>
                            <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                            <option value="Yên Bái">Yên Bái</option>
                        </select>
                    </div>
                    <label class="control-label col-md-2 col-sm-2 col-xs-12"> Loại Sàn Giao Dịch
                    </label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <select name="sltType" class="form-control">
                            <option value="Mua Bán"> Mua Bán</option>
                            <option value="Cho Thuê"> Cho Thuê</option>
                        </select>
                        @if($errors->has('txtRoom'))
                            <p style="color:red; float:left">{{$errors->first('txtRoom')}}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> Địa Chỉ
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="txtAddress" value="{{old('txtAddress')}}" type="text" class="form-control">
                        @if($errors->has('txtAddress'))
                            <p style="color:red; float:left">{{$errors->first('txtAddress')}}</p>
                        @endif
                    </div>
                </div>
                <div class="x_title">
                    <h4>Thông Tin Người Đăng</h4>
                    <span>(Thông tin người đăng sẽ được hiện thị trên bản tin sàn giao dịch khi khách hàng muốn liên hệ)</span>
                    <div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> Người Đăng
                    </label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <input name="txtUserPostName" value="{{old('txtUserPostName')}}" type="text" class="form-control" required="required">
                        @if($errors->has('txtUserPostName'))
                            <p style="color:red; float:left">{{$errors->first('txtUserPostName')}}</p>
                        @endif
                    </div>
                    <label class="control-label col-md-1 col-sm-1 col-xs-12"> Email
                    </label>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <input name="txtUserPostEmail" value="{{old('txtUserPostEmail')}}" type="text" class="form-control" required="required">
                        @if($errors->has('txtUserPostEmail'))
                            <p style="color:red; float:left">{{$errors->first('txtUserPostEmail')}}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> Số Điện Thoại
                    </label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <input name="txtUserPostPhone" value="{{old('txtUserPostPhone')}}" type="text" class="form-control" required="required">
                        @if($errors->has('txtUserPostPhone'))
                            <p style="color:red; float:left">{{$errors->first('txtUserPostPhone')}}</p>
                        @endif
                    </div>
                    <label class="control-label col-md-1 col-sm-1 col-xs-12"> Địa Chỉ
                    </label>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <input name="txtUserPostAddress" value="{{old('txtUserPostAddress')}}" type="text" class="form-control" required="required">
                        @if($errors->has('txtUserPostAddress'))
                            <p style="color:red; float:left">{{$errors->first('txtUserPostAddress')}}</p>
                        @endif
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> Tóm Tắt</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea name="summary" class="form-control"></textarea>
                        @if($errors->has('summary'))
                            <p style="color:red; float:left">{{$errors->first('summary')}}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> Nội Dung Sàn Giao Dịch </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <textarea name="description" id="ckeditor"></textarea>
                        <script>CKEDITOR.replace('ckeditor');</script>
                        @if($errors->has('description'))
                            <p style="color:red; float:left">{{$errors->first('description')}}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Hình Ảnh</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="imageupload panel panel-default">
                            <div class="panel-heading clearfix">
                                <i>Upload và chỉnh sửa hình ảnh của sàn giao dịch.</i>
                            </div>
                            <img id="previewImage" style="margin-top:15px;max-height:250px;">
                            <input style="display: none;" name="image" id="setUrlImage" class="form-control" type="text" name="filepath">
                            <div class="file-tab panel-body">
                                <label class="btn btn-default btn-file">
                                <span class="lfm" id="lfm" data-input="setUrlImage" data-preview="previewImage">Tải Lên Hình Ảnh</span> 
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Sắp Xếp 
                    </label>
                    <div class="col-md-1 col-sm-1 col-xs-12">
                        <input value="{{old('txtSort')?old('txtSort'):0}}" name="txtSort" type="number" class="form-control">
                        @if($errors->has('txtSort'))
                            <p style="color:red; float:left">{{$errors->first('txtSort')}}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> Trạng Thái
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="radio radio-primary">
                            <input type="radio" name="status" id="radio1" checked value="active">
                            <label for="radio1">
                                Hiển Thị 
                            </label>
                        </div>
                        <div class="radio radio-primary">
                            <input type="radio" name="status" id="radio2" value="inActive">
                            <label for="radio2">
                                Ngưng Hiển Thị 
                            </label>
                        </div>
                    </div>
                    @if($errors->has('status'))
                        <p style="color:red; float:left">{{$errors->first('status')}}</p>
                    @endif
                </div>
                <div class="x_title">
                    <h4>Tuỳ Chọn Sàn Giao Dịch</h4>
                    <span>(Không Bắt Buộc)</span>
                    <div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> Tuỳ Chọn
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="checkbox checkbox-primary">
                            <input type="checkbox" name="new" id="checkbox1" value="true">
                            <label for="checkbox1">
                                Sàn Giao Dịch Mới
                            </label>
                        </div>
                        <div class="checkbox checkbox-primary">
                            <input type="checkbox" name="hot" id="checkbox2" value="true">
                            <label for="checkbox2">
                                Sàn Giao Dịch HOT
                            </label>
                        </div>
                        <div class="checkbox checkbox-primary">
                            <input type="checkbox" name="noibat" id="checkbox3" value="true">
                            <label for="checkbox3">
                                Sàn Giao Dịch Nổi Bật
                            </label>
                        </div>
                    </div>
                </div>
                <div class="x_title">
                    <h4> SEO </h4>
                    <span>(Không Bắt Buộc)</span>
                    <div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> Tiêu Đề Trang
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="txtSeoTitle" value="{{old('txtSeoTitle')}}" type="text" class="form-control">
                        <i>Tiêu đề tùy chỉnh hiển thị trong thẻ tiêu đề cho trang này</i>
                        @if($errors->has('txtSeoTitle'))
                            <p style="color:red; float:left">{{$errors->first('txtSeoTitle')}}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> Mô Tả Trang
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="txtSeoDescription" value="{{old('txtSeoDescription')}}" type="text" class="form-control">
                        <i>Mô tả META cho trang này. Thao tác này sẽ ghi đè mọi mô tả được tạo tự động</i>
                        @if($errors->has('txtSeoDescription'))
                            <p style="color:red; float:left">{{$errors->first('txtSeoDescription')}}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> Từ Khoá (Ngăn Cách Bằng Dấu Phẩy)
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="txtSeoKeywords" value="{{old('txtSeoKeywords')}}" type="text" class="form-control">
                        <i>Danh sách các từ khóa quan trọng nhất được phân cách bằng dấu phẩy cho trang này sẽ được viết dưới dạng từ khóa META</i>
                        @if($errors->has('txtSeoKeywords'))
                            <p style="color:red; float:left">{{$errors->first('txtSeoKeywords')}}</p>
                        @endif
                    </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <button type="submit" class="btn btn-success pull-right">Thêm Mới </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection