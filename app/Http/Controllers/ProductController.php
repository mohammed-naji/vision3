<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('price', 'DESC')->simplePaginate(2);
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create')->with('product', new Product());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5',
            'price' => 'required|numeric',
            'description' => 'required|max:500',
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'category_id' => 'required',
        ]);

        // upload the files
        $ex = $request->file('image')->getClientOriginalExtension();
        $new_name = 'product_'.time().'_'.rand().'.'.$ex;
        $request->file('image')->move(public_path('uploads/products/'), $new_name);

        $album_names = [];
        if($request->hasFile('album')) {
            foreach($request->file('album') as $item) {
                $ex = $item->getClientOriginalExtension();
                $album_name = 'product_'.time().'_'.rand(0000000000000,9999999999999).'_'.rand(0000000000000,9999999999999).'.'.$ex;
                $album_names[] = $album_name;
                $item->move(public_path('uploads/products/'), $album_name);
            }
        }
        $album_names = implode('|', $album_names);


        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'discount' => $request->discount,
            'discount_end_at' => $request->discount_end_at,
            'image' => $new_name,
            'album' => $album_names,
            'rating' => $request->rating,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('products.index')
                ->with('msg', 'تمت اضافة المنتج بسلام')
                ->with('type', 'success');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'ffff';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        // dd($product);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:5',
            'price' => 'required|numeric',
            'description' => 'required|max:500',
            'image' => 'image|mimes:png,jpg,jpeg',
            'category_id' => 'required',
        ]);

        $product = Product::findOrFail($id);
        $new_name = $product->image;
        $album_names = $product->album;

        if($request->hasFile('image')) {
            // upload the files
            $ex = $request->file('image')->getClientOriginalExtension();
            $new_name = 'product_'.time().'_'.rand().'.'.$ex;
            $request->file('image')->move(public_path('uploads/products/'), $new_name);
        }


        if($request->hasFile('album')) {
            $album_names = [];
            foreach($request->file('album') as $item) {
                $ex = $item->getClientOriginalExtension();
                $album_name = 'product_'.time().'_'.rand(0000000000000,9999999999999).'_'.rand(0000000000000,9999999999999).'.'.$ex;
                $album_names[] = $album_name;
                $item->move(public_path('uploads/products/'), $album_name);
            }
            $album_names = implode('|', $album_names);
        }

        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'discount' => $request->discount,
            'discount_end_at' => $request->discount_end_at,
            'image' => $new_name,
            'album' => $album_names,
            'rating' => $request->rating,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('products.index')
                ->with('msg', 'تمت تعديل المنتج بسلام')
                ->with('type', 'info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Product::destroy($id);
        Product::findOrFail($id)->delete();
        return redirect()->route('products.index')
                ->with('msg', 'تمت حذف المنتج بسلام')
                ->with('type', 'danger');
    }
}
