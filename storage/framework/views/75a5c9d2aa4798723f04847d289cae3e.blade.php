<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
@props(['topButtonLink','topbutton','title','content','button01Link','button01','title02','partnerLogos'])
<x-filament-fabricator.page-blocks.hero03 :topButtonLink="$topButtonLink" :topbutton="$topbutton" :title="$title" :content="$content" :button01Link="$button01Link" :button01="$button01" :title02="$title02" :partnerLogos="$partnerLogos" >

{{ $slot ?? "" }}
</x-filament-fabricator.page-blocks.hero03>