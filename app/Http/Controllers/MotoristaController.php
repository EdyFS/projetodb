<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motorista;

class MotoristaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $motorista = Motorista::all();
        return view("motorista.index", compact('motorista'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("motorista.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Motorista::create($request->all());
        return redirect("/motorista");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $motorista = Motorista ::findOrFail($id);
        return view("motorista.show", compact('motorista'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $motorista = Motorista ::findOrFail($id);
        return view("motorista.edit", compact('motorista'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cliente = Motorista ::findOrFail($id);
        $cliente->update($request->all());
        return redirect("/motorista");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $motorista = Motorista::findOrFail($id);
        $motorista->delete();
        return redirect("/motorista");
    }
}
