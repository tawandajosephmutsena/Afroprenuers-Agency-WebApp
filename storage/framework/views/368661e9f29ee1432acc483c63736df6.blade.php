<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
@props(['limit','showImage','showPrice','showDescription','orderBy'])
<x-filament-fabricator.page-blocks.services_list :limit="$limit" :show_image="$showImage" :show_price="$showPrice" :show_description="$showDescription" :order_by="$orderBy" >

{{ $slot ?? "" }}
</x-filament-fabricator.page-blocks.services_list>