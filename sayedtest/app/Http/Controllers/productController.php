<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class productController extends Controller
{
    public function index()
    {
        return view('productsList', [
            'products' => product::all()
        ]);
    }

    public function create()
    {
        return view('product.add');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',

        ]);


        product::create($formFields);

        return redirect('/')->with('message', 'product created successfully!');
    }

    public function edit(product $product)
    {
        return view('product.edit', ['product' => $product]);
    }

    public function update(Request $request, product $product) {
      
        
        $formFields = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

      

        $product->update($formFields);

        return back()->with('message', 'product updated successfully!');
    }

    public function destroy(product $product) {
       
        
        $product->delete();
        return redirect('/')->with('message', 'product deleted successfully');
    }



}
