<x-slot name="header">
    <h1 class="text-gray-900">CRUD con Laravel y Livewire</h1>
</x-slot>

<div class="py-12">
    <div class="max-w-7 mx-auto sm:px6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

            @if (session()->has('message'))
                <div class="bg-teal-100 rounded-b text-teal-900 px-4 py-4 shadow-md my-3" role="alert">
                    <div class="flex">
                        <div>
                            <h4>{{ session('message') }}</h4>
                        </div>
                    </div>
                </div>
            @endif

            <button wire:click="create()"
                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 my-3">Nuevo</button>
            {{-- wire:click="Create()" --}}
            @if ($modal)
                @include('livewire.create')
            @endif
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-indigo-600 text-white">
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">NOMBRE</th>
                        <th class="px-4 py-2">DESCRIPCION</th>
                        <th class="px-4 py-2">CANTIDAD</th>
                        <th class="px-4 py-2">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td class="border px-4 py-2" scope="row">{{ $product->id }}</td>
                            <td class="border px-4 py-2">{{ $product->name }}</td>
                            <td class="border px-4 py-2">{{ $product->description }}</td>
                            <td class="border px-4 py-2">{{ $product->quantity }}</td>
                            <td>
                                <button wire:click="edit({{ $product->id }})"
                                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4">Editar</button>
                                <button wire:click="delete({{ $product->id }})"
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4">Eliminar</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
