@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.buildings.title')</h3>

    <form action="{{route('building.update',['building_id'=>$building->id])}}" method="post">
        {{csrf_field()}}
        <div class="panel panel-default">
            <div class="panel-heading">
                @lang('quickadmin.qa_edit')
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="" class="control-label">@lang('quickadmin.buildings.fields.name')
                            <input type="text" name="building_name" class="form-control"
                                   value="{{$building->building_name}}">
                        </label>
                        @if($errors->has('building_name'))
                            <p class="help-block">
                                {{ $errors->first('building_name') }}
                            </p>
                        @endif
                    </div>
                </div>

            </div>
        </div>
        {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </form>


    {{--    {!! Form::open(['method' => 'POST', 'route' => ['category.update', ['category_id'=>$category->id]]]) !!}--}}
    {{--    {{csrf_field()}}--}}


    {{--                    {!! Form::label('category_name', trans('quickadmin.categories.fields.name').'', ['class' => 'control-label']) !!}--}}
    {{--                    {!! Form::text('category_name', old('category_name'), ['class' => 'form-control', 'value' => '']) !!}--}}
    {{--                    <label for="" class="control-label">Название категории--}}
    {{--                        <input type="text" name="category_name" class="form-control" value="{{$category->category_name}}">--}}
    {{--                    </label>--}}
    {{--                    <p class="help-block"></p>--}}




@endsection
