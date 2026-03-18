<?php

namespace App\Http\Controllers;

use App\Models\MotivoContato;
use App\Models\SiteContact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(Request $request)
    {
        $motivos = MotivoContato::select('id', 'motivo_contato')->get();
        return view('site.contact', ['motivos' => $motivos]);
    }

    public function salvar(Request $request)
    {
        // name, email, phone, motivo, message
        $request->validate([
            'nome' => 'required|min:3|max:40',
            'email' => 'email',
            'telefone' => 'required',
            'motivo' => 'required',
            'mensagem' => 'required|min:3|max:2000'
        ], [
            'required' => 'O campo :attribute é obrigatório.',
            'email' => 'O campo :attribute deve ser um e-mail válido.',
            'min' => 'O campo :attribute deve ter no mínimo :min caracteres.',
            'max' => 'O campo :attribute deve ter no mínimo :max caracteres.',
        ]);

        SiteContact::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'motivo_contato_id' => $request->motivo,
            'mensagem' => $request->mensagem
        ]);
        return "Cadastrado com sucesso!";
    }
}
