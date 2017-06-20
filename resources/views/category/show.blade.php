@extends('layouts.main')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Категории:</h1>
        </div>

        <table class="table table-striped">
            <thead>
            <tr>
                <th>Название </th>
                <th>Описание </th>
                <th>Количество товаров</th>
                <th>Дата создания</th>
                <th>Actions</th>
            </tr>
            </thead>
            <a href="{{ action('CategoryController@create') }}" class="btn btn-primary pull-right">Создать категорию</a><br><br>

            <tbody>
            @foreach($categories as $category)
                <tr class="id{{ $category->id }}">
                    <td>{{ $category->title }}</td>
                    <td>{{ $category->short_description }}</td>
                    <td></td>
                    <td>{{ $category->created_at }}</td>
                    <td>


                        <form class="" action="{{ url('admin/category/delete',$category->id) }}" method="post">
                            <input type="hidden" name="_method" value="delete">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <a href="{{ action('CategoryController@update',$category->id) }}" class="btn btn-primary" >Edit</a>
                            <input type="submit" class="btn btn-danger" onclick="return confirm('Вы действительно хотите это удалить?');" name="name" value="delete">
                        </form>

                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</div>
@endsection