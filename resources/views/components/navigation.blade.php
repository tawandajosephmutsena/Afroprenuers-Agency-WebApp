@php
    $navigation = \App\Models\Navigation::where('slug', $slug)->first();
@endphp

@if($navigation && !empty($navigation->items))
    <ul class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-transparent dark:border-gray-700">
        @foreach($navigation->items as $item)
            @php
                $label = $item['label'] ?? $item['data']['label'] ?? null;
                $pageId = $item['page_id'] ?? $item['data']['page_id'] ?? null;
                $page = \Z3d0X\FilamentFabricator\Models\Page::find($pageId);
            @endphp
            @if($page && $label)
                <li>
                    <a href="{{ $page->slug === '/' ? '/' : '/'.$page->slug }}" 
                       class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                        {{ $label }}
                    </a>
                </li>
            @endif
        @endforeach
        
        <li>
            @auth
                <a href="/admin" 
               
                    button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                        <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-transparent group-hover:dark:bg-transparent">
                        Dashboard
                        </span>
                    </button>                    
                </a>
            @else
                <a href="/admin/login" 
                button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                        <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-transparent group-hover:dark:bg-transparent">
                        Login
                        </span>
                    </button>                      
                </a>
            @endauth
        </li>
    </ul>
@endif