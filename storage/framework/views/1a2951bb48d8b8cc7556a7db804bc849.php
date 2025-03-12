 <?php if (isset($component)) { $__componentOriginal8636f53a0f82ea5b5b096f929a6c52ba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8636f53a0f82ea5b5b096f929a6c52ba = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav-menu','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav-menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8636f53a0f82ea5b5b096f929a6c52ba)): ?>
<?php $attributes = $__attributesOriginal8636f53a0f82ea5b5b096f929a6c52ba; ?>
<?php unset($__attributesOriginal8636f53a0f82ea5b5b096f929a6c52ba); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8636f53a0f82ea5b5b096f929a6c52ba)): ?>
<?php $component = $__componentOriginal8636f53a0f82ea5b5b096f929a6c52ba; ?>
<?php unset($__componentOriginal8636f53a0f82ea5b5b096f929a6c52ba); ?>
<?php endif; ?>

<body class="bg-violet-100 dark:bg-gray-900">

<div class="relative isolate px-6 pt-14 lg:px-8">
        <img src="<?php echo e(asset('storage/media/mhondoro-inc-hero2.jpg')); ?>" alt="social-cover" class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center">

    <!-- Top Background Animation -->
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80 animate-gradient-move" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>

    <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
        <div class="text-center">
            <h1 class="text-balance font-bold text-yellow-500 sm: dark:text-yellow-500">
                Innovative Digital Solutions.
            </h1>
            <h2 class="text-balance text-4xl font-bold tracking-tight text-yellow-500 sm:text-6xl dark:text-yellow-500">
                Exceptional Results.
            </h2>
            <p class="mt-6 text-lg leading-8 text-gray-100 dark:text-gray-100">
                At Mhondoro Inc., we transform ideas into impactful digital experiences. From bespoke website application to cutting-edge apps, we craft premium solutions that drive growth, engage audiences, and elevate brands.
            </p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                    <div class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/30 dark:text-gray-300 dark:ring-gray-700 dark:hover:ring-gray-500">
                        Let's Create Together.
                        <a href="<?php echo e(url('/about')); ?>" class="font-semibold text-yellow-500">
                            <span class="absolute inset-0" aria-hidden="true"></span>How it works!
                            <span aria-hidden="true">&rarr;</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Bottom Background Animation -->
    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)] animate-gradient-move" aria-hidden="true">
        <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
</div>


    <div class="bg-violet-100 py-24 sm:py-32 dark:bg-gray-800">
        
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base font-semibold leading-7 text-yellow-600 dark:text-yellow-500">Welcome to Mhondoro Inc.</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl dark:text-gray-100">Turning Your Vision into Reality</p>
                <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-gray-300">At Mhondoro Inc., we go beyond delivering services – we create partnerships that prioritize your success. Our expertise in premium web and mobile solutions ensures your business stands out with innovative, tailored strategies designed for impact.</p>
            </div></div></div>
            <div class="bg-violet-100 py-24 sm:py-32 dark:bg-gray-900">

<!-- Services Grid -->
<div class="max-w-7xl mx-auto px-4 py-12 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800 dark:text-neutral-200 sm:text-4xl">Our Services</h2>
        <p class="mt-4 text-lg text-gray-600 dark:text-gray-300">Discover how we can help transform your business</p>
    </div>

    <div class="grid grid-cols-1 gap-8 md:grid-cols-1 lg:grid-cols-2">
        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="group relative bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="aspect-w-16 aspect-h-9">
                <img class="w-full h-48 object-cover" src="<?php echo e(asset('storage/' . $service->image)); ?>" alt="<?php echo e($service->name); ?>">
            </div>
            <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-800 dark:text-yellow-500 group-hover:text-yellow-600 dark:group-hover:text-yellow-400 transition-colors duration-300">
                    <?php echo e($service->name); ?>

                </h3>
                <p class="mt-3 text-gray-600 dark:text-gray-300">
                    <?php echo e(\Illuminate\Support\Str::limit($service->description, 120)); ?>

                </p>
                <div class="mt-4">
                    <a href="#" class="inline-flex items-center text-yellow-600 dark:text-yellow-500 hover:text-yellow-700 dark:hover:text-yellow-400">
                        Learn more
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <!-- Decorative corner accent -->
            <div class="absolute top-0 right-0 -mt-3 -mr-3">
                <div class="w-24 h-24 bg-gradient-to-br from-violet-100 to-yellow-500 opacity-10 transform rotate-45"></div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
            
            
            
            
            
            
            
            <div class="mx-auto max-w-3xl lg:text-center bg-gray-100 dark:bg-gray-800 px-16 pb-16 pt-16 drop-shadow-xl ring ring-gray-200 dark:ring-gray-900 rounded-b-lg ">
                <p class="text-2xl leading-8 text-gray-600 dark:text-gray-300">Not just products </p>
               
                <p class="text-xl leading-8 text-gray-600 dark:text-gray-300"> we build trust, relationships, and enduring success.</p><p class="text-xl leading-8 text-gray-600 dark:text-gray-300"> Let us empower your journey with professionalism and innovation.</p>
                <div class="mt-6">
                        <a href="<?php echo e(url('/contact')); ?>">
                                <button type="submit" class="flex-none rounded-md bg-yellow-600 px-3.5 py-2.5 text-sm font-semibold text-white hover:text-gray-900 shadow-sm hover:bg-yellow-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-violet-500">Let's talk!</button>
                        </a>
                            </div>

            </div>
        </div>
    </div>
    </div>



    <!-- our-work -->
<div id="tabs-system-2" class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto ">
    <!-- Tab Nav -->
    <nav class="max-w-6xl mx-auto flex flex-col sm:flex-row gap-y-px sm:gap-y-0 sm:gap-x-4" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
        <button type="button" class="bg-gray-100 hover:border-transparent w-full flex flex-col text-start hover:bg-gray-100 focus:outline-none focus:bg-gray-100 p-3 md:p-5 rounded-xl dark:bg-gray-800 dark:hover:bg-gray-800 dark:focus:bg-gray-800 active" id="tabs-system-2-item-1" data-hs-tab="#tabs-system-2-content-1" aria-controls="tabs-system-2-content-1" aria-selected="true" role="tab">
            <svg class="shrink-0 hidden sm:block size-7 text-yellow-600 dark:text-yellow-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 5.5A3.5 3.5 0 0 1 8.5 2H12v7H8.5A3.5 3.5 0 0 1 5 5.5z" />
                <path d="M12 2h3.5a3.5 3.5 0 1 1 0 7H12V2z" />
                <path d="M12 12.5a3.5 3.5 0 1 1 7 0 3.5 3.5 0 1 1-7 0z" />
                <path d="M5 19.5A3.5 3.5 0 0 1 8.5 16H12v3.5a3.5 3.5 0 1 1-7 0z" />
                <path d="M5 12.5A3.5 3.5 0 0 1 8.5 9H12v7H8.5A3.5 3.5 0 0 1 5 12.5z" /></svg>
            <span class="mt-5">
                <span class="text-yellow-600 block font-semibold text-gray-800 dark:text-yellow-500 dark:text-neutral-200">Web Applications</span>
                <span class="hidden lg:block mt-2 text-gray-800 dark:text-neutral-200">Empower Your Business. Develop bespoke web applications to streamline operations, improve accessibility, and meet specific business needs.</span>
            </span>
        </button>

        <button type="button" class="hs-tab-active:bg-gray-100 hs-tab-active:hover:border-transparent w-full flex flex-col text-start hover:bg-gray-100 focus:outline-none focus:bg-gray-100 p-3 md:p-5 rounded-xl dark:hs-tab-active:bg-gray-800 dark:hover:bg-gray-800 dark:focus:bg-gray-800" id="tabs-system-2-item-2" data-hs-tab="#tabs-system-2-content-2" aria-controls="tabs-system-2-content-2" aria-selected="false" role="tab">
            <svg class="shrink-0 hidden sm:block size-7 hs-tab-active:text-yellow-600 text-gray-800 dark:hs-tab-active:text-yellow-500 dark:text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m12 14 4-4"/>
                <path d="M3.34 19a10 10 0 1 1 17.32 0"/>
            </svg>
            <span class="mt-5">
                <span class="hs-tab-active:text-yellow-600 block font-semibold text-gray-800 dark:hs-tab-active:text-yellow-500 dark:text-neutral-200">Custom Systems</span>
                <span class="hidden lg:block mt-2 text-gray-800 dark:text-neutral-200">Tailored Solutions for Unique Needs. Design and implement custom systems like CRMs, inventory management tools, or workflow automation solutions</span>
            </span>
        </button>

        <button type="button" class="hs-tab-active:bg-gray-100 hs-tab-active:hover:border-transparent w-full flex flex-col text-start hover:bg-gray-100 focus:outline-none focus:bg-gray-100 p-3 md:p-5 rounded-xl dark:hs-tab-active:bg-gray-800 dark:hover:bg-gray-800 dark:focus:bg-gray-800" id="tabs-system-2-item-3" data-hs-tab="#tabs-system-2-content-3" aria-controls="tabs-system-2-content-3" aria-selected="false" role="tab">
            <svg class="shrink-0 hidden sm:block size-7 hs-tab-active:text-yellow-600 text-gray-800 dark:hs-tab-active:text-yellow-500 dark:text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z"/>
                <path d="M5 3v4"/>
                <path d="M19 17v4"/>
                <path d="M3 5h4"/>
                <path d="M17 19h4"/>
            </svg>
            <span class="mt-5">
                <span class="hs-tab-active:text-yellow-600 block font-semibold text-gray-800 dark:hs-tab-active:text-yellow-500 dark:text-neutral-200">Website Design</span>
                <span class="hidden lg:block mt-2 text-gray-800 dark:text-neutral-200">We design and develop visually stunning, high-performing websites that engage visitors and turn them into customers.</span>
            </span>
        </button>
    </nav>
    <!-- End Tab Nav -->

    <!-- Tab Content -->
    <div class="mt-12 md:mt-16">
        <div id="tabs-system-2-content-1" role="tabpanel" aria-labelledby="tabs-system-2-item-1" class="block">
            <!-- Devices -->
            <div class="max-w-[1140px] lg:pb-32 relative">
                <!-- Mobile Device -->
                <figure class="hidden absolute bottom-0 start-0 z-[2] max-w-full w-60 h-auto mb-20 ms-20 lg:block">
                    <div class="p-1.5 bg-gray-100 rounded-3xl shadow-[0_2.75rem_5.5rem_-3.5rem_rgb(45_55_75_/_20%),_0_2rem_4rem_-2rem_rgb(45_55_75_/_30%),_inset_0_-0.1875rem_0.3125rem_0_rgb(45_55_75_/_20%)] dark:shadow-[0_2.75rem_5.5rem_-3.5rem_rgb(0_0_0_/_20%),_0_2rem_4rem_-2rem_rgb(0_0_0_/_30%),_inset_0_-0.1875rem_0.3125rem_0_rgb(0_0_0_/_20%)] dark:bg-neutral-700">
                        <img class="max-w-full rounded-[1.25rem] h-auto" src="<?php echo e(asset('storage/media/theoffice-expert-mobile-mockup-mhondoro.jpg')); ?>" alt="Mhondoro Inc Responsive Web Development"> 
                    </div>
                </figure>
                <!-- End Mobile Device -->

                <!-- Browser Device -->
                <figure class="ms-auto me-20 relative z-[1] max-w-full w-[50rem] h-auto shadow-[0_2.75rem_3.5rem_-2rem_rgb(45_55_75_/_20%),_0_0_5rem_-2rem_rgb(45_55_75_/_15%)] dark:shadow-[0_2.75rem_3.5rem_-2rem_rgb(0_0_0_/_20%),_0_0_5rem_-2rem_rgb(0_0_0_/_15%)] rounded-b-lg">
                    <div class="relative flex items-center max-w-[50rem] bg-white border-b border-gray-100 rounded-t-lg py-2 px-24 dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex gap-x-1 absolute top-2/4 start-4 -translate-y-1">
                            <span class="size-2 bg-gray-200 rounded-full dark:bg-gray-700"></span>
                            <span class="size-2 bg-gray-200 rounded-full dark:bg-gray-700"></span>
                            <span class="size-2 bg-gray-200 rounded-full dark:bg-gray-700"></span>
                        </div>
                        <div class="flex justify-center items-center size-full bg-gray-200 text-[.25rem] text-gray-800 rounded-sm sm:text-[.5rem] dark:bg-gray-700 dark:text-gray-200">www.theoffice.expert</div>
                    </div>

                    <div class="bg-gray-800 rounded-b-lg">
                        <img class="max-w-full h-auto rounded-b-lg" src="<?php echo e(asset('storage/media/theoffice-expert-mockup-mhondoro.jpg')); ?>" alt="Mhondoro Inc Web Development">
                    </div>
                </figure>
                <!-- End Browser Device -->
            </div>
            <!-- End Devices -->
        </div>

        <div id="tabs-system-2-content-2" class="hidden" role="tabpanel" aria-labelledby="tabs-system-2-item-2">
            <!-- Devices -->
            <div class="max-w-[1140px] lg:pb-32 relative">
                <!-- Mobile Device -->
                <figure class="hidden absolute bottom-0 start-0 z-[2] max-w-full w-60 h-auto mb-20 ms-20 lg:block">
                    <div class="p-1.5 bg-gray-700 shadow-[0_2.75rem_5.5rem_-3.5rem_rgb(0_0_0_/_20%),_0_2rem_4rem_-2rem_rgb(0_0_0_/_30%),_inset_0_-0.1875rem_0.3125rem_0_rgb(0_0_0_/_20%)] rounded-3xl">
                        <img class="max-w-full rounded-[1.25rem] h-auto" src="<?php echo e(asset('storage/media/web-apllication-mobile-mhondoro-inc.jpg')); ?>" alt="Mhondoro Inc Mobile Web Development">
                    </div>
                </figure>
                <!-- End Mobile Device -->

                <!-- Browser Device -->
                <figure class="ms-auto me-20 relative z-[1] max-w-full w-[50rem] h-auto shadow-shadow-[0_2.75rem_3.5rem_-2rem_rgb(0_0_0_/_20%),_0_0_5rem_-2rem_rgb(0_0_0_/_15%)] rounded-b-lg">
                    <div class="relative flex items-center max-w-[50rem] bg-gray-800 border-b border-gray-700 rounded-t-lg py-2 px-24">
                        <div class="flex gap-x-1 absolute top-2/4 start-4 -translate-y-1">
                            <span class="size-2 bg-gray-700 rounded-full"></span>
                            <span class="size-2 bg-gray-700 rounded-full"></span>
                            <span class="size-2 bg-gray-700 rounded-full"></span>
                        </div>
                        <div class="flex justify-center items-center size-full bg-gray-700 text-[.25rem] sm:text-[.5rem] text-gray-200 rounded-sm">www.afroprenuer.online</div>
                    </div>

                    <div class="bg-gray-800 rounded-b-lg">
                        <img class="max-w-full h-auto rounded-b-lg" src="<?php echo e(asset('storage/media/web-apllication-mhondoro-inc.jpg')); ?>" alt="Mhondoro Inc Web Development">
                    </div>
                </figure>
                <!-- End Browser Device -->
            </div>
            <!-- End Devices -->
        </div>

        <div id="tabs-system-2-content-3" class="hidden" role="tabpanel" aria-labelledby="tabs-system-2-item-3">
            <!-- Devices -->
            <div class="max-w-[1140px] lg:pb-32 relative">
                <!-- Mobile Device -->
                <figure class="hidden absolute bottom-0 start-0 z-[2] max-w-full w-60 h-auto mb-20 ms-20 lg:block">
                    <div class="p-1.5 bg-gray-100 rounded-3xl shadow-[0_2.75rem_5.5rem_-3.5rem_rgb(45_55_75_/_20%),_0_2rem_4rem_-2rem_rgb(45_55_75_/_30%),_inset_0_-0.1875rem_0.3125rem_0_rgb(45_55_75_/_20%)] dark:shadow-[0_2.75rem_5.5rem_-3.5rem_rgb(0_0_0_/_20%),_0_2rem_4rem_-2rem_rgb(0_0_0_/_30%),_inset_0_-0.1875rem_0.3125rem_0_rgb(0_0_0_/_20%)] dark:bg-neutral-700">
                        <img class="max-w-full rounded-[1.25rem] h-auto" src="<?php echo e(asset('storage/media/kidu-travels-mobile-by-mhondoro-inc.jpg')); ?>" alt="Mhondoro Inc Web Development">
                    </div>
                </figure>
                <!-- End Mobile Device -->

                <!-- Browser Device -->
                <figure class="ms-auto me-20 relative z-[1] max-w-full w-[50rem] h-auto shadow-[0_2.75rem_3.5rem_-2rem_rgb(45_55_75_/_20%),_0_0_5rem_-2rem_rgb(45_55_75_/_15%)] dark:shadow-[0_2.75rem_3.5rem_-2rem_rgb(0_0_0_/_20%),_0_0_5rem_-2rem_rgb(0_0_0_/_15%)] rounded-b-lg">
                    <div class="relative flex items-center max-w-[50rem] bg-white border-b border-gray-100 rounded-t-lg py-2 px-24 dark:bg-neutral-800 dark:border-neutral-700">
                        <div class="flex gap-x-1 absolute top-2/4 start-4 -translate-y-1">
                            <span class="size-2 bg-gray-200 rounded-full dark:bg-neutral-700"></span>
                            <span class="size-2 bg-gray-200 rounded-full dark:bg-neutral-700"></span>
                            <span class="size-2 bg-gray-200 rounded-full dark:bg-neutral-700"></span>
                        </div>
                        <div class="flex justify-center items-center size-full bg-gray-200 text-[.25rem] text-gray-800 rounded-sm sm:text-[.5rem] dark:bg-neutral-700 dark:text-neutral-200">www.kidutravels.com</div>
                    </div>

                    <div class="bg-gray-800 rounded-b-lg">
                        <img class="max-w-full h-auto rounded-b-lg" src="<?php echo e(asset('storage/media/kidu-travels-by-mhondoro-inc.jpg')); ?>" alt="Mhondoro Inc Web Design">
                    </div>
                </figure>
                <!-- End Browser Device -->
            </div>
            <!-- End Devices -->
        </div>
    </div>
    <!-- End Tab Content -->
</div>
<!-- End our-work -->
            



    <div class="bg-violet-100 dark:bg-gradient-to-br from-gray-950 from-70% to-fuchsia-950 to 30% py-24 sm:py-32">
        <div class="mx-auto max-w-7xl py-24 sm:px-6 sm:py-32 lg:px-8">
            <div class="relative isolate overflow-hidden bg-gray-900 px-6 pt-16 shadow-2xl sm:rounded-3xl sm:px-16 md:pt-24 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0">
                <svg viewBox="0 0 1024 1024" class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-y-1/2 [mask-image:radial-gradient(closest-side,white,transparent)] sm:left-full sm:-ml-80 lg:left-1/2 lg:ml-0 lg:-translate-x-1/2 lg:translate-y-0" aria-hidden="true">
                    <circle cx="512" cy="512" r="512" fill="url(#759c1415-0410-454c-8f7c-9a820de03641)" fill-opacity="0.7" />
                    <defs>
                        <radialGradient id="759c1415-0410-454c-8f7c-9a820de03641">
                            <stop stop-color="#7775D6" />
                            <stop offset="1" stop-color="#E935C1" />
                        </radialGradient>
                    </defs>
                </svg>
                <div class="mx-auto max-w-md text-center lg:mx-0 lg:flex-auto lg:py-32 lg:text-left">
                    <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">You can download & use<br>this website for FREE!</h2>
                    <p class="mt-6 text-lg leading-8 text-gray-300">At Mhondoro Inc, we run an open source project, Apfroprenuers Online, an Agency website built using the TALL stack and is available for free download</p>
                    <div class="mt-10 flex items-center justify-center gap-x-6 lg:justify-start">
                        <a href="https://github.com/tawandajosephmutsena/Afroprenuer_Agency_Website" class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Get started</a>
                        <a href="https://github.com/tawandajosephmutsena/Afroprenuer_Agency_Website/blob/main/README.md" class="text-sm font-semibold leading-6 text-white">Learn more <span aria-hidden="true">→</span></a>
                    </div>
                </div>
                <div class="relative mt-16 h-80 lg:mt-8">
                    <img class="absolute left-0 top-0 w-[57rem] max-w-none rounded-md bg-white/5 ring-1 ring-white/10" src="<?php echo e(asset('storage/media/web-apllication-mhondoro-inc.jpg')); ?>" alt="Mhondoro Screenshot"> width="1824" height="1080">
                </div>
            </div>
        </div>
    </div>




    
<?php echo $__env->make('layouts.base', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/mac/Herd/an/resources/views/home.blade.php ENDPATH**/ ?>