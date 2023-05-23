<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index()
    {
        $products = Product::paginate();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request ->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required',
            'imagen' => 'required|image|mimes:jpg,png|max:2048'
        ]);

        $product = new Product;
        $product->name = $request->name;
        $product->descripcion = $request->descripcion;
        $product->categoria = $request->categoria;
        
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $imagenName = time().'.'.$imagen->getClientOriginalExtension();
            $imagen->move(public_path('images'), $imagenName);
            $product->imagen = $imagenName;
           
        }else{
            echo "Error al cargar la imagen";
        }
        $product->save();
         return redirect()->route('products.index');
    }

    public function show($id)
    {
        $products = Product::find($id); 
        return view('products.show', compact('products'));
    }

    public function edit(string $id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $request ->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required',
            'imagen' => 'required|image|mimes:jpg,png|max:2048'
        ]);

        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->descripcion = $request->input('descripcion');
        $product->categoria = $request->input('categoria');

        // Guardar la imagen si se ha proporcionado
        if ($request->hasFile('imagen')) {
            $imagenName = time().'.'.$request->file('imagen')->getClientOriginalExtension();
            $request->file('imagen')->move(public_path('images'), $imagenName);
            $product->imagen = $imagenName;
        }

        $product->save();

        return redirect()->route('products.show', $product->id)->with('success', 'Producto actualizado correctamente.');
    }

    public function destroy(string $id)
    {
        $products = Product::find($id);
        $imagePath = public_path('images/' . $products->imagen);

        if (file_exists($imagePath)) {
            unlink($imagePath); 
        }
        $products->delete();
        return redirect()->route('products.index')->with('success', 'Producto eliminado correctamente.');;
    }
}
