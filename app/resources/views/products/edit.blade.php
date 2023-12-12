@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="/edit/product/{{$products->id}}" method="POST" class="form-control w-50">
            @csrf
            <div class="mb-3">
                <label for="adid" class="label-form">Ürün İsmi</label><br>
                <input type="text" name="ad" id="adid" class="form-control" value="{{$products->ad}}">
            </div>
            <div class="mb-3">
                <label for="hakkindaid" class="label-form">Ürün Hakkında</label><br>
                <textarea name="hakkinda" id="hakkindaid" cols="30" rows="10" class="form-control">{{$products->hakkinda}}</textarea>
            </div>
            <div class="mb-3">
                <label for="fiyatid" class="label-form">Ürün Fiyatı</label>
                <input type="number" name="fiyat"  id="fiyatid" class="form-control" value="{{$products->fiyat}}">
            </div>
            <div class="mb-3">
                <label for="miktarid" class="label-form">Ürün Miktarı</label>
                <input type="number" name="miktar" id="miktarid" class="form-control" value="{{$products->miktar}}">
            </div>
            <div class="mb-3">
                <input type="checkbox" id="isActive" name="isActive" {{$products->isActive ? 'checked' : ''}}  >
                @if ($products->isActive)
                    <label >Yayından Kaldır</label>

                @else
                <label >Yayınla</label>

                @endif
            </div>
            <div class="mb-3">
                <button type="submit">Güncelle</button>
            </div>
        </form>
    </div>
@endsection
