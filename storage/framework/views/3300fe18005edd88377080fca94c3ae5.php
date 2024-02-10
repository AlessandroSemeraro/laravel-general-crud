<?php $__env->startSection('main-content'); ?>
<section class="container">
    <div class="row">
        <div class="col3">
            <ul class="d-flex flex-wrap">
                <?php $__empty_1 = true; $__currentLoopData = $pokemons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pokemon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <li class="me-3 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo e($pokemon->img_url); ?>" class="card-img-top" alt="pokemon image">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo e($pokemon->name); ?> - <strong>N° <?php echo e($pokemon->id); ?></strong> </h4>
                            <h5 class="card-text"><?php echo e($pokemon->species); ?></h5>
                        </div>
                    </div>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <li>
                    Pokemons not found
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/amedeopiospina/Desktop/Boolean/laravel-general-crud/resources/views/admin/pokemons/index.blade.php ENDPATH**/ ?>