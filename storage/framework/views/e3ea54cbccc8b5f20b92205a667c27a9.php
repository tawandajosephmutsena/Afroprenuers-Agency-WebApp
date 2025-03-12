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

    <div class="container mx-auto px-4 py-16 max-w-4xl">
        <div class="bg-white dark:bg-gray-800 shadow-xl rounded-xl overflow-hidden">
            <div class="p-6 sm:p-10 bg-gray-50 dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-gray-400 text-center">
                    Project Inquiry
                </h2>
                <p class="mt-4 text-center text-gray-600 dark:text-gray-400 max-w-xl mx-auto">
                    Share the details of your digital project. We'll review your inquiry and get back to you with a tailored solution.
                </p>
            </div>


          <form method="POST" action="<?php echo e(route('leads.store')); ?>" class="space-y-6 p-6 sm:p-10">
    <?php echo csrf_field(); ?>

    <!-- Personal Details -->
    <div class="grid md:grid-cols-2 gap-6">
        <div class="space-y-4">
            <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-400 border-b dark:border-gray-700 text-gray-400 pb-2">
                Personal Details
            </h3>
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-400 mb-2">Full Name</label>
                <div class="flex space-x-4">
                    <input 
                        type="text" 
                        name="first_name" 
                        placeholder="First Name" 
                        class="w-1/2 px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:ring-2 focus:ring-yellow-500 dark:bg-gray-900 dark:text-gray-400"
                        required
                    >
                    <input 
                        type="text" 
                        name="last_name" 
                        placeholder="Last Name" 
                        class="w-1/2 px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:ring-2 focus:ring-yellow-500 dark:bg-gray-900 dark:text-gray-400"
                        required
                    >
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Contact Information</label>
                <input 
                    type="email" 
                    name="email" 
                    placeholder="Email Address" 
                    class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:ring-2 focus:ring-blue-500 dark:bg-gray-900 dark:text-gray-400"
                    required
                >
                <input 
                    type="tel" 
                    name="phone" 
                    placeholder="Phone Number" 
                    class="w-full mt-4 px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:ring-2 focus:ring-blue-500 dark:bg-gray-900 dark:text-gray-400"
                >

                <input 
                    type="text" 
                    name="Address" 
                    placeholder="Adrress" 
                    class="w-full mt-4 px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:ring-2 focus:ring-blue-500 dark:bg-gray-900 dark:text-gray-400"
                >
            </div>
        </div>

        <!-- Project Overview -->
        <div class="space-y-4">
            <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-400 border-b dark:border-gray-700 pb-2">
                Project Overview
            </h3>
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Service of Interest</label>
                <select 
                    name="service" 
                    class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:ring-2 focus:ring-blue-500 dark:bg-gray-900 dark:text-gray-200"
                    required
                >
                    <option value="">Select a Service</option>
                    <option value="Web Application">Web Application</option>
                    <option value="Mobile Application">Mobile Application</option>
                    <option value="AI Automation Solutions">AI Automation Solutions</option>
                    <option value="Custom Project Systems">Custom Project Systems</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-400 mb-2">Project Budget</label>
                <select 
                    name="budget_range" 
                    class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:ring-2 focus:ring-blue-500 dark:bg-gray-900 dark:text-gray-400"
                >
                    <option value="">Select Budget Range</option>
                    <option value="1k-5k">$1,000 - $5,000</option>
                    <option value="5k-10k">$5,000 - $10,000</option>
                    <option value="10k-25k">$10,000 - $25,000</option>
                    <option value="25k-plus">$25,000+</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Project Details -->
    <div class="space-y-4">
        <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-400 border-b dark:border-gray-700 pb-2">Project Details</h3>
        <textarea 
            name="project_details" 
            rows="4" 
            placeholder="Describe your project goals, challenges, and expectations..."
            class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:ring-2 focus:ring-blue-500 dark:bg-gray-900 dark:text-gray-200"
        ></textarea>
    </div>

    <!-- Consent -->
    <div class="flex items-center space-x-4">
        <input 
            type="checkbox" 
            name="privacy_agreed" 
            value="1" 
            class="rounded text-yellow-600 focus:ring-blue-500 dark:bg-gray-700"
            required
        >
        <label class="text-sm text-gray-600 dark:text-gray-300">
            I agree to the 
            <a href="#" class="text-yellow-600 dark:text-yellow-500 hover:underline">
                privacy policy
            </a> 
            and terms of service
        </label>
    </div>

    <!-- Submit Button -->
    <div>
        <button 
            type="submit" 
            class="w-full py-3 bg-yellow-600 text-white rounded-md hover:bg-yellow-700 transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-opacity-50"
        >
            Submit Project Inquiry
        </button>
    </div>
</form>

        </div>

        <div class="mt-6 text-center text-gray-500 dark:text-gray-400 text-sm">
            © 2024 Mhondoro Inc. All rights reserved.
        </div>
    </div>




<?php echo $__env->make('layouts.base', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/mac/Herd/an/resources/views/contact.blade.php ENDPATH**/ ?>