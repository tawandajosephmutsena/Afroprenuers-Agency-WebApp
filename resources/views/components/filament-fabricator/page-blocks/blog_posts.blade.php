@aware(['page'])

@props([
    'columns' => 3,
    'limit' => 6,
    'show_featured_image' => true,
    'show_date' => true,
    'show_excerpt' => true,
    'order_by' => 'latest',
])

@php
    $articles = \App\Models\Article::query()
        ->with('featuredImage')
        ->when($order_by === 'latest', fn($query) => $query->latest())
        ->when($order_by === 'oldest', fn($query) => $query->oldest())
        ->when($order_by === 'random', fn($query) => $query->inRandomOrder())
        ->limit($limit)
        ->get();

    $gridCols = [
        1 => 'grid-cols-1',
        2 => 'grid-cols-1 md:grid-cols-2',
        3 => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3',
        4 => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-4',
    ];
@endphp
<section class="bg-white dark:bg-gray-900">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-20 lg:py-20">

    <!-- Debug information -->
  
    
    <div class="grid {{ $gridCols[$columns] }} gap-6">
        @foreach($articles as $article)
            <div class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                @if($show_featured_image && $article->featuredImage)
                    <a href="{{ route('articles.show', $article) }}">
                        
                        
                        <img class="rounded-t-lg w-full h-48 object-cover" 
                             src="{{ url('storage/' . $article->featuredImage->path) }}" 
                             alt="{{ $article->title }}" />
                    </a>
                @else
                    <div class="w-full h-48 bg-gray-100 flex items-center justify-center">
                        <svg class="w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                @endif
                
                <div class="p-5">
                    @if($show_date)
                        <span class="text-sm text-gray-500 dark:text-gray-400">
                            {{ $article->created_at->format('M d, Y') }}
                        </span>
                    @endif

                    <a href="{{ route('articles.show', $article) }}">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $article->title }}
                        </h5>
                    </a>

                    @if($show_excerpt)
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            {{ $article->excerpt }}
                        </p>
                    @endif

                    <a href="{{ route('articles.show', $article) }}" 
                       class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
</section>