@aware(['page'])

@props([
    'topButtonLink',
    'topbutton',
    'title',
    'content',
    'button01Link',
    'button01',
    'title02',
    'partnerLogos' => [],
])

@php
    use Awcodes\Curator\Models\Media;
@endphp

<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-12">
        <a href="{{ $topButtonLink }}" class="inline-flex justify-between items-center py-1 px-1 pr-4 mb-7 text-sm text-gray-700 bg-gray-100 rounded-full dark:bg-gray-800 dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700" role="alert">
            <span class="text-sm font-medium bg-primary-600 rounded-full text-white px-4 py-1.5 mr-1"> {{ $topbutton }} </span> 
            <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        </a>
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">{{ $title }}</h1>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400"> {{ $content }} </p>
        <div class="flex flex-col mb-8 lg:mb-16 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
         
            <a href="{{ $button01Link }}" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-gray-900 rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
            {{ $button01 }}   
            <svg class="mr-2 -ml-1 w-5 h-5 ml-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path></svg>
               
            </a>
        </div>
        <div class="px-4 mx-auto text-center md:max-w-screen-md lg:max-w-screen-lg lg:px-36">
            <span class="font-semibold text-gray-400 uppercase">{{ $title02 }}</span>
            <div class="flex flex-wrap justify-center items-center mt-8 text-gray-500 sm:justify-between">
                @if(!empty($partnerLogos))
                    @foreach($partnerLogos as $logo)
                        <div class="item">
                            @if(isset($logo['logo']))
                                @php
                                    $mediaItem = Media::find($logo['logo']);
                                @endphp
                                @if($mediaItem)
                                    <img
                                        src="{{ url('storage/' . $mediaItem->path) }}"
                                        alt="{{ $logo['alt'] ?? 'Partner logo' }}"
                                        loading="lazy"
                                        class="h-9 hover:text-gray-900"
                                    >
                                @endif
                            @endif
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</section>

