<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">


        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased {{ app()->isLocal() ? 'debug-screens' : '' }}">
    @if (app()->isLocal())
        <script src="http://localhost:3000/browser-sync/browser-sync-client.js"></script>
    @endif
        <div class="min-h-screen bg-gray-100">
            <main>
                <div x-data="{ open: false }" @keydown.window.escape="open = false" class="h-screen flex overflow-hidden bg-gray-100">

                    <x-sidebar-mobile />

                    <div class="hidden md:flex md:flex-shrink-0">
                        <div class="flex flex-col w-64">
                            <x-sidebar />
                        </div>
                    </div>

                    <div class="md:hidden pl-1 pt-1 sm:pl-3 sm:pt-3">
                        <button class="-ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" @click="open = true">
                            <span class="sr-only">Open sidebar</span>
                            <svg class="h-6 w-6" x-description="Heroicon name: outline/menu" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex flex-col w-0 flex-1 overflow-hidden">
                        <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none">
                            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8 py-4">
                                {{ $slot }}
                            </div>
                        </main>
                    </div>
                </div>
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
