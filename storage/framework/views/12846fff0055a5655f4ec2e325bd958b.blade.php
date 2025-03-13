<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
@props(['heading','clientlogo'])
<x-filament-fabricator.page-blocks.clientlogo :heading="$heading" :clientlogo="$clientlogo" >

{{ $slot ?? "" }}
</x-filament-fabricator.page-blocks.clientlogo>