<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form>
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nombre</label>
                        <input type="text" id="name" name="name"
                            class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-none"
                            placeholder="Nombre del producto" wire:model="name" />
                        {{-- wire:model="name" --}}
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Descripción</label>
                        <input type="text" id="description" name="description"
                            class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-none"
                            placeholder="Ingrese descripción del producto" wire:model="description" />
                        {{-- wire:model="description" --}}
                    </div>
                    <div class="mb-4">
                        <label for="quantity" class="block text-gray-700 text-sm font-bold mb-2">Cantidad</label>
                        <input type="number" id="quantity" name="quantity"
                            class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-none"
                            placeholder="Ingrese cantidad" wire:model="quantity" />
                        {{-- wire:model="quatity" --}}
                    </div>

                    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse">
                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <button type="button"
                                class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 text-white font-bold bg-purple-800 hover:bg-green-600 focus:outline-none hover:border-green-700 hover:shadow-green-600 transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                                wire:click.prevent="stored()">Guardar</button>
                            {{-- wire:click.prevent="stored()" --}}
                        </span>
                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <button type="button"
                                class="inline-flex justify-center w-full rounded-md border border-gray-400 px-4 py-2 font-bold bg-gray-300 hover:bg-gray-400 focus:outline-none hover:border-gray-500 hover:shadow-gray-400 transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                                wire:click="closeModal()">Cancelar</button>
                            {{-- wire:click="closeModal()" --}}
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
