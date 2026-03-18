<?php

namespace App\Http\Controllers;

use App\Models\MotivoContato;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main()
    {
        $motivos = MotivoContato::select('id', 'motivo_contato')->get();
        return view('site.main', ['motivos' => $motivos]);
    }
}
