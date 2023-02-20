<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">


        </div>
        <img src="https://content.rozetka.com.ua/goods/images/big/284957985.jpg" alt="iPhone X 64GB">
        <div class="caption">
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->price }} uah</p>
            {{ $product->category->name }}
            <p>
            <form action="{{ route('basket-add', $product->id) }}" method="POST">
                <button type="submit" class="btn btn-success" role="button">В корзину</button>
                <a href="{{ route('product', [$product->category->code, $product->code]) }}"
                   class="btn btn-default"
                   role="button">Подробнее</a>
                @csrf
            </form>
            </p>
        </div>
    </div>
</div>
