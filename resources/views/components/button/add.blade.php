@props([
    'label' => ''
])
<button type="button" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
    <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 mr-3 h-5 w-5" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <circle cx="12" cy="12" r="9" />
        <line x1="9" y1="12" x2="15" y2="12" />
        <line x1="12" y1="9" x2="12" y2="15" />
    </svg>
    {{ $label }}
</button>
