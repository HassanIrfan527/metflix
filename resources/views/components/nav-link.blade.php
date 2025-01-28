@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex items-center w-full h-12 px-3 mt-2 rounded bg-gray-700 text-gray-200 text-sm font-medium'
            : 'flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-white-700 hover:text-gray-300 text-sm font-medium text-gray-400';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
