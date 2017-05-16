<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Mail\Contato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContatoController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->all();

        Mail::to('contato@colmeiatecnologia.com.br')->send(new Contato($data));

        $request->session()->flash('mensagem', 'Enviado com sucesso!');

        return redirect()->back();
    }
}
