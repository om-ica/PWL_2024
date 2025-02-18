<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello() 
    {
        return 'Hello World';
    }

    public function index() 
    {
        return 'Selamat Datang';
    }

    public function about() 
    {
       return 'Nama: Irsa Cahaya Widodo <br> NIM: 2341720193'; 
    }

    public function articles($id=null) {
        return 'Halaman Artikel dengan ID '.$id;
    }
}
