<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SomethingController extends Controller
{
    public function display($angka){
        return "Ini angka {$angka}";
    }
}
