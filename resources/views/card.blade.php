<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">
        </div>
        <img src="http://internet-shop.tmweb.ru/storage/products/iphone_x.jpg" alt="iPhone X 64GB">
        <div class="caption">
            <h3>iPhone X 64GB</h3>
            <p>71990 ₽</p>
            <p>
                <a href="{{route('basket')}}" class="btn btn-primary"
                   role="button">В корзину</a>
                @isset($category)
                    {{$category->name}}
                @endisset
                <a href="" class="btn btn-default"
                   role="button">Подробнее</a>
        </div>
    </div>
</div>
