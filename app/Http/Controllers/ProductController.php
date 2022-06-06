<?php

namespace App\Http\Controllers;
use App\Product;
use App\Status;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $product=Product::all();
        return view('product.index',compact('product')) ; 
    }
    public function create(){
        $status=Status::all();
        return view('product.create',compact('status')) ; 
    }
    public function createProduct(Request $request){
   
        Product::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'color'=>$request->color,
            'status_id'=>$request->status_id
        ]);
        return redirect('/product') ; 
    }

    public function updateProduct($id){
        $cari=Product::find($id);
        $status=Status::all();
        return view('product.update',compact('cari','status')) ; 
    }
    public function update(Request $request,$id){
        $cari=Product::find($id);
        $cari->update($request->all());
        return redirect('/product'); 
    }

    public function delete($id){
        $delete=Product::find($id);
        $delete->delete();
        return redirect('/product'); 
    }

    public function showProduct($id){
        $show=Product::find($id);
        return view('product.show',compact('show')) ; 
    }
}
