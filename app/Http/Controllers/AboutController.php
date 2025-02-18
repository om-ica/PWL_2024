<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        return 'Nama: Irsa Cahaya Widodo <br> NIM: 2341720193';
    }
}
