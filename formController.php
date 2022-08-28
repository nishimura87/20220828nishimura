<?php

namespace App\Http\Controllers;

use App\Models\form;
use Illuminate\Http\Request;
use App\Http\Requests\registerRequest;

class formController extends Controller
{
    public function index()
    {
        return view('index');
    }
    
    public function post()
    {
        return view('thanks');
    }
    
    public function create(registerRequest $request)
    {
        $form = $request->all();
        form::create($form);
        return redirect('/');
    }
}