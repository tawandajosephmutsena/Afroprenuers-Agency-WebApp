@aware(['page'])

@props([
    'footerLogo',
    'footerText',
    'socialLinks' => [],
    'menuItems' => [],
    'copyrightText'
])

<footer class="bg-white dark:bg-gray-900">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="/" class="flex items-center">
                    @if($footerLogo)
                        <img src="{{ $footerLogo }}" class="h-8 mr-3" alt="Footer Logo" />
                    @endif
                </a>
                <p class="mt-4 text-gray-500 dark:text-gray-400">{{ $footerText }}</p>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                @foreach($menuItems as $menu)
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">{{ $menu['title'] }}</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            @foreach($menu['items'] as $item)
                                <li class="mb-4">
                                    <a href="{{ $item['url'] }}" class="hover:underline">{{ $item['label'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">{{ $copyrightText }}</span>
            <div class="flex mt-4 space-x-5 sm:justify-center sm:mt-0">
                @foreach($socialLinks as $social)
                    <a href="{{ $social['url'] }}" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        {!! $social['icon'] !!}
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</footer>