<div class="left-sidebar">
    <h2>Каталог</h2>
    <div class="panel-group category-products" id="accordian">
        @foreach(\App\Category::all() as $category)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a href="{{action('CategoryController@index',[$category ->id]) }}">
                            <h3>{{ $category->title }}</h3></a>
                            <p> {{ $category->short_description }}</p>
                            <small> {{ $category->created_at }}</small>
                    </h4>
                </div>
            </div>
        @endforeach
    </div>
</div>