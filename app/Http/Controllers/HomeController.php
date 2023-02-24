<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('hello', ['first_name' => 'Tamara']);
    }
    public function store()
    {
        return response()->json(['message' => 'post']);
    }
    public function update()
    {
        return response()->json(['message' => 'update']);
    }
    public function destroy()
    {
        return response()->json(['message' => 'delete']);
    }
}
