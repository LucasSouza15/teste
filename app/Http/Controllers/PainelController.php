<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PainelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function adminHome()
    {
        return view('home');
    }




    public function dashboard()
    {
        return view('admin.HomeAdmin');
    }

    public function adicionarProduto() {
        return view ('admin.adicionarProduto');
    }

    public function alterarProduto() {
        return view ('admin.alterarProduto');
    }

    public function adicionarUsuario() {
        return view('admin.Adicionarusuario');
    }
    public function listarUsuario() {
        return view ('admin.listarUsuarios');
    }
    public function configLoja() {
        return view ('admin.configLoja');
    }
    public function configPagamento() {
        return view ('admin.configPagamento');
    }
}
