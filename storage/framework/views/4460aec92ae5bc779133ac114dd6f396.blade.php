<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
@props(['heading','content','button01','button02'])
<x-filament-fabricator.page-blocks.hero01 :heading="$heading" :content="$content" :button01="$button01" :button02="$button02" >

{{ $slot ?? "" }}
</x-filament-fabricator.page-blocks.hero01>