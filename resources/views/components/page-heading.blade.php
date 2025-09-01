@php
    $class = 'md:text-3xl sm:text-xl text-white font-bold w-full text-center';
@endphp

<h1 {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</h1>
