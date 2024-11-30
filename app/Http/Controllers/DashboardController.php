<?php

namespace App\Http\Controllers;

use App\Models\Entrega;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /*public function primeiroGrafico() {
        $data = Entrega::select('cliente_id', DB::raw('count(cliente_id) as quantidade_cliente'))->with(cliente)->groupBy('cliente_id')->get();
        $clientes = [];
        $quantidade_clientes = [];
        
        foreach($data as $linha){
            $clientes[] = $linha->cliente->nome;
            $quantidade_clientes[] = $linha->quantidade_cliente;
        }
        return view('dashboard', compact('clientes', 'quantidade_clientes'));
        
    }

    public function segundoGrafico() {
        $data = Entrega::select('motorista_id', DB::raw('count(motorista_id) as quantidade_motorista'))->with(motorista)->groupBy('motorista_id')->get();
        $motoristas = [];
        $quantidade_motoristas = [];
        
        foreach($data as $linha){
            $motoristas[] = $linha->motorista->nome;
            $quantidade_motoristas[] = $linha->quantidade_motoristas;
        }
        return view('dashboard', compact('motoristas', 'quantidade_motoristas'));
        
    }

    public function terceiroGrafico() {
        $data = Entrega::select('cliente_id', DB::raw('count(cliente_id) as quantidade_cliente'))->with(cliente)->groupBy('cliente_id')->get();
        $clientes = [];
        $quantidade_clientes = [];
        
        foreach($data as $linha){
            $clientes[] = $linha->cliente->nome;
            $quantidade_clientes[] = $linha->quantidade_cliente;
        }
        return view('dashboard', compact('clientes', 'quantidade_clientes'));
        
    }*/
}
