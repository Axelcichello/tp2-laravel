<?php

namespace App\Http\Controllers;

use App\Models\Backpack;
use Illuminate\Http\Request;

class BackpackController extends Controller
{
    public function index(){

        $backpacks = Backpack::all();

        return view('web/index', compact('backpacks'));
    }

    public function backpack($id){

        $backpack = Backpack::find($id);
        return view('web/backpack', compact('backpack'));
    }
}
