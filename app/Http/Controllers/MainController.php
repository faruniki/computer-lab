<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Main;

class MainController extends Controller
{
    public function index()
    {
        $komputers = Main::all();

        return view('index', compact ('komputers'));
    }

    public function add()
    {
        return view('add');
    }

    public function edit()
    {
        return view('edit');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:3',
            'nis' => 'required|min:8',
            'ruang' => 'nullable',
            'computer' => 'required'
        ]);

        Main::create([
            'nama' => $request->nama,
            'nis' => $request->nis,
            'ruang' => $request->ruang,
            'computer' => $request->computer
        ]);

        return redirect('/');
    }
}
