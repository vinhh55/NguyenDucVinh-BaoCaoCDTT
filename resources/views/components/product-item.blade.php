<div class="headline">
    {{-- <a href="#">
        <h3 class="text-white text-center bg-black"></h3>
    </a> --}}
    <ul class="products">
        <li>
            <div class="product-item">
                <div class="product-top">
                    <a href="#" class="product-thumb">
                        <img style="w-600" src="{{asset('images/products/'.$product->image)}}" alt="">
                    </a>
                    <a href="#" class="buy-now">Mua ngay</a>
                </div>
                <div class="product-infor">
                    <a href="#" class="product-cat">{{$product->brand_id}}</a>
                    <a href="#" class="product-name">{{ $product->name }}</a>
                    <div class="product-pride">{{$product->price}}</div>
                </div>
            </div>
        </li>
</ul>
</div>