@section('title')
Thêm Mới Dự Án
@stop
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
	<div class="x_panel">
        <div class="x_title">
            <h2>Thêm Mới Dự Án</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br />
            <form method="POST" action="{{route('postAddDuAn')}}" class="form-horizontal form-label-left" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div class="x_title">
                    <h4>Thông Tin Cơ Bản</h4>
                    <div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12"> Tiêu Đề
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input name="txtTitle" value="{{old('txtTitle')}}" type="text" class="form-control" required="required">
                        @if($errors->has('txtTitle'))
                            <p style="color:red; float:left">{{$errors->first('txtTitle')}}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12">Danh Mục Dự Án
                    </label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <select name="sltCate" class="form-control" required="required">
                            <option value="">--Chọn Danh Mục--</option>
                            @foreach($categories as $cate)
                            <option value="{{$cate->id}}">{{$cate->title}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('sltCate'))
                            <p style="color:red; float:left">{{$errors->first('sltCate')}}</p>
                        @endif
                    </div>
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Loại Hình Bất Động Sản
                    </label>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <select name="sltLoai" class="form-control">
                            <option value="">-----Vui lòng chọn-----</option>
                            <option value="Mua Bán">Mua Bán</option>
                            <option value="Cho Thuê">Cho Thuê</option>
                        </select>
                        @if($errors->has('sltLoai'))
                            <p style="color:red; float:left">{{$errors->first('sltLoai')}}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12">Tỉnh / Thành Phố
                    </label>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <select id="tinh" name="sltProvince" class="form-control">
                            <option value="">-----Chọn Tỉnh / Thành Phố-----</option>
                            @foreach($province as $value)
                            <option value="{{$value->provinceid}}">{{$value->name}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('sltProvince'))
                            <p style="color:red; float:left">{{$errors->first('sltProvince')}}</p>
                        @endif
                    </div>
                    <label class="control-label col-md-2 col-sm-2 col-xs-12">Quận / Huyện
                    </label>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <select id="huyen" name="sltDistrict" class="form-control">
                            <option value="">-----Chọn Quận / Huyện-----</option>
                            
                        </select>
                        @if($errors->has('sltDistrict'))
                            <p style="color:red; float:left">{{$errors->first('sltDistrict')}}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12"> Tóm Tắt</label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <textarea name="summary" class="form-control"></textarea>
                        @if($errors->has('summary'))
                            <p style="color:red; float:left">{{$errors->first('summary')}}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12"> Nội Dung Dự Án </label>
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <textarea name="description" id="ckeditor"></textarea>
                        <script>CKEDITOR.replace('ckeditor');</script>
                        @if($errors->has('description'))
                            <p style="color:red; float:left">{{$errors->first('description')}}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12"> Hình Ảnh</label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="imageupload panel panel-default">
                            <div class="panel-heading clearfix">
                                <i class="panel-title pull-left">Upload và chỉnh sửa hình ảnh của dự án.</i>
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
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12">Sắp Xếp 
                    </label>
                    <div class="col-md-1 col-sm-1 col-xs-12">
                        <input value="{{old('txtSort')?old('txtSort'):0}}" name="txtSort" type="number" class="form-control">
                        @if($errors->has('txtSort'))
                            <p style="color:red; float:left">{{$errors->first('txtSort')}}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12"> Trạng Thái
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="radio radio-primary">
                            <input type="radio" name="status" id="radio1" checked value="active">
                            <label for="radio1">
                                Hiển Thị 
                            </label>
                        </div>
                        <div class="radio radio-danger">
                            <input type="radio" name="status" id="radio2" value="inActive">
                            <label for="radio2">
                                <p style="color: #EB3F3F;">Ngưng Hiển Thị</p> 
                            </label>
                        </div>
                    </div>
                </div>
                <div class="x_title">
                    <h4>Tuỳ Chọn Dự Án</h4>
                    <span>(Không Bắt Buộc)</span>
                    <div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12"> Tuỳ Chọn Dự Án
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="checkbox checkbox-primary">
                            <input type="checkbox" name="new" id="checkbox1" value="true">
                            <label for="checkbox1">
                                Dự Án Mới
                            </label>
                        </div>
                        <div class="checkbox checkbox-primary">
                            <input type="checkbox" name="hot" id="checkbox2" value="true">
                            <label for="checkbox2">
                                Dự Án HOT
                            </label>
                        </div>
                        <div class="checkbox checkbox-primary">
                            <input type="checkbox" name="noibat" id="checkbox3" value="true">
                            <label for="checkbox3">
                                Dự Án Nổi Bật
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
                    <label class="control-label col-md-2 col-sm-2 col-xs-12"> Tiêu Đề Trang
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input name="txtSeoTitle" value="{{old('txtSeoTitle')}}" type="text" class="form-control">
                        <i>Tiêu đề tùy chỉnh hiển thị trong thẻ tiêu đề cho trang này</i>
                        @if($errors->has('txtSeoTitle'))
                            <p style="color:red; float:left">{{$errors->first('txtSeoTitle')}}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12"> Mô Tả Trang
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input name="txtSeoDescription" value="{{old('txtSeoDescription')}}" type="text" class="form-control">
                        <i>Mô tả META cho trang này. Thao tác này sẽ ghi đè mọi mô tả được tạo tự động</i>
                        @if($errors->has('txtSeoDescription'))
                            <p style="color:red; float:left">{{$errors->first('txtSeoDescription')}}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12"> Từ Khoá (Ngăn Cách Bằng Dấu Phẩy)
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
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
@section('script')
<script>
    $(document).ready(function(){
        $("#tinh").change(function(){
            var provinceid = $(this).val();
            $.get("ajax/district/"+provinceid, function(data){
                $("#huyen").html(data);
            })
        });
    })
</script>
@endsection
@endsection