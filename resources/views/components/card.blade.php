@props(['color', 'bgColor' => 'white'])

<div {{ $attributes->merge(['class' => "card card-{$color} bg-{$bgColor}"]) }}>
    <h1 {{ $title->attributes->class('card-header') }}>{{ $title ?? '' }}</h1>
    {{ $slot }}  
    {{ $footer ?? '' }}  
</div>
    