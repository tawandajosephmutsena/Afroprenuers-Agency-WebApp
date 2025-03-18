<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
@props(['columns','limit','showFeaturedImage','showDate','showExcerpt','orderBy'])
<x-filament-fabricator.page-blocks.blog_posts :columns="$columns" :limit="$limit" :show_featured_image="$showFeaturedImage" :show_date="$showDate" :show_excerpt="$showExcerpt" :order_by="$orderBy" >

{{ $slot ?? "" }}
</x-filament-fabricator.page-blocks.blog_posts>