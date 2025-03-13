<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
@props(['heading','content','buttonText'])
<x-filament-fabricator.page-blocks.hero02 :heading="$heading" :content="$content" :button_text="$buttonText" >

{{ $slot ?? "" }}
</x-filament-fabricator.page-blocks.hero02>