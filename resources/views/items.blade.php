<x-app-layout>
    <div class="flex-1 relative z-0 overflow-y-auto focus:outline-none">
        <div class="bg-white px-4 py-5 border-b border-gray-200 sm:px-6">
            <div class="-ml-4 -mt-2 flex items-center justify-between flex-wrap sm:flex-nowrap">
                <div class="py-6 flex-1 max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                    <h1 class="text-2xl font-semibold text-gray-900">Items</h1>
                </div>
                <div class="ml-4 mt-2 flex-shrink-0">
                    {{--                    <x-button.add label="Add item" />--}}
                </div>
            </div>
        </div>

    <livewire:lists.items />

    <livewire:components.slide-over />
</x-app-layout>
