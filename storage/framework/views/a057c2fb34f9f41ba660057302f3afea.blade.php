<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
@props(['columns'])
<x-filament-fabricator.page-blocks.gallery01 :columns="$columns" >

{{ $slot ?? "" }}
</x-filament-fabricator.page-blocks.gallery01>