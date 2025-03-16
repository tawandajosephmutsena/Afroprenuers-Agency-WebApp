@props([
    'data' => [],
    'columns' => collect(),
    'images' => collect(),
])
@aware(['page'])
@php
    use Awcodes\Curator\Models\Media;
@endphp

<section class="bg-white dark:bg-gray-900">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        @foreach ($columns ?? [] as $column)
            <div class="grid gap-4">
                @foreach ($column['images'] ?? [] as $image)
                    <div>
                        <img class="h-auto max-w-full rounded-lg" 
                            src="{{ $image['image_url'] }}" 
                            alt="{{ $image['alt'] ?? '' }}"
                            loading="lazy">
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</section>
