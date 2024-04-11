<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProduct()
    {
        $products = Product::all();
        return view('backend.pages.product.showProduct', compact('products'));
    }

    public function addProduct()
    {
        return view('backend.pages.product.addProduct');
    }


    public function storeProduct(Request $request)
    {
        try {
            $storeProducts = new Product();
            $storeProducts->name = $request->name;
            $storeProducts->price = $request->price;

            if ($request->hasFile('product_image')) {
                $image = $request->file('product_image');
                $image_new_name = time() . $image->getClientOriginalName();
                $image->move(public_path('/images/product_images/'), $image_new_name);
                $storeProducts->image = '/images/product_images/' . $image_new_name;
            }
            $storeProducts->save();
            return back()->with('success', 'Successfully added product');
        } catch (\Throwable $th) {
            return back()->with('error', 'Error while adding products');
        }
    }

    public function editProduct($id)
    {
        $editProducts = Product::find($id);
        return view('backend.pages.product.editProduct', compact('editProducts'));
    }


    public function updateProduct(Request $request, $id)
    {
        try {
            $updateProduct = Product::find($id);
            $updateProduct->name = $request->name;
            $updateProduct->price = $request->price;

            if ($request->hasFile('product_image')) {
                $image = $request->file('product_image');
                $image_new_name = time() . $image->getClientOriginalName();
                $image->move(public_path('/images/product_images/'), $image_new_name);
                $updateProduct->image = '/images/product_images/' . $image_new_name;
            }
            $updateProduct->update();
            return redirect()->route('show.product')->with('success', 'Successfully added product');
        } catch (\Throwable $th) {
            return back()->with('error', 'Error while adding products');
        }
    }

    public function deleteProduct($id)
    {
        try {
            $deleteProduct = Product::find($id);
            $deleteProduct->delete();
            return back()->with('success', 'Successfully deleted product');
        } catch (\Throwable $th) {
            return back()->with('error', 'Error while deleting images.');
        }
    }
}
