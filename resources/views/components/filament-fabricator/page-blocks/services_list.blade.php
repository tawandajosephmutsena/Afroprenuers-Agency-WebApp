@aware(['page'])

@props([
    'limit' => 6,
    'show_image' => true,
    'show_price' => true,
    'show_description' => true,
    'order_by' => 'latest',
])

@php
    $services = \App\Models\Service::query()
        ->when($order_by === 'latest', fn($query) => $query->latest())
        ->when($order_by === 'oldest', fn($query) => $query->oldest())
        ->when($order_by === 'random', fn($query) => $query->inRandomOrder())
        ->limit($limit)
        ->get();
@endphp

<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
        <div class="grid gap-8 mb-6">
            @foreach($services as $service)
                <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    @if($show_image && $service->image)
                        <img 
                            class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" 
                            src="{{ url('storage/' . $service->image) }}" 
                            alt="{{ $service->name }}"
                        >
                    @endif
                    
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $service->name }}
                            @if($show_price)
                                <span class="text-lg font-semibold text-primary-600 dark:text-primary-500">
                                    ${{ number_format($service->price, 2) }}
                                </span>
                            @endif
                        </h5>
                        
                        @if($show_description)
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                {{ $service->description }}
                            </p>
                        @endif
                        
                        <div class="flex items-center space-x-2">
                            @if($service->duration)
                                <span class="text-sm text-gray-500 dark:text-gray-400">
                                    <i class="heroicon-o-clock"></i> {{ $service->duration }} minutes
                                </span>
                            @endif
                            @if($service->service_type)
                                <span class="text-sm text-gray-500 dark:text-gray-400">
                                    | {{ $service->service_type }}
                                </span>
                            @endif
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>