<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title', 'Laravel'); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>

    <?php echo $__env->yieldContent('head-content'); ?>
</head>
<body>
    <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main>
        <?php echo $__env->yieldContent('main-content'); ?>
    </main>

    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('script-content'); ?>
</body>
</html><?php /**PATH /Users/amedeopiospina/Desktop/Boolean/laravel-general-crud/resources/views/layouts/app.blade.php ENDPATH**/ ?>