@extends('master')

@section('title', 'Корзина')

@section('content')
    <div class="starter-template">
        <p class="alert alert-success">Added to cart iPhone X 64GB</p>
        <h1>Your Cart</h1>
        <p>Ordering</p>
        <div class="panel">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Count</th>
                    <th>Price</th>
                    <th>Cost</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <a href="http://internet-shop.tmweb.ru/mobiles/iphone_x_64">
                            <img height="56px" src="http://internet-shop.tmweb.ru/storage/products/iphone_x.jpg">
                            iPhone X 64GB
                        </a>
                    </td>
                    <td><span class="badge">1</span>
                        <div class="btn-group form-inline">
                            <form action="http://internet-shop.tmweb.ru/basket/remove/1" method="POST">
                                <button type="submit" class="btn btn-danger" href=""><span
                                        class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                                <input type="hidden" name="_token" value="9w0RqZF33pZvqfWJqv50eTBo4oo17wtUZFsTCsx7">                            </form>
                            <form action="http://internet-shop.tmweb.ru/basket/add/1" method="POST">
                                <button type="submit" class="btn btn-success"
                                        href=""><span
                                        class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                                <input type="hidden" name="_token" value="9w0RqZF33pZvqfWJqv50eTBo4oo17wtUZFsTCsx7">                            </form>
                        </div>
                    </td>
                    <td>71990 ₽</td>
                    <td>71990 ₽</td>
                </tr>
                <tr>
                    <td colspan="3">Full cost:</td>
                    <td>71990 ₽</td>
                </tr>
                </tbody>
            </table>
            <br>
            <div class="btn-group pull-right" role="group">
                <a type="button" class="btn btn-success" href="http://internet-shop.tmweb.ru/basket/place">Place your order</a>
            </div>
        </div>
    </div>
@endsection
