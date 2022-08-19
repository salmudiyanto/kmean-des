<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DishubController extends Controller
{
    public function index(){
        $pelabuhan = DB::table('pelabuhan')->get();
        return  view('index', ['pelabuhan' => $pelabuhan]);
    }
}
