@extends('layouts.app')
@section('content')
<div class="container">
    <h1>{{$test}}</h1>
    <div class="row">
        @foreach($products as $product)
        <div class="col-3">
                <h5>Ürünün ismi :{{$product->ad}}</h5>
                <h5>Ürünün Fiyatı :{{$product->hakkinda}} </h5>
                <h5>Stok Adedi :{{$product->miktar}}</h5>
                <h5>Stok Adedi :{{$product->fiyat}} TL</h5>
                <br>
            </div>
            @endforeach
    </div>
</div>
@endsection
