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
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="col-md-4">
                                            <img src="{{ URL::asset('/images/'.$product->title_img.'.jpg') }}" />
                                </div>
                                <div class="col-md-8">
                                    <a href="{{ action('ProductController@index',$product->id) }}">
                                    <h3>{{ $product->title }}</h3>
                                    </a>
                                    <p>
                                    {{ $product->description }}
                                    </p>
                                    <h4>{{$product->price}} $</h4>
                                    <small>{{ $product->created_at }}</small>
                                </div>
                            </div>
                            <hr>
                            @foreach($products as $pro)
                                <h3>Hello</h3>
                            @endforeach
                        </div>
                    </div><!--features_items-->
                </div>
            </div>
        </div>
    </section>

@endsection