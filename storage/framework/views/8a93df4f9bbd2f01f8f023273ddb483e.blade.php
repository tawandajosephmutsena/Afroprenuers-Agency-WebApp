<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
@props(['partnerLogos','topButtonLink','topbutton','title','content','button01Link','button01','button02Link','title02','button01Link','button01'])
<x-filament-fabricator.page-blocks.hero03 :partnerLogos="$partnerLogos" :topButtonLink="$topButtonLink" :topbutton="$topbutton" :title="$title" :content="$content" :Button01Link="$button01Link" :Button01="$button01" :Button02Link="$button02Link" :title02="$title02" :button01Link="$button01Link" :button01="$button01" >

{{ $slot ?? "" }}
</x-filament-fabricator.page-blocks.hero03>