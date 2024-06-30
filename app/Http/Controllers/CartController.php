<?php

namespace App\Http\Controllers;

use App\Models\Backpack;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function add(Request $request)
    {

        $id = $request->input('id');



        $cart = $request->session()->get('cart', []);



        if (!in_array($id, $cart)) {
            $cart[] = $id;
            $request->session()->put('cart', $cart);
        }


        return redirect('checkout');
    }

    public function check(Request $request)
    {

        // Obtener los IDs de mochilas guardados en sesión
        $cartIds = $request->session()->get('cart', []);

        // Obtener los detalles completos de las mochilas basado en los IDs
        $backpacks = Backpack::whereIn('id', $cartIds)->get();


        return view('web/checkout', compact('backpacks'));
    }

    public function buy(Request $request)
    {

        $request->session()->forget('cart');

        $request->session()->put('purchase_completed', true);

        return redirect('thanks');
    }

    public function thanks(Request $request){

         // Verificar si la compra ha sido completada
         if (!$request->session()->has('purchase_completed') || !$request->session()->get('purchase_completed')) {
            abort(403, 'Acceso no autorizado.');
        }

        // Limpiar la variable de estado después de mostrar la vista de agradecimiento
        $request->session()->forget('purchase_completed');

        return view('web/thanks');
    }
}
