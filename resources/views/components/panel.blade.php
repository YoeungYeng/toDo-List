@php
    $class = 'p-4 mt-10 bg-white/5 rounded-xl flex justify-center shadow  items-center w-[60%] mx-auto';
@endphp
<div {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</div>
