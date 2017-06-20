@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row">

            @include('layouts.admin_menu')
        </div>

            <div class="container-fluid">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">

                <h1>Товары:</h1>
            </div>

            <table class="table table-striped">
                <tr>
                    <th>Название</th>
                    <th>Картинка</th>
                    <th>Категория</th>
                    <th>Цена</th>
                    <th>Дата создания</th>
                    <th>Actions</th>
                </tr>
                <a href="{{ action('ProductController@create') }}" class="btn btn-info pull-right">Создать товар</a>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->title }}</td>
                        <td><img src="{{ URL::asset('/images/'.$product->title_img.'.jpg') }}" width="200px" height="200px" /></td>
                        <td>{{ $product->category->title }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->created_at }}</td>
                        <td>
                            <form class="" action="{{ url('admin/product/delete',$product->id) }}" method="post">
                                {{ method_field("DELETE") }}
                               <input type="hidden" name="_method" value="delete">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <a href="{{ action('ProductController@update',$product->id) }}" class="btn btn-primary" >Edit</a>
                                <input type="submit" class="btn btn-danger" onclick="return confirm('Вы действительно хотите это удалить?');" name="name" value="delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
                {{ $products->links() }}
        </div>
        </div>
    </div>
@endsection