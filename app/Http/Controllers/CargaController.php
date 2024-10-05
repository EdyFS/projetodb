<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carga;

class CargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carga = Carga::all();
        return view("carga.index", compact('cargas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("carga.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Carga::create($request->all());
        return redirect("/carga");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
