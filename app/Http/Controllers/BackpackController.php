<?php

namespace App\Http\Controllers;

use App\Models\Backpack;
use App\Models\Category;
use Illuminate\Http\Request;

class BackpackController extends Controller
{
    public function index(){

        $backpacks = Backpack::all();
        $categories = Category::all();

        return view('web/index',
         ['backpacks' => $backpacks, 
         'categories' => $categories]);
    }

    public function backpack($id){

        $backpack = Backpack::find($id);
        return view('web/backpack', compact('backpack'));
    }

    public function list($id){

        $category = Category::find($id);
        $backpacks = Backpack::where('category', $id)->get();

        return view('web/list', compact('category', 'backpacks'));
    }
}
