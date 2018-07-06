@section('title')
Sửa Sàn Giao Dịch
@stop
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
	<div class="x_panel">
        <div class="x_title">
            <h2>Sửa Sàn Giao Dịch</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br />
            <form method="POST" action="{{route('postEditSanGiaoDich',['slug'=>$sangiaodich->slug])}}" class="form-horizontal form-label-left" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> Tiêu Đề
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="txtTitle" value="{{$sangiaodich->title}}" type="text" class="form-control" required="required">
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
                            <option value="{{$cate->id}}" @if($sangiaodich->cate_id==$cate->id) selected @endif>{{$cate->title}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('sltCate'))
                            <p style="color:red; float:left">{{$errors->first('sltCate')}}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> Tóm Tắt</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea name="summary" class="form-control">{{$sangiaodich->summary}}</textarea>
                        @if($errors->has('summary'))
                            <p style="color:red; float:left">{{$errors->first('summary')}}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> Nội Dung Sàn Giao Dịch </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <textarea name="description" id="ckeditor">{!!$sangiaodich->description!!}</textarea>
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
                            </div>
                            <div class="file-tab panel-body">
                                <label class="btn btn-default btn-file">
                                    <span>Chọn Ảnh</span>
                                    <input name="image" type="file" name="image-file">
                                </label>
                                <button type="button" class="btn btn-default">Xoá</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Sắp Xếp 
                    </label>
                    <div class="col-md-1 col-sm-1 col-xs-12">
                        <input value="{{$sangiaodich->sort}}" name="txtSort" type="number" class="form-control">
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
                            <input type="radio" name="status" id="radio1" value="active"@if($sangiaodich->status=='active') checked @endif>
                            <label for="radio1">
                                Hiển Thị 
                            </label>
                        </div>
                        <div class="radio radio-primary">
                            <input type="radio" name="status" id="radio2" value="inActive"@if($sangiaodich->status=='inActive') checked @endif>
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
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> Tuỳ Chọn Sàn Giao Dịch
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="checkbox checkbox-primary">
                            <input type="checkbox" name="new" id="checkbox1" @if($sangiaodich->new=='true') checked @endif value="true">
                            <label for="checkbox1">
                                Sàn Giao Dịch Mới
                            </label>
                        </div>
                        <div class="checkbox checkbox-primary">
                            <input type="checkbox" name="hot" id="checkbox2" @if($sangiaodich->hot=='true') checked @endif value="true">
                            <label for="checkbox2">
                                Sàn Giao Dịch HOT
                            </label>
                        </div>
                        <div class="checkbox checkbox-primary">
                            <input type="checkbox" name="noibat" id="checkbox3" @if($sangiaodich->noibat=='true') checked @endif value="true">
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
                        <input name="txtSeoTitle" value="{{$dataSEO['title']}}" type="text" class="form-control">
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
                        <input name="txtSeoDescription" value="{{$dataSEO['description']}}" type="text" class="form-control">
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
                        <input name="txtSeoKeywords" value="{{$dataSEO['keywords']}}" type="text" class="form-control">
                        <i>Danh sách các từ khóa quan trọng nhất được phân cách bằng dấu phẩy cho trang này sẽ được viết dưới dạng từ khóa META</i>
                        @if($errors->has('txtSeoKeywords'))
                            <p style="color:red; float:left">{{$errors->first('txtSeoKeywords')}}</p>
                        @endif
                    </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <button type="submit" class="btn btn-success pull-right">Cập Nhật</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection