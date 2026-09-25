<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = [
            'Zaidil',
            'Anas',
            'Citra',
            'Dimas',
        ]; 

        return view('index', [
            'students' => $students
        ]);
    }
}