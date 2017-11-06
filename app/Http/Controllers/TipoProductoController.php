<?php

namespace parcial2\Http\Controllers;

use Illuminate\Http\Request;

use parcial2\Http\Requests\TipoProductoFormRequest;
use parcial2\TipoProducto;
use DB;

class TipoProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tproductos=TipoProducto::all();
        return view('almacen.categorias.index',compact('tproductos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('almacen.categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TipoProductoFormRequest $request)
    {
        TipoProducto::create($request->all());
        return redirect()->route('categorias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tproducto=TipoProducto::findOrFail($id);
        return view('almacen.categorias.show',compact('tproducto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tproducto=TipoProducto::findOrFail($id);
        return view('almacen.categorias.edit',compact('tproducto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TipoProductoFormRequest $request, $id)
    {
        TipoProducto::findOrFail($id)->update($request->all());
        return redirect()->route('categorias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TipoProducto::findOrFail($id)->delete();
        return redirect()->route('categorias.index');    
    }
}
