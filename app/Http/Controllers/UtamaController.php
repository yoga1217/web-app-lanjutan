<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtamaController extends Controller
{
    public function test()
    {
        return view("view-1");
    }
    
    public function index()
    {
        return view("test-tema");
    }

    public function about()
    {
        return view("about");
    }

    public function home()
    {
        return view("home");
    }

    public function beritaolahraga()
    {
        return view("beritaolahraga");
    }

    public function beritapolitik()
    {
        return view("beritapolitik");
    }

    public function datadiri()
    {
        return view("datadiri");
    }

    public function proses(Request $request)
{
    $this->validate($request,[
        'nama' => 'required|min:5|max:20',
        'pekerjaan' => 'required',
        'usia' => 'required|numeric'
    ]);
 
    return view('proses',['data' => $request]);
}
}