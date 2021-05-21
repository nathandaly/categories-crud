<div x-data="Components.items({ items: {{ json_encode($items) }} })">
    <div class="mt-5 bg-white shadow overflow-hidden sm:rounded-md">
        <ul class="divide-y divide-gray-200">
            @forelse($items as $index => $item)
                <li class="hover:bg-indigo-50 cursor-pointer">
                    <a class="flex-1" href="{{ route('category.show', $item->categories->first() ?? 1) }}">
                        <div class="px-4 py-4 sm:px-6">
                            <div class="flex items-center justify-between">
                                <p class="text-md font-medium text-indigo-600 truncate no-underline">
                                    {{ $item->name }}
                                </p>
                                <div class="ml-2 flex-shrink-0 text-sm text-gray-500 flex">

                                    <div class="mr-4 flex items-center">
                                        <a class="rounded border border-transparent focus:outline-none focus:border-gray-800 focus:shadow-outline-gray"
                                           href="javascript: void(0)"
                                           @click="editItemClick({{ $index }})">
                                            <div class="p-2 bg-gray-100 hover:bg-gray-200 rounded cursor-pointer text-indigo-700">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                                    <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3"></path>
                                                    <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3"></path>
                                                    <line x1="16" y1="5" x2="19" y2="8"></line>
                                                </svg>
                                            </div>
                                        </a>
                                        <a
                                            class="rounded border border-transparent focus:outline-none focus:border-gray-800 focus:shadow-outline-gray"
                                            href="javascript: void(0)"
                                            wire:click="delete({{ $item->id }})">
                                            <div class="p-2 bg-gray-100 hover:bg-gray-200 rounded cursor-pointer text-red-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                                    <line x1="4" y1="7" x2="20" y2="7"></line>
                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="mr-4 flex space-x-2 items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#9e9e9e" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <circle cx="12" cy="12" r="9" />
                                            <polyline points="12 7 12 12 15 15" />
                                        </svg>
                                        <p>
                                            Created
                                            <time datetime="{{ $item->created_at }}">{{ $item->created_at->diffForHumans() }}</time>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            @empty
                <div class="p-6">
                    <div class="rounded-md bg-blue-50 p-4">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-blue-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3 flex-1 md:flex md:justify-between">
                                <p class="text-sm text-blue-700">
                                    No item data currently available.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforelse
        </ul>
    </div>
</div>
