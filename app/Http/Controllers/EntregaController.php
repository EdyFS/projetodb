<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrega;
use App\Models\Cliente;
use App\Models\Motorista;
use App\Models\Carga;

class EntregaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entrega = Entrega::with('cliente')->with('motorista')->with('carga')->get();
        //Encadear o método WITH CASO tenha relacionamento com mais de uma model
        //Exemplo:
        //$produto = Produto::with('categoria')->with('vendedor')->get();
        return view('entrega.index', compact('entrega'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$entrega = Entrega::all();
        $cliente = Cliente::all();
        $motorista = Motorista::all();
        $carga = Carga::all();
        return view('entrega.create', compact(/*'entrega'*/ 'cliente', 'motorista','carga'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Entrega::create($request->all());
        return redirect('/entrega');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $entrega = Entrega::with('cliente')->with('motorista')->with('carga')->findOrFail($id);
        //Encadear o método WITH CASO tenha relacionamento com mais de uma model
        //Exemplo:
        //$produto = Produto::with('categoria')->with('vendedor')->findOrFail($id);
        return view('entrega.show', compact('entrega'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produto = Entrega::with('cliente')->with('motorista')->with('carga')->findOrFail($id);
        //Encadear o método WITH CASO tenha relacionamento com mais de uma model
        //Exemplo:
        //$produto = Produto::with('categoria')->with('vendedor')->findOrFail($id);
        $cliente = Cliente::all();
        $motorista = Motorista::all();
        $carga = Carga::all();
        return view('entrega.edit', compact('entrega', 'cliente', 'motorista', 'carga'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $entrega = Entrega::findOrFail($id);
        $entrega->update($request->all());
        return redirect('/entrega');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $entrega = Entrega::findOrFail($id);
        $entrega->delete();
        return redirect('/entrega');
    }
}
