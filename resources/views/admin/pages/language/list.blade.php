@section('title')
{{trans('general.languages')}}
@stop
@extends('admin.general.master')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>{{trans('general.languages')}}</h2>
                <a class="btn btn-primary pull-right" href="{{route('getAddLanguage')}}" >{{trans('action.addNew')}}</a>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table class="table table-bordered">
                    <thead>
                        <tr class="center">
                            <th>{{trans('general.language')}}</th>
                            <th>{{trans('general.code')}}</th>
                            <th>{{trans('general.status')}}</th>
                            <th>{{trans('general.sort')}}</th>
                            <th>{{trans('general.image')}}</th>   
                            <th>{{trans('action.action')}}</th>    
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($languages as $lang)
                        <tr class="center">
                            <td>{{$lang->title}}</td>
                            <td>{{$lang->code}}</td>
                            <td style="width: 12%; font-size: 25px">
                                <?php  
                                    if($lang->status=='active')
                                    {
                                        echo "<i style='color: #2272EB' class='fa fa-check-circle'></i>";
                                    }
                                    if($lang->status=='inActive')
                                    {
                                        echo "<i style='color: red' class='fa fa-ban'></i>";
                                    }
                                ?>
                            </td>
                            <td>{{$lang->sort}}</td>
                            <td style="width: 10%"><img width="40" src="{{asset('uploads/icons')}}/{{$lang->image}}" alt=""></td>
                            <td class="center" style="width: 12%">
                                <a href="{{route('getEditLanguage',['id'=>$lang->id])}}" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
                                <a onclick="return alertMsg('{{route('getDeleteLanguage',['id'=>$lang->id])}}','{{trans('general.msgDelete')}}');" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    <!-- /page content -->
@endsection 