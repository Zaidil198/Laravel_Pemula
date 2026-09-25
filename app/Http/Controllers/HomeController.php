<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'judul' => 'Belajar Laravel',
            'pesan' => 'Enviroment sudah siap untuk coding. ',
        ]);
    }
}
