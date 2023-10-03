<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Password;
use App\Models\Form;

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

        $results = new Form();
        $results->email = $request->email;
        $results->password = $request->password;
        $results->name = $request->name;
        $results->bounty = $request->float;
        $results->image = $request->image->getClientOriginalName();
        $results->save();

        $id = $results->id;

        $name = $request->name;

        return redirect()->route('result.show', ['id' => $id])
        ->with(['status' => "You are part of the Crew!", 'name' => $name]);
    }

    public function showResult($id)
    {
        $results = DB::table("Form")->select('id', 'email', 'password', 'name', 'bounty', 'image');

        $result = $results->find($id);
        $name = $result->name;

        if (!$result) {
            abort(404); 
        }
    
        return view('result', [
            'id' => $id,
            'results' => $result,
            'status' => "You are part of the Crew!",
            'name' => $name
        ]);
    }
    
}
