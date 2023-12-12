@extends('layouts.app')
@section('content')
    <div class="container">
        <h6>{{$test}}</h6>
        <form action="{{route('addproduct')}}" method="POST" class="form-control w-50">
            @csrf
            <div class="mb-3">
                <label for="adid" class="label-form">Ürün İsmi</label><br>
                <input type="text" name="ad" id="adid" class="form-control">
            </div>
            <div class="mb-3">
                <label for="hakkindaid" class="label-form">Ürün Hakkında</label><br>
                <textarea name="hakkinda" id="hakkindaid" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label for="fiyatid" class="label-form">Ürün Fiyatı</label>
                <input type="number" name="fiyat"  id="fiyatid" class="form-control">
            </div>
            <div class="mb-3">
                <label for="miktarid" class="label-form">Ürün Miktarı</label>
                <input type="number" name="miktar" id="miktarid" class="form-control">
            </div>
            <div class="mb-3">
                <input type="checkbox" id="isActive" name="isActive" >
            </div>
            <div class="mb-3">
                <button type="submit">Ekle</button>
            </div>
        </form>
    </div>
@endsection
