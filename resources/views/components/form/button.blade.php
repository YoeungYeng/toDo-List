@props(['complete' => false, 'delete' => false, 'edit' => false, 'add' => false, ])

@php
    $base = 'text-white transition duration-100 w-full cursor-pointer rounded-xl py-2 px-4 font-bold';
    if ($complete) {
        $class = 'bg-green-800 hover:bg-green-500 ' . $base;
    } elseif ($delete) {
        $class = 'bg-red-800 hover:bg-red-500 ' . $base;
    } elseif ($edit) {
        $class = 'bg-blue-800 hover:bg-blue-500 ' . $base;
    } elseif ($add) {
        $class = 'bg-yellow-800 hover:bg-yellow-500 ' . $base;
    }
    else {
        $class = 'bg-gray-800 hover:bg-gray-500 ' . $base;
    }
@endphp

<button {{ $attributes->merge(['type' => 'button', 'class' => $class]) }}>
    {{ $slot }}
</button>
