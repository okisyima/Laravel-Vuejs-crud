<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="jumbotron" id="jumbotron_index">

        <div class="text-center">
            <h1 id="x">LaravueCrud</h1>
            <h6 id="x">App CRUD Laravel + VueJs</h6>
        </div>

        <router-view></router-view>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/okisyima/Documents/Laravel/laravuecrud/resources/views/homepage.blade.php ENDPATH**/ ?>