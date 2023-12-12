<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class testController extends Controller
{

    //anasayfa
    public function index()
    {
        $test = 'test';

        return view('index', compact('test'));
    }

    //product
    public function product()
    {
        $test = 'Ürünler Sayfası';
        $products = Product::where('isActive', 1)->get();
        return view('products.product', compact('test', 'products'));
    }

    public function adminpanel()
    {
        $test = 'Admin Panel';
        $products = Product::get();
        return view('products.adminpanel', compact('test', 'products'));
    }

    public function addproduct()
    {
        $test = 'Ürün Ekleme Sayfası';
        return view('products.addproduct', compact('test'));
    }

    public function createProduct(Request $request)
    {
        $products = new Product;
        $products->ad = $request->get('ad');
        $products->hakkinda = $request->get('hakkinda');
        $products->fiyat = $request->get('fiyat');
        $products->miktar = $request->get('miktar');
        $products->isActive = $request->boolean('isActive');
        $products->save();

        return redirect()->route('adminpanel');
    }

    public function edit(Request $request, $id)
    {
        $products = Product::find($id);
        return view('products.edit', compact('products'));
    }

    public function update(Request $request, $id){
        $products = Product::find($id);
        $products->ad = $request->get('ad');
        $products->hakkinda = $request->get('hakkinda');
        $products->fiyat = $request->get('fiyat');
        $products->miktar = $request->get('miktar');
        $products->isActive = $request->boolean('isActive');
        $products->save();

        return redirect()->route('adminpanel');

    }

    public function destroy($id){
        $products = Product::find($id);
        $products->delete($id);

        return redirect()->route('adminpanel');

    }
}
