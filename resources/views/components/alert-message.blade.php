@props(['butt_hover', 'message'])

<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div id="alert-border-3" {{ $attributes->merge(['class' => 'flex items-center p-4 mb-4']) }} role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true"  fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <p class="ml-3 text-sm font-medium">{{ $message  }}</p>
            <button type="button" {{ $attributes->merge(['class' => 'ml-auto -mx-1.5 -my-1.5 rounded-lg focus:ring-2 inline-flex items-center justify-center h-8 w-8'.$butt_hover]) }}  class=" focus:ring-green-400 p-1.5 text-green-400 hover:bg-gray-700"  data-dismiss-target="#alert-border-3" aria-label="Close">
                <span class="sr-only">Dismiss</span>
                <svg class="w-3 h-3" aria-hidden="true"  fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
</div>