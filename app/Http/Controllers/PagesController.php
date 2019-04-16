<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    function store(Request $request) {

        $name = $request->name;

        return redirect()->route('thanks',['name' => $name ]);
    }
    function thanks($name, Request $request) {

        return view('thankyou')->with(compact('name'));
    }


}
