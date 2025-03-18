<div
    x-data="{}"
    x-on:click="$dispatch('open-modal', { id: 'database-notifications' })"
    <?php echo e($attributes->class(['inline-block'])); ?>

>
    <?php echo e($slot); ?>

</div>
<?php /**PATH /Users/mac/Herd/an/vendor/filament/notifications/src/../resources/views/components/database/trigger.blade.php ENDPATH**/ ?>