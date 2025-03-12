<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>

<x-filament-fabricator.page-blocks.info-cards01  >

{{ $slot ?? "" }}
</x-filament-fabricator.page-blocks.info-cards01>