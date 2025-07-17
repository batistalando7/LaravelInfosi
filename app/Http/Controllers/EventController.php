<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $nome = ['Baptista', 'Lando', 'Miguel'];
        $cont = [30, 40, 50, 60];
        $idade = 30;
        $id = 1;

        return view('welcome',
         [
            'nome' => $nome, 
            'idade' => $idade, 
            'cont' => $cont, 
            'id' => $id
        ]);
    }
    public function create()
    {
        return view('events.create');
    }
    public function contact()
    {
        return view('contact');
    }
    public function products()
    {
        return view('products'); 
    }
}