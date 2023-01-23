<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $title = 'Our Product';
        $Food = DB::table('products')
        ->select('*')
        ->join('cities','products.CitiesID','=','cities.CitiesID')
        ->where((['products.IsDelete' => 0]))
        ->get();
        return view('pages.ourProduct', compact('Food','title'));
    }

    public function index_home()
    {
        $title = 'Home';
        $Food = DB::table('products')
        ->select('*')
        ->join('cities','products.CitiesID','=','cities.CitiesID')
        ->where((['products.IsDelete' => 0]))
        ->simplePaginate(3);
        return view('pages.home', compact('Food', 'title'));
    }

    public function index_about()
    {
        $title = 'About Us';
        $Food = DB::table('products')
        ->select('*')
        ->join('cities','products.CitiesID','=','cities.CitiesID')
        ->where((['products.IsDelete' => 0]))
        ->simplePaginate(3);
        return view('pages.aboutUs', compact('Food','title'));
    }

    public function index_contact()
    {
        $title = 'Contact Us';
        $Food = DB::table('products')
        ->select('*')
        ->join('cities','products.CitiesID','=','cities.CitiesID')
        ->where((['products.IsDelete' => 0]))
        ->simplePaginate(3);
        return view('pages.contactUs', compact('Food','title'));
    }

    public function product_detail($id)
    {
        $title = 'Product Detail';
        $Food = DB::table('products')
        ->select('*')
        ->join('cities','products.CitiesID','=','cities.CitiesID')
        ->where(['products.ProductID' => $id])
        ->get();
        // dd($Food);
        return view('pages.productDetail', compact('Food','title'));
    }
    
    public function create_page(){
        $title = 'Create Product';
        $city = DB::table('cities')->get();
        return view('pages.addProduct',compact('title','city'));
    }

    public function create(Request $request)
    {
        // dd($request);
        $validate = $request->validate([
            'ProductName' => 'required',
            'ProductDescription' => 'required',
            'ProductPrice' => 'required|integer|min:1',
            'ProductImage' => 'required',
        ], []);
        if ($validate) {
            $fileName = $request->file('ProductImage')->getClientOriginalName();
            $path = $request->file('ProductImage')->move('image/products/', $fileName);
            product::create([
                'ProductName' => $request->ProductName,
                'ProductDescription' => $request->ProductDescription,
                'ProductPrice' => $request->ProductPrice,
                'ProductImage' => $fileName,
                'CitiesID' => $request->city,
                'IsDelete' => 0
            ]);
            return redirect()->route('ourproduct');
        }
        return $this->create_page()->withErrors($validate);
    }

    public function edit($id)
    {
        $Food = product::findOrFail($id);
        $title = $Food->ProductName;

        $Food = DB::table('products')
        ->select('*')
        ->join('cities','products.CitiesID','=','cities.CitiesID')
        ->where(['products.ProductID' => $id])
        ->get();
        $city = DB::table('cities')->get();

        return view('pages.editProduct', compact('city','Food','title'));
    }

    public function update(Request $request, $id)
    {
        $Food = product::findOrFail($id);
        $validate = $request->validate([
            'ProductName' => 'required',
            'ProductDescription' => 'required',
            'ProductPrice' => 'required|integer|min:1',
        ], []);
        if ($validate) {
            if ($request->hasFile('ProductImage')) {
                $oldImagePath = public_path() . "\image\products\\" . $Food->ProductImage;
                unlink($oldImagePath);
                Storage::delete($Food->ProductImage);
                $fileName = $request->file('ProductImage')->getClientOriginalName();
                $path = $request->file('ProductImage')->move('image/products/', $fileName);
            } else {
                $fileName = $Food->ProductImage;
            }
            Product::find($id)->update([
                'ProductName' => $request->ProductName,
                'ProductDescription' => $request->ProductDescription,
                'ProductPrice' => $request->ProductPrice,
                'ProductImage' => $fileName,
                'CitiesID' => $request->CitiesID,
                'IsDelete' => 0
            ]);
            return redirect()->route('ourproduct');
        }
        return $this->edit()->withErrors($validate);
    }
    
    public function delete($id)
    {
        Product::find($id)->update([
            // 'ProductName' => $request->ProductName,
            // 'ProductDescription' => $request->ProductDescription,
            // 'ProductPrice' => $request->ProductPrice,
            // 'ProductImage' => $fileName,
            // 'CitiesID' => $request->CitiesID,
            'IsDelete' => 1
        ]);

        DB::table('items')->where('ProductID','=',$id)->delete();

        

        return redirect()->route('ourproduct');
    }
}
