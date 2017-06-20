@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Обновить товар:</h1>
                <hr>
                {!! Form::model($products,['method'=>'PATCH','action'=>['ProductController@update',$products->id]]) !!}
                <div class="form-group">
                    {!! Form::text('title',null,['class'=>'form-control','placeholder'=>'Название товара']) !!}
                </div>

                <div class="form-group">
                    {!! Form::textarea('description',null,['class'=>'form-control','placeholder'=>'Описание товара']) !!}
                </div>

                <div class="form-group">
                    {!! Form::text('title_img',null,['class'=>'form-control','placeholder'=>'Название картинки']) !!}
                </div>

                <div class="form-group">
                    {!! Form::text('price',null,['class'=>'form-control','placeholder'=> 'Цена товара']) !!}
                </div>

                <div class="form-group">
                    {!! Form::select('category_id',['1'=>'Техника для кухни','2'=>'Техника для дома',
                    '3'=>'Видео техника','4'=>'Смартфоны','5'=>'Компьютеры и ноутбуки'],null,['placeholder' => 'Выберите категорию']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Обновить',['class'=>'btn btn-primary form-control']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
@endsection