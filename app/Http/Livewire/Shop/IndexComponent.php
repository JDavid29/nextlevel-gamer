<?php

namespace App\Http\Livewire\Shop;

use App\Models\Producto;
use Livewire\Component;

class IndexComponent extends Component
{
    public function render()
    {
        $productos = Producto::take(20)->get();
        return view('livewire.shop.index-component', compact('productos'))
        ->extends('layouts.app')
        ->section('content');
    }
    //FUNCION DEL BOTON AGREGAR AL CARRITO
    public function add_to_cart(Producto $producto){
        // dd($producto);

        \Cart::session(auth()->id())->add(array(
            'id' => $producto->id,
            'name' => $producto->nombre,
            'price' => $producto->precio,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $producto
        ));

        $this->emit('message', 'El producto se agrego correctamente');
        $this->emitTo('show.cart-component', 'add_to_cart');
    }
}
