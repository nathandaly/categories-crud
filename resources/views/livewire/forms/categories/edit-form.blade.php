<div class="h-full flex flex-col bg-white overflow-y-scroll">
    <div x-data wire:loading.remove class="pb-1 sm:pb-6">
        <div class="px-4 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6 mt-4">
                <div class="col-span-6">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="name" id="name" autocomplete="name"
                           wire:model.lazy="category.name"
                           value="{{ $category->name }}"
                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    @error('category.name')
                        <p class="mt-2 text-sm text-red-600" id="email-error">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <x-alert.saved />

            <div class="flex mt-8 space-x-4">
                <button
                        type="button"
                        class="flex-1 bg-indigo-600 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        wire:click="save">
                    Update
                </button>
                <button
                        type="button"
                        class="flex-1 bg-white py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500"
                        wire:click="delete">
                    Delete
                </button>
            </div>
        </div>
    </div>
</div>
