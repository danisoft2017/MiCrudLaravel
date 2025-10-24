<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $item=Clientes::paginate(2);
        return view('modules/clientes/index',compact('item'));
    }

    public function create()
    {
        return view('modules/clientes/create');
    }

    public function store(Request $request)
    {
        $item=new Clientes();
        $item->nombre=$request->input('nombre');
        $item->email=$request->input('email');
        $item->telefono=$request->input('telefono');
        
        $item->activo=($request->boolean('activo'));
        $item->save();
        return redirect()->route('index');
    }

    public function show(string $id)
    {
        $item=Clientes::find($id);
        return view('modules/Clientes/show',compact('item'));
    }

    public function edit(string $id)
    {
        $item=Clientes::find($id);
        return view('modules/Clientes/edit',compact('item'));
    }

    public function update(Request $request, string $id)
    {
        $item=Clientes::find($id);
        $item->nombre=$request->input('nombre');
        $item->email=$request->input('email');
        $item->telefono=$request->input('telefono');
        $item->activo=($request->boolean('activo'));
        $item->save();
        return redirect()->route('index');
    }

    public function destroy(string $id)
    {
        $item=Clientes::find($id);
        $item->delete();
        return redirect()->route('index');
    }
}
