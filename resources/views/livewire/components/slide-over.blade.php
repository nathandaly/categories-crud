<section
        x-data="Components.actionPanel({ open: false })"
        x-init="init"
        @keydown.window.escape="open = false"
        x-show="open"
        class="z-40 fixed inset-0 overflow-hidden"
        x-ref="dialog"
        aria-modal="true"
        x-cloak>
    <div class="absolute inset-0 overflow-hidden">
        <div x-description="Background overlay, show/hide based on slide-over state." class="absolute inset-0" @click="open = false" aria-hidden="true"></div>

        <div class="fixed inset-y-0 right-0 pl-10 max-w-full flex sm:pl-16">
            <div x-show="open"
                 x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                 x-transition:enter-start="translate-x-full"
                 x-transition:enter-end="translate-x-0"
                 x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                 x-transition:leave-start="translate-x-0"
                 x-transition:leave-end="translate-x-full"
                 class="w-screen max-w-md"
                 x-description="Slide-over panel, show/hide based on slide-over state.">
                <div class="h-full flex flex-col bg-white shadow-xl overflow-y-scroll">
                    <div class="px-4 py-6 sm:px-6">
                        <div class="flex items-start justify-between">
                            <h2 id="slide-over-heading" class="text-lg font-medium text-gray-900">
                                {{ $title }}
                            </h2>
                            <div class="ml-3 h-7 flex items-center">
                                <button class="bg-white rounded-md text-gray-400 hover:text-gray-500 focus:ring-2 focus:ring-indigo-500" @click="open = false">
                                    <span class="sr-only">Close panel</span>
                                    <svg class="h-6 w-6" x-description="Heroicon name: outline/x" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                        <div x-data wire:loading.remove class="pb-1 sm:pb-6">
                            @if ($component)
                                @if ($componentData['isLivewire'])
                                    @livewire($component, [
                                        'data' => $componentData,
                                    ])
                                @else
                                    <x-dynamic-component
                                        :component="$component"
                                        :data="$componentData"
                                    />
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
