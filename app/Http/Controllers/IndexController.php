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
    public function store() {
        return view('store');
    }
    public function product() {
        return view('product');
    } 
}