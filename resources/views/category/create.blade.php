@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Создать категорию</h1>
                <hr>
                {!! Form::open(['url' => 'admin/category']) !!}
                <div class="form-group">
                    {!! Form::label('title','Название:') !!}
                    {!! Form::text('title',null,['class'=>'form-control'])  !!}
                </div>

                <div class="form-group">
                    {!!  Form::label('short_description','Описание') !!}
                    {!! Form::textarea('short_description',null,['class'=>'form-control'])  !!}
                </div>

                {{--<div class="form-group">
                    {!!  Form::label('created_at','Дата создания') !!}
                    {!! Form::input('date','created_at',null,['class'=>'form-control'])  !!}
                </div>--}}


                <div class="form-group">
                    {!! Form::submit('Добавить категорию',['class'=>'btn btn-primary form-control']) !!}
                </div>
                {!! Form::close() !!}
                @include('layouts.errors')
                {{--<form class="" action="#--}}{{--{{ action('Category.store',$category->id) }}--}}{{--">
                {{ csrf_field() }}
                    <div class="form-group{{ ($error->has('title'))? 'title':'' }}">
                        <input type="text" name="title" class="form-control" placeholder="Напишите название категории">
                        {!! $errors->first('title','<p class="help-block">:message</p>') !!}
                    </div>

                    <div class="form-group{{ ($error->has('description'))? 'title':'' }}">
                        <input type="text" name="description" class="form-control" placeholder="Напишите описание категории">
                        {!! $errors->first('description','<p class="help-block">:message</p>') !!}
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary " value="Сохранить">
                    </div>
                </form>--}}
            </div>
    </div>
@endsection