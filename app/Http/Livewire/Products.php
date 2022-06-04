<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class Products extends Component
{
    public $products, $productId, $name, $description, $quantity;
    public $modal = false;

    public function render()
    {
        $this->products = Product::all();
        return view('livewire.products');
    }

    public function create()
    {
        $this->cleanFields();
        $this->openModal();
    }

    public function stored()
    {
        $this->validate([
            'name' => 'required|min:3|max:50',
            'description' => 'required|min:3|max:255',
            'quantity' => 'required|integer|min:1',
        ]);

        Product::updateOrCreate(
            ['id' => $this->productId],
            [
                'name' => $this->name,
                'description' => $this->description,
                'quantity' => $this->quantity,
            ]
        );

        session()->flash(
            'message',
            $this->productId ? '¡Producto actualizado correctamente!' : '¡Producto creado correctamente!'
        );

        $this->closeModal();
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $this->productId = $id;
        $this->name = $product->name;
        $this->description = $product->description;
        $this->quantity = $product->quantity;
        $this->openModal();
    }

    public function delete($id)
    {
        Product::findOrFail($id)->delete();
        session()->flash('message', '¡Producto eliminado correctamente!');
    }

    public function openModal()
    {
        $this->modal = true;
    }

    public function closeModal()
    {
        $this->cleanFields();
        $this->modal = false;
    }

    public function cleanFields()
    {
        $this->productId = null;
        $this->name = null;
        $this->description = null;
        $this->quantity = null;
    }
}
