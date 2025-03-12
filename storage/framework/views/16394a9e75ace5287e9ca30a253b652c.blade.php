<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
@props(['heading','description','buttonText','privacyText','privacyUrl'])
<x-filament-fabricator.page-blocks.newsletter01 :heading="$heading" :description="$description" :button_text="$buttonText" :privacy_text="$privacyText" :privacy_url="$privacyUrl" >

{{ $slot ?? "" }}
</x-filament-fabricator.page-blocks.newsletter01>