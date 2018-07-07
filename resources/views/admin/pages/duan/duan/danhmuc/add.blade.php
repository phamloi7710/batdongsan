@section('title')
Thêm Mới Danh Mục Dự Án
@stop
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
	<div class="x_panel">
        <div class="x_title">
            <h2>Thêm Mới Danh Mục Dự Án </h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br />
            <form method="POST" action="{{route('postAddDanhMucDuAn')}}" class="form-horizontal form-label-left">
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
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> Mô Tả </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <textarea name="description" id="ckeditor"></textarea>
                        <script>CKEDITOR.replace('ckeditor');</script>
                        @if($errors->has('description'))
                            <p style="color:red; float:left">{{$errors->first('description')}}</p>
                        @endif
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