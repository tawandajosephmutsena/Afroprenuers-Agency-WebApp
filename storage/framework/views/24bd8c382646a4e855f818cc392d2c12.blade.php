<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
@props(['heading','subhearding','content'])
<x-filament-fabricator.page-blocks.info-section01 :heading="$heading" :subhearding="$subhearding" :content="$content" >

{{ $slot ?? "" }}
</x-filament-fabricator.page-blocks.info-section01>