<div class="headline">
    <a href="#">
        <h3 class="text-white text-center bg-black">{{$category->name}}</h3>
    </a>
    <ul class="products">
        @foreach($list_product as $product)
        <li>
            <div class="product-item">
                <div class="product-top">
                    <a href="#" class="product-thumb">
                        <img src="{{asset('images/products/'.$product->image)}}" alt="">
                    </a>
                    <a href="#" class="buy-now">Mua ngay</a>
                </div>
                <div class="product-infor">
                    <a href="#" class="product-cat">{{$product->brand_id}}</a>
                    <a href="#" class="product-name">{{ $product->name }}</a>
                    {{-- <div class="product-pride">{{$product->price}}</div>
                    <div class="product-pride_sale">{{$product->price_sale}}</div> --}}
                    <div class="product-pride_sale text-decoration-line-through">{{ $product->price }}.000₫</div>
                    <div class="product-pride px-2"><strong>{{ $product->price_sale }}.000₫</strong></div>
                </div>
            </div>
        </li>
        @endforeach
</ul>
</div>