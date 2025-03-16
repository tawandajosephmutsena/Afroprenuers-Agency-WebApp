@props(['page'])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AfroPrenuer</title>
  @vite('resources/css/app.css')
   


</head>
<body>



<nav class="bg-white border-gray-200 dark:bg-gradient-to-r from-gray-950 from-10% via-cyan-950 via-30%  to-gray-950 to-40% -z-550">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img class="h-12 w-auto" src="{{ asset('storage/assets/site_logo.png') }}" alt="Site Logo">
      </a>
      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <x-navigation slug="main-menu" />
      </div>
    </div>
  </nav>




    <x-filament-fabricator::page-blocks :blocks="$page->blocks" />





    @php
    $footerSettings = \App\Models\FooterSettings::first();
@endphp

<footer class="bg-white dark:bg-gradient-to-r from-gray-900 from-10% via-cyan-950 via-30% to-gray-900 to-40% -z-550">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="#" class="flex items-center">
                    <img src="{{ $footerSettings?->logo ? Storage::url($footerSettings->logo) : asset('storage/assets/site_logo.png') }}" class="h-8 me-3" alt="Site Logo" />
                </a>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                @if($footerSettings?->resource_links)
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        @foreach($footerSettings->resource_links as $link)
                        <li class="mb-4">
                            <a href="{{ $link['url'] }}" class="hover:underline">{{ $link['title'] }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if($footerSettings?->legal_links)
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        @foreach($footerSettings->legal_links as $link)
                        <li class="mb-4">
                            <a href="{{ $link['url'] }}" class="hover:underline">{{ $link['title'] }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">
                {{ $footerSettings?->copyright_text ?? '© ' . date('Y') . ' Your Company. All Rights Reserved.' }}
            </span>
            
            @if($footerSettings?->social_links)
            <div class="flex mt-4 sm:justify-center sm:mt-0">
                @foreach($footerSettings->social_links as $social)
                <a href="{{ $social['url'] }}" class="text-gray-500 hover:text-gray-900 dark:hover:text-white {{ !$loop->first ? 'ms-5' : '' }}">
                    @include('components.social-icons.' . $social['platform'])
                    <span class="sr-only">{{ ucfirst($social['platform']) }} page</span>
                </a>
                @endforeach
            </div>
            @endif
        </div>
    </div>
</footer>


    </body>
    </html>
