<div class="flex flex-col h-0 flex-1 border-r border-gray-200 bg-white">
    <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
        <div class="flex items-center flex-shrink-0 px-4">
            <x-icon.dotfive height="50px" />
        </div>
        <nav class="mt-8 flex-1 px-2 bg-white space-y-1">

            <a href="{{ route('categories') }}" class="{{ request()->routeIs('categories') ? 'bg-gray-100 text-gray-900' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }} group flex items-center px-2 py-2 text-sm font-medium rounded-md" x-state:on="Current" x-state:off="Default" x-state-description="undefined: &quot;bg-gray-100 text-gray-900&quot;, undefined: &quot;text-gray-600 hover:bg-gray-50 hover:text-gray-900&quot;">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M9 4h3l2 2h5a2 2 0 0 1 2 2v7a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />
                    <path d="M17 17v2a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2h2" />
                </svg>
                Categories
            </a>

            <a href="{{ route('items') }}" class="{{ request()->routeIs('items') ? 'bg-gray-100 text-gray-900' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }} group flex items-center px-2 py-2 text-sm font-medium rounded-md" x-state-description="undefined: &quot;bg-gray-100 text-gray-900&quot;, undefined: &quot;text-gray-600 hover:bg-gray-50 hover:text-gray-900&quot;">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M3.5 5.5l1.5 1.5l2.5 -2.5" />
                    <path d="M3.5 11.5l1.5 1.5l2.5 -2.5" />
                    <path d="M3.5 17.5l1.5 1.5l2.5 -2.5" />
                    <line x1="11" y1="6" x2="20" y2="6" />
                    <line x1="11" y1="12" x2="20" y2="12" />
                    <line x1="11" y1="18" x2="20" y2="18" />
                </svg>
                Items
            </a>

        </nav>
    </div>
    <div class="flex-shrink-0 flex border-t border-gray-200 p-4">
        <a href="#" class="flex-shrink-0 w-full group block">
            <div class="flex items-center">
                <div>
                    <img class="inline-block h-9 w-9 rounded-full" src="https://images.unsplash.com/photo-1589471861110-1144cd568519?ixlib=rb-1.2.1&amp;ixqx=lIHhAz38CF&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium text-gray-700 group-hover:text-gray-900">
                        {{ Auth::user()->name }}
                    </p>
                </div>
            </div>
        </a>
    </div>
</div>
