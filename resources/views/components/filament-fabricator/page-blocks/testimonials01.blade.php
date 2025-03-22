@aware(['page'])

@props([
    'heading',
    'description',
    'testimonials' => [],
    'image',
    'image_alt'
])

<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
        <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">{{ $heading }}</h2>
            <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">{{ $description }}</p>
        </div>
        <div class="grid mb-8 border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 md:mb-12 md:grid-cols-2 bg-white dark:bg-gray-800">
            @foreach($testimonials as $testimonial)
            <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 {{ $loop->first ? 'rounded-t-lg md:rounded-t-none md:rounded-ss-lg md:border-e' : '' }} {{ $loop->last ? 'rounded-b-lg md:rounded-se-lg' : '' }} {{ $loop->iteration == 3 ? 'md:rounded-es-lg md:border-b-0 md:border-e' : '' }} dark:bg-gray-800 dark:border-gray-700">
                <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $testimonial['title'] }}</h3>
                    <p class="my-4">{{ $testimonial['content'] }}</p>
                </blockquote>
                <figcaption class="flex items-center justify-center">
                    @php
                        $imageSrc = '';
                        if ($testimonial['image'] instanceof \Awcodes\Curator\Models\Media) {
                            $imageSrc = url('storage/' . $testimonial['image']->path);
                        } elseif (is_numeric($testimonial['image'])) {
                            $mediaItem = \Awcodes\Curator\Models\Media::find($testimonial['image']);
                            $imageSrc = $mediaItem ? url('storage/' . $mediaItem->path) : '';
                        } else {
                            $imageSrc = $testimonial['image'];
                        }
                    @endphp
                    <img class="rounded-full w-9 h-9" 
                         src="{{ $imageSrc }}" 
                         alt="{{ $testimonial['name'] }} profile picture">
                    <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                        <div>{{ $testimonial['name'] }}</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">{{ $testimonial['position'] }} at {{ $testimonial['company'] }}</div>
                    </div>
                </figcaption>
            </figure>
            @endforeach
        </div>
    </div>
</section>


