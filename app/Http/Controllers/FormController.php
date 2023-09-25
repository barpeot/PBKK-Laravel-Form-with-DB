<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function reset(Request $request)
    {
        $request->session()->flush();

        return redirect('form');
    }

    public function show(Request $request)
    {
        $request->validate([
            'email'=>'required|email:rfc',
            'password'=> ['required', Password::min(8)->letters()->numbers()],
            'name'=>'required|regex:/^[\pL\s]+$/u|min:3',
            'float'=>'required|numeric|between:2.50,99.99',
            'image'=>'required|max:2048|mimes:jpg,jpeg,png'
        ]);

        $request->image->storeAs('public/images', $request->image->getClientOriginalName());

        $results = [
            'Email' => $request->email,
            'Password' => $request->password,
            'Name' => $request->name,
            'Bounty' => $request->float,
            'Image' => $request->image->getClientOriginalName()
        ];

        $name = $request->name;

        return redirect('/result')->with(['results' => $results, 'status' => "You are part of the Crew!", 'name' => $name]);
    }

    public function result()
    {
        $results = session()->get('results');

        return view('result', [
            'results' => $results
        ]);
    }
}
