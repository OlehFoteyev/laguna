@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Обновить данную категорию:</h1>
                <hr>
                {!! Form::model($categories,['method' => 'PATCH','action'=>['CategoryController@update',$categories->id]]) !!}
                <div class="form-group">
                    {!! Form::label('title','Название:') !!}
                    {!! Form::text('title',null,['class'=>'form-control'])  !!}
                </div>

                <div class="form-group">
                    {!!  Form::label('short_description','Описание') !!}
                    {!! Form::textarea('short_description',null,['class'=>'form-control'])  !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Обновить категорию',['class'=>'btn btn-primary form-control']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
@endsection