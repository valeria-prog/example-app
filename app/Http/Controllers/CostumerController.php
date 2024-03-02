<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Costumer;
use Inertia\Inertia;

class CostumerController extends Controller
{   
    public function index(){
        
    }
    public function create(){
        return inertia::render('create');
    }
    public function store(Request $request){
        $validated=$request->validate([
         'name'=>'required|max:255',
         'email'=>'required|email|unique:costumers',
         'phone'=>'required|unique:costumers|max:14|min:10',
        ]);

        Costumer::create($validated);

        return Redirect::route('costumers.index');
    }
}
