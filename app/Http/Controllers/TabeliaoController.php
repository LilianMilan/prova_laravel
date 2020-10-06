<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabeliao;

class TabeliaoController extends Controller
{
    public function index()
    {
        $tabeliao = Tabeliao::all();
    }

    public function adicionar()
    {

    }

    public function salvar()
    {
        
    }
}
