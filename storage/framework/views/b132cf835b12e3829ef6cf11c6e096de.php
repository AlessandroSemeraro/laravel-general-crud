<?php $__env->startSection('main-content'); ?>
<section class="container">
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo e($pokemon->img_url); ?>" alt="<?php echo e($pokemon->name); ?>">
        <div class="card-body">
        <h5 class="card-title">
            N° <?php echo e($pokemon->id); ?>

        </h5>
        <p class="card-text">
            Name: <?php echo e($pokemon->name); ?>

        </p>
        <p class="card-text">
            Type: <?php echo e($pokemon->species); ?>

        </p>
        <p class="card-text">
            Height: <?php echo e($pokemon->height); ?>

        </p>
        <p class="card-text">
            Weight: <?php echo e($pokemon->weight); ?>

        </p>
        <p class="card-text">
            Abilities: <?php echo e($pokemon->abilities); ?>

        </p>
        <p class="card-text">
            Hp: <?php echo e($pokemon->hp); ?>

        </p>
        <p class="card-text">
            Attack: <?php echo e($pokemon->attack); ?>

        </p>
        <p class="card-text">
            Defense: <?php echo e($pokemon->defense); ?>

        </p>
        <p class="card-text">
            Speed attack: <?php echo e($pokemon->speed_attack); ?>

        </p>
        <p class="card-text">
            Speed defence: <?php echo e($pokemon->speed_defence); ?>

        </p>
        <p class="card-text">
            Speed: <?php echo e($pokemon->speed); ?>

        </p>
        </div>
      </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/amedeopiospina/Desktop/Boolean/laravel-general-crud/resources/views/admin/pokemons/show.blade.php ENDPATH**/ ?>