@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'inline-flex items-center px-1 pt-1 hover:text-red-700 text-sm text-red-700 transition duration-150 ease-in-out'
                : 'inline-flex items-center px-1 pt-1 hover:text-red-700 text-sm text-gray-500 transition duration-150 ease-in-out';
@endphp

<a {{ ($navigate ?? true) ? 'wire:navigate' : ''}} {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
