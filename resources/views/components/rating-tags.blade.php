@props(['rating'])

@php
    $styles = [
        'PG-13' => 'bg-gradient-to-r from-yellow-400 to-yellow-600 text-gray-900 uppercase font-extrabold tracking-wide py-1 px-4 rounded-full shadow-lg transform hover:scale-105 transition duration-200',
        'R'     => 'bg-gradient-to-r from-red-400 to-red-600 text-white uppercase font-extrabold tracking-wide py-1 px-4 rounded-full shadow-lg transform hover:scale-105 transition duration-200',
        'G'     => 'bg-gradient-to-r from-green-400 to-green-600 text-white uppercase font-extrabold tracking-wide py-1 px-4 rounded-full shadow-lg transform hover:scale-105 transition duration-200',
        'PG'    => 'bg-gradient-to-r from-blue-400 to-blue-600 text-white uppercase font-extrabold tracking-wide py-1 px-4 rounded-full shadow-lg transform hover:scale-105 transition duration-200',
        'default' => 'bg-gradient-to-r from-gray-400 to-gray-600 text-white uppercase font-extrabold tracking-wide py-1 px-4 rounded-full shadow-lg transform hover:scale-105 transition duration-200',
    ];
@endphp

<span class="{{ $styles[e($rating)] ?? $styles['default'] }}">
    {{ e($rating) }}
</span>
