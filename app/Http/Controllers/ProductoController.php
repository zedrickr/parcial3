<?php

namespace parcial2\Http\Controllers;

use Illuminate\Http\Request;
use parcial2\Http\Requests\ProductoFormRequest;
use parcial2\Producto;
use parcial2\TipoProducto;

use DB;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $productos=Producto::all();
        return view('almacen.productos.index',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tproductos=TipoProducto::all();
        return view('almacen.productos.create',compact('tproductos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductoFormRequest $request)
    {
        Producto::create($request->all());
        return redirect()->route('productos.index');    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          $producto=Producto::findOrFail($id);
        return view('almacen.productos.show',compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto=Producto::findOrFail($id);
        $tproductos=TipoProducto::all();
        return view('almacen.productos.edit',compact('producto','tproductos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductoFormRequest $request, $id)
    {
        Producto::findOrFail($id)->update($request->all());
        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Producto::findOrFail($id)->delete();
        return redirect()->route('productos.index');  
    }
}
