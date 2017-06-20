@extends('layouts.main')

@section('content')
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    @include('layouts.categoties')
                </div>
                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Популярные товары</h2>
                        <h3>Сортировать</h3>

                        <a href="{{ action('ProductController@sortByProductsDesc') }}">По названию</a><br>
                        По цене
                        <a href="{{ action('ProductController@sortByPriceAsc') }}">По возростанию</a>
                        <a href="{{ action('ProductController@sortByPriceDesc') }}">По убыванию</a><br>
                        <a href="/">Сбросить</a>
                        <hr>

                        @foreach($products as $product)
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{ URL::asset('/images/'.$product->title_img.'.jpg') }}" />
                                            <h2>{{$product->price}} $</h2>
                                            <p>
                                                <a href="{{action('ProductController@index',$product->id)}}">
                                                    {{ $product->title }}
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div><!--features_items-->
                    {{ $products->links() }}
                </div>

            </div>
        </div>
    </section>
@endsection