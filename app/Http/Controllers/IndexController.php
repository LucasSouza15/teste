<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Iluminate\Support\Facades\Http;

class IndexController extends Controller
{
    public function index() {
        return view('home');
    }
    public function contato() {
        return view('blank');
    }
    public function checkout() {
        return view('checkout');
    }
    public function StoreEnxovais() {
        return view('StoreEnxovais');
    }
    public function StoreCosmeticos() {
        return view('StoreCosmeticos');
    }
    public function StoreRoupas() {
        return view('StoreRoupas');
    }
    public function product($id) {
        return view('product');
    } 
}