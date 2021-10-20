@extends('master')
@section('content')
    <!-- CONTAINER CUSTOM-PRODUCT  -->
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="detail-img" src="{{ $product['gallery'] }}">
            </div>
            <div class="col-sm-6">
                <a href="/">Retour</a>
                <h2>Name: {{ $product['name'] }}</h2>
                <h3>Price: {{ $product['price'] }}$</h3>
                <h4>Details: {{ $product['description'] }}</h4>
                <h4>Category: {{ $product['category'] }}</h5>
                    <br><br>
                    <form action="/add_to_cart" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$product['id']}}">
                        <button class="btn btn-primary">Add to cart</button>
                    </form>
                    <br><br>
                    <button class="btn btn-success">Buy now</button>
            </div>
        </div>
    </div>
@endsection
