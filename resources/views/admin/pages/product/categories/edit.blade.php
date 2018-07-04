@section('title')
{{trans('action.edit')}} {{trans('general.category')}} | {{trans('general.siteName')}}
@stop
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
    <div class="x_panel">
        <div class="x_title">
            <h2>{{trans('action.edit')}} {{trans('general.category')}}</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br />
            <form method="POST" action="{{route('postEditCategory',['id'=>$category->id])}}" class="form-horizontal form-label-left" enctype="multipart/form-data">
    		  <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">{{trans('general.title')}}
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="txtTitle" value="{{$category->title}}" type="text" class="form-control" required="required">
                        @if($errors->has('txtTitle'))
                            <p style="color:red; float:left">{{$errors->first('txtTitle')}}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">{{trans('general.language')}}
                    </label>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <select name="sltLang" class="form-control">
                            @foreach($languages as $lang)
                            <option value="{{$lang->code}}" @if($category->lang_code==$lang->code) selected @endif>{{$lang->title}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('txtCode'))
                            <p style="color:red; float:left">{{$errors->first('txtCode')}}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">{{trans('general.description')}}</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <textarea name="description" id="ckeditor">{{$category->description}}</textarea>
                        <script>CKEDITOR.replace('ckeditor');</script>
                        @if($errors->has('description'))
                            <p style="color:red; float:left">{{$errors->first('description')}}</p>
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
                            <img src="{{asset('assets/uploads/products/categories')}}/{{$category->image}}" alt="Image preview" style="max-width: 250px; max-height: 250px">
                            <div class="file-tab panel-body">

                                <label class="btn btn-default btn-file">
                                    <span>Browse</span>
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
                        <input value="{{$category->sort}}" name="txtSort" type="number" class="form-control">
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
                            <input type="radio" name="status" id="radio1" value="active" @if($category->status=='active') checked @endif>
                            <label for="radio1">
                                {{trans('general.active')}}
                            </label>
                        </div>
                        <div class="radio radio-primary">
                            <input type="radio" name="status" id="radio2" value="inActive" @if($category->status=='inActive') checked @endif>
                            <label for="radio2">
                                {{trans('general.inActive')}}
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
                        <button type="submit" class="btn btn-success pull-right">{{trans('action.update')}}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
