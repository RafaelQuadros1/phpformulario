<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //carregar formulario
    public function create()
    {
        //carregar a view com o formulário
       return view('users.create');
    }

    //armazenar os dados do formulário
    public function store(request $request)
    {
        dd($request->all());
    }
}
