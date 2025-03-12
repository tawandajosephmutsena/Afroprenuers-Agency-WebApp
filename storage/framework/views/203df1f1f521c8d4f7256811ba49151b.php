<?php
    $navigation = \App\Models\Navigation::where('slug', $slug)->first();
?>

<?php if($navigation && !empty($navigation->items)): ?>
    <ul class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-transparent dark:border-gray-700">
        <?php $__currentLoopData = $navigation->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $label = $item['label'] ?? $item['data']['label'] ?? null;
                $pageId = $item['page_id'] ?? $item['data']['page_id'] ?? null;
                $page = \Z3d0X\FilamentFabricator\Models\Page::find($pageId);
            ?>
            <?php if($page && $label): ?>
                <li>
                    <a href="<?php echo e($page->slug === '/' ? '/' : '/'.$page->slug); ?>" 
                       class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                        <?php echo e($label); ?>

                    </a>
                </li>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        <li>
            <?php if(auth()->guard()->check()): ?>
                <a href="/admin" 
               
                    button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                        <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-transparent group-hover:dark:bg-transparent">
                        Dashboard
                        </span>
                    </button>                    
                </a>
            <?php else: ?>
                <a href="/admin/login" 
                button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                        <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-transparent group-hover:dark:bg-transparent">
                        Login
                        </span>
                    </button>                      
                </a>
            <?php endif; ?>
        </li>
    </ul>
<?php endif; ?><?php /**PATH /Users/mac/Herd/an/resources/views/components/navigation.blade.php ENDPATH**/ ?>