@aware(['page'])

@props([
'image',
'image_alt',
'image2',
'image_alt2',
'heading',
'content',
'subhearding',
])

<section class="bg-white dark:bg-gray-900">
    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
        <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">{{ $heading }}</h2>
            <h3 class="mb-4 text-2xl tracking-tight font-extrabold text-cyan-800 dark:text-cyan-300">{{ $subhearding }}</h3>
            <p class="text-gray-900 dark:text-white">{{ $content }}</p>
        </div>
        <div class="grid grid-cols-2 gap-4 mt-8">

        @php
            $imageSrc = '';
         if ($image instanceof \Awcodes\Curator\Models\Media) {
             $imageSrc = url('storage/' . $image->path);
        } elseif (is_numeric($image)) {
             $mediaItem = \Awcodes\Curator\Models\Media::find($image);
              $imageSrc = $mediaItem ? url('storage/' . $mediaItem->path) : '';
        } else {
             $imageSrc = $image;
         }
        @endphp

            <img class="w-full rounded-lg" src="{{ $imageSrc }}" alt="{{ $image_alt }}">


            @php
            $imageSrc2 = '';
         if ($image2 instanceof \Awcodes\Curator\Models\Media) {
             $imageSrc2 = url('storage/' . $image2->path);
        } elseif (is_numeric($image2)) {
             $mediaItem = \Awcodes\Curator\Models\Media::find($image2);
              $imageSrc2 = $mediaItem ? url('storage/' . $mediaItem->path) : '';
        } else {
             $imageSrc2 = $image2;
         }
        @endphp

            <img class="mt-4 w-full lg:mt-10 rounded-lg" src="{{ $imageSrc2 }}" alt="{{ $image_alt2 }}">
        </div>
    </div>
</section>

