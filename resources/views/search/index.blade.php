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
                        @foreach($products as $product)
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <a href="{{ action('ProductController@index',$product->id) }}">
                                                <h3>{{ $product->title }}</h3>
                                            </a>
                                            <img src="{{ URL::asset('/images/'.$product->title_img.'.jpg') }}" />
                                            {{ $product->description }}
                                            <h4>{{$product->price}} $</h4>
                                            <small>{{ $product->created_at }}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div><!--features_items-->
                    {{ $products->appends(['s' => $s])->links() }}
                </div>

            </div>
        </div>
    </section>
@endsection