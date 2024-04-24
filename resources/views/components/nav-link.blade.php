@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex p-3 h-16 items-center text-lg font-medium leading-5 text-amber-700 border-b-2 border-amber-600 focus:outline-none transition duration-150 ease-in-out'
            : 'inline-flex p-3 h-16 items-center text-lg font-medium leading-5 text-amber-900 hover:text-amber-700 hover:border-b focus:outline-none focus:text-gray-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
