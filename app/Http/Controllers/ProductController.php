<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Product::orderBy('category_id')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validacion del producto
        $validate = Validator::make($request->all(),[
            'name' => 'required|min:5|max:25',
            'description' => 'required|min:5|max:255',
            'price'=> 'required|regex:/^\d*(.\d{2})?$/|numeric|gt:0',
            'stock'=> 'required',
            'codProduct'=> 'required|unique:products',
            'image'=>'required',
            'category_id'=>'required'
        ]);
        //Si falla retornara un error
        if($validate->fails()){
            return response()->json([
                'status' => 0,
                'errors' => $validate->errors()
            ]);
        }
        //Creacion del producto
        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'codProduct' => $request->codProduct,
            'image'=> $request->image,
            'category_id'=> $request->category_id

        ]);

        return response()->json([
            'status' => 1,
            'product'=> $product
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    public function show1($id)
    {
        return Product::where('id',$id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Validacion de la actualizacion
        $validate = Validator::make($request->all(),[

            'name' => 'required|min:5|max:25',
            'description' => 'required|min:5|max:255',
            'price'=> 'required|regex:/^\d*(.\d{2})?$/|numeric|gt:0', 
            'stock'=> 'required',
            'image'=>'required',
            'category_id'=>'required'

        ]);
        //Si falla retorna un error
        if($validate->fails()){
            return response()->json([
                'status' => 0,
                'errors' => $validate->errors()
            ]);
        }

        $product=Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->image = $request->image;
        $product->category_id = $request->category_id;
        $product->save();

        return response()->json([
            'status' => 1,
            'product'=> $product
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json([
            'status' => 1
        ]);
    }
}
