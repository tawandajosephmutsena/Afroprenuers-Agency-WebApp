@aware(['page'])

@props([
    'heading',
    'clientLogos' => [],
])

<section class="bg-white dark:bg-gray-900">
    <div class="py-8 lg:py-16 mx-auto max-w-screen-xl px-4">
        <h2 class="mb-8 lg:mb-16 text-3xl font-bold tracking-tight leading-tight text-center text-gray-900 dark:text-white md:text-4xl">{{ $heading }}</h2>
        <div class="grid grid-cols-2 gap-8 text-gray-500 sm:gap-12 md:grid-cols-3 lg:grid-cols-6 dark:text-gray-400">
            @if(!empty($clientLogos))
                @foreach($clientLogos as $logo)
                    <div class="item">
                        @if(isset($logo['logo']))
                            <img
                                src="{{ $logo['logo'] }}"
                                alt="{{ $logo['alt'] ?? 'Client logo' }}"
                                loading="lazy"
                            >
                        @endif
                    </div>
                @endforeach
            @else
                <div class="col-span-full text-center text-gray-500">
                    No client logos available
                </div>
            @endif
        </div>
    </div>
</section>
