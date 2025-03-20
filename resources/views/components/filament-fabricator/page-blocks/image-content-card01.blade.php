@aware(['page'])



@props([
  'image',
  'image_alt',
    'heading',
    'subheading',
    'button',
    'button_link',
])


<section class="bg-white px-4 py-8 antialiased dark:bg-gray-900 md:py-16">
    <div class="mx-auto grid max-w-screen-xl rounded-lg bg-gray-50 p-4 dark:bg-gray-800 md:p-8 lg:grid-cols-12 lg:gap-8 lg:p-16 xl:gap-16">
      <div class="lg:col-span-5 lg:mt-0">
       <a href="#">
          <img class="mb-4 h-56 w-56 dark:hidden sm:h-96 sm:w-96 md:h-full md:w-full" src="{{ $image }}" alt="{{ $image_alt }}" />
          <img class="mb-4 hidden dark:block md:h-full" src="{{ $image }}" alt="{{ $image_alt }}" />
        </a>
      </div>
      <div class="me-auto place-self-center lg:col-span-7">
        <h1 class="mb-3 text-2xl font-bold leading-tight tracking-tight text-gray-900 dark:text-white md:text-4xl">{{ $heading }}
        
        </h1>
        <p class="mb-6 text-gray-500 dark:text-gray-400">{{ $subheading }}</p>
        <a href="{{ $button_link }}" class="inline-flex items-center justify-center rounded-lg bg-primary-700 px-5 py-3 text-center text-base font-medium text-white hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">{{ $button }} </a>
      </div>
    </div>
  </section>

