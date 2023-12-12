@extends('layouts.app')
@section('content')
    <div class="container">
        <h5>{{ $test }}</h5>

        <div class="row">
            <div class="col-2">
                <div class="btn  btn-success"> <a class="text-decoration-none text-white" href="{{ route('addproduct') }}">Ürün
                        Ekle</a>
                </div>
            </div>
            <div class="col-10">
                <table class="table bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Ürün İsmi</th>
                            <th>Ürün Hakkında</th>
                            <th>Ürün Fiyatı</th>
                            <th>Ürün Miktarı</th>
                            <th>Onay Bilgisi</th>
                            <th>Güncelle</th>
                            <th>Sil</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $item)
                            <tr>
                                <td>
                                    {{ $item->id }}
                                </td>
                                <td>
                                    {{ $item->ad }}</td>
                                <td>
                                    {{ $item->hakkinda }}
                                </td>
                                <td> {{ $item->fiyat }}
                                </td>
                                <td>
                                    {{ $item->miktar }}
                                </td>
                                <td> {{ $item->isActive }}</td>
                                <td> <button type="submit" class="btn btn-warning"><a class="text-decoration-none text-black"
                                            href="/edit/product/{{ $item->id }}"
                                            onclick="return confrim('İşlemi yapmak istediğinizden eminmisiniz ?')">Update</a></button>
                                </td>
                                <td><button type="submit" class="btn btn-danger"><a class="text-decoration-none text-black"
                                            href="{{ route('deleteproduct', ['id' => $item->id]) }}"
                                            onclick="deleteProduct({{ $item->id }})">Delete</a></button>
                                </td>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>


        <script>
            function deleteProduct(id) {
                let soru = confirm('Silinsin mi?')
                if (soru) {
                    return true;
                } else {
                    event.preventDefault();
                }
            }
        </script>
    @endsection
