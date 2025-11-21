@props(['size' => 'base', 'tag'])

@php
    $classes = "bg-white/10 hover:bg-white/25 rounded-xl font-bold transition-colors duration-300";


    if ($size === 'small') {
        $classes .= " px-2 py-1 text-xs";
    }

    if ($size === 'base') {
        $classes .= " px-5 py-1 text-sm";
    }

    
@endphp

<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}">{{ $tag->name }}</a>