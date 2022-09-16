<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Carbon\Carbon;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{

    public function add_product_form()
    {
       $levels = Category::get();
    //    dd($levels);
      return view('admin.pages.product.create')->with(compact('levels'));
    }
    public function addproduct(Request $request)
    {
        $request->validate([
            'tittle' => 'required',
            'cost' => 'required',
            'unit_price' => 'required',
            'sale_price' => 'required',
            'purchase_price' => 'required',
            'unit' => 'required',
            'discrption' => 'required',
            'category_id' => 'required',
        ]);

        $product = new Product([
            'tittle' => $request->get('tittle'),
            'cost' => $request->get('cost'),
            'unit_price' => $request->get('unit_price'),
            'sale_price' => $request->get('sale_price'),
            'purchase_price' => $request->get('purchase_price'),
            'unit' => $request->get('unit'),
            'category_id' => $request->get('category_id'),
            'discrption' => $request->get('discrption'),
        ]);
// dd($product);
        $product->save();
        return redirect('/product-list')->with('message', 'Product has been added');
    }
    public function productlist()
    {
        // $product = Product::paginate(1);
       $product= DB::table('products')->paginate(2);
        return view('admin.pages.product.list', compact('product'));
    }
    public function editproduct(Request $request, $id)
    {
        $product= Product::find($id);
        return view('admin.pages.product.edit', compact('product'));
    }
    public function updateproduct(Request $request, $id)
    {
        $product = Product::find($id);
        $product->tittle= $request->get('tittle');
        $product->cost = $request->get('cost');
        $product->unit_price = $request->get('unit_price');
        $product->sale_price= $request->get('sale_price');
        $product->purchase_price = $request->get('purchase_price');
        $product->unit = $request->get('unit');
        $product->category_id = $request->get('category_id');
        $product->discrption = $request->get('discrption');
        $product->update();
        return redirect('/product-list')->with('info', 'Admins updated successfully');
    }

     public function deleteproduct($id)
     {
         Product::find($id)->delete();
         return back();
     }
     public function product_detail(Request $request){
        $id = $request->id;
        $product=  Product::find($id);
        echo view('admin.pages.product.view', compact('product'));
    }

}
