@props(['name'])

@php
    $default = [
        'type' => 'text',
        'class' =>
            'border border-gray-300 text-white  py-2 px-4 rounded-xl w-[290px] focus:outline-none focus:ring-2 focus:ring-blue-500',
        'placeholder' => 'new task',
        'id' => $name,
        'name' => $name,
        'value' => old($name),
    ];

@endphp

<input {{ $attributes->merge($default) }} />
