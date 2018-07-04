@section('title')
{{trans('action.addNew')}} {{trans('general.product')}} | {{trans('general.siteName')}}
@stop
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
    <div class="x_panel">
        <div class="x_title">
            <h2>{{trans('action.addNew')}} {{trans('general.product')}}</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br />
            <form method="POST" action="{{route('postAddProduct')}}" class="form-horizontal form-label-left" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">{{trans('general.title')}}
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="txtTitle" value="{{old('txtTitle')}}" type="text" class="form-control" required="required">
                        @if($errors->has('txtTitle'))
                        <p style="color:red; float:left">{{$errors->first('txtTitle')}}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">{{trans('general.language')}}
                    </label>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <select name="sltLang" class="form-control" required="required">
                            <option value="">-----{{trans('general.selectLanguage')}}-----</option>
                            @foreach($languages as $lang)
                            <option value="{{$lang->code}}">{{$lang->title}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('sltLang'))
                        <p style="color:red; float:left">{{$errors->first('sltLang')}}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">{{trans('general.category')}}
                    </label>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <select id="sltCate" name="sltCate" class="form-control" required="required">
                            <option value="">-----{{trans('general.category')}}-----</option>
                            @foreach($categories as $cate)
                            <option value="{{$cate->id}}">{{$cate->title}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('txtCode'))
                        <p style="color:red; float:left">{{$errors->first('txtCode')}}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">{{trans('general.supplier')}}
                    </label>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <select id="sltSupplier" name="sltSupplier" class="form-control" required="required">
                            <option value="">-----{{trans('general.supplier')}}-----</option>
                            @foreach($suppliers as $supplier)
                            <option value="{{$supplier->id}}">{{$supplier->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">{{trans('general.price')}}
                    </label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <input name="txtPrice" value="{{old('txtPrice')}}" type="text" class="form-control">
                        @if($errors->has('txtPrice'))
                        <p style="color:red; float:left">{{$errors->first('txtPrice')}}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">{{trans('general.salePrice')}}
                    </label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <input name="txtSalePrice" value="{{old('txtSalePrice')}}" type="text" class="form-control">
                        @if($errors->has('txtSalePrice'))
                        <p style="color:red; float:left">{{$errors->first('txtSalePrice')}}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">{{trans('general.quantity')}}
                    </label>
                    <div class="col-md-1 col-sm-2 col-xs-6">
                        <input name="txtQty" value="{{old('txtQty')}}" type="number" class="form-control">
                        @if($errors->has('txtQty'))
                        <p style="color:red; float:left">{{$errors->first('txtQty')}}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">{{trans('general.description')}}</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <textarea name="description" class="form-control"></textarea>
                        @if($errors->has('description'))
                        <p style="color:red; float:left">{{$errors->first('description')}}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">{{trans('general.productDetail')}}</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <textarea name="content" id="ckeditor"></textarea>
                        <script>CKEDITOR.replace('ckeditor');</script>
                        @if($errors->has('content'))
                        <p style="color:red; float:left">{{$errors->first('content')}}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">{{trans('general.image')}}</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="imageupload panel panel-default">
                            <div class="panel-heading clearfix">
                                <!-- <h3 class="panel-title pull-left"></h3> -->
                                <div class="btn-group pull-left">
                                    <button type="button" class="btn btn-default active">File</button>
                                    <button type="button" class="btn btn-default">URL</button>
                                </div>
                            </div>
                            <div class="file-tab panel-body">
                                <label class="btn btn-default btn-file">
                                    <span>Browse</span>
                                    <!-- The file is stored here. -->
                                    <input name="image" type="file" name="image-file">
                                </label>
                                <button type="button" class="btn btn-default">Remove</button>
                            </div>
                            <div class="url-tab panel-body">
                                <div class="input-group">
                                    <input name="urlImage" type="text" class="form-control hasclear" placeholder="Image URL">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-default">Submit</button>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-default">Remove</button>
                                <!-- The URL is stored here. -->
                                <input type="hidden" name="image-url">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">{{trans('general.sort')}}
                    </label>
                    <div class="col-md-1 col-sm-1 col-xs-12">
                        <input value="{{old('txtSort')}}" name="txtSort" type="number" class="form-control">
                        @if($errors->has('txtSort'))
                        <p style="color:red; float:left">{{$errors->first('txtSort')}}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">{{trans('general.status')}}
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="radio radio-primary">
                            <input type="radio" name="status" id="radio1" checked value="active">
                            <label for="radio1">
                            {{trans('general.active')}}
                            </label>
                        </div>
                        <div class="radio radio-primary">
                            <input type="radio" name="status" id="radio2" value="inActive">
                            <label for="radio2">
                            {{trans('general.inActive')}}
                            </label>
                        </div>
                    </div>
                    @if($errors->has('status'))
                    <p style="color:red; float:left">{{$errors->first('status')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">{{trans('general.hotProduct')}}
                    </label>
                    <div class="col-md-3 col-sm-3 col-xs-5">
                        <select name="hotProduct" class="form-control">
                            <option value="false">{{trans('general.no')}}</option>
                            <option value="true">{{trans('general.yes')}}</option>
                        </select>
                    </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <button type="submit" class="btn btn-success pull-right">{{trans('action.addNew')}}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@section('script')
<script>
    $(document).ready(function(){
        $("#sltCate").change(function(){
            var category_id = $(this).val();
            $.get("ajax/supplier/"+category_id, function(data){
                $("#sltSupplier").html(data);
            })
        });
        $('.formatPrice').number( true, 0,',','.',);
    })
</script>
@endsection
@endsection