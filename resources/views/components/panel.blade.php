@php
    $class = 'p-10 mt-10 bg-white/5  md:rounded-xl sm:rounded-xl flex justify-center shadow  items-center md:w-[60%] mx-auto sm:w-[90%] sm:p-6';
@endphp
<div {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</div>
