<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Backpack;
use Illuminate\Http\Request;

class BackofficeController extends Controller
{
    //

    public function listado(){

        $backpacks = Backpack::all();

        return view('backoffice/listado', ['backpacks' => $backpacks]);
        
    }

    public function crear(){

        return view('backoffice/crear');
    }

    public function save(){
        $backpack = new Backpack();


        $backpack->name =  request()->input('name');
        $backpack->price =  request()->input('price');
        $backpack->category =  request()->input('category');
        $backpack->stock =  request()->input('stock');
        $backpack->description =  request()->input('description');
        $backpack->manufacturer = request()->input('manufacturer');
        $backpack->image = request()->input('image');

        $backpack->save();
        
        return redirect('backoffice/listado');
    }

    public function editar($id){

        $backpack = Backpack::find($id);

        return view('backoffice/editar', compact('backpack'));

    }

    public function update($id){
        
        $backpack = Backpack::find($id);

        $backpack->name =  request()->input('name');
        $backpack->price =  request()->input('price');
        $backpack->category =  request()->input('category');
        $backpack->stock =  request()->input('stock');
        $backpack->description =  request()->input('description');
        $backpack->manufacturer = request()->input('manufacturer');
        $backpack->image = request()->input('image');

        $backpack->save();
        
        return redirect('backoffice/listado');
    }

}
