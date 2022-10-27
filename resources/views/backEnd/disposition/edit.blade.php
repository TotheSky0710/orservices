@extends('backLayout.app')
@section('title')
    Edit Disposition : {{ $disposition->name }}
@stop

@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Edit Disposition: {{ $disposition->name }} </h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    {!! Form::model($disposition, ['method' => 'PATCH', 'url' => ['dispositions', $disposition->id], 'class' => 'form-horizontal']) !!}
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        {!! Form::label('name', 'Name', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            {!! Form::submit('Update', ['class' => 'btn btn-success']) !!}
                            <a href="{{ route('dispositions.index') }}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
