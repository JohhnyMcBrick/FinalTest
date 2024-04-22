<php?


<?php $__env->startSection('content'); ?>
    <h1>Lista de Asignaturas</h1>
    <a href="<?php echo e(route('asignaturas.create')); ?>">Crear Asignatura</a>
    
    <ul>
        <?php $__currentLoopData = $asignaturas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $asignatura): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($asignatura->nombre); ?></li>
            <a href="<?php echo e(route('asignaturas.edit', $asignatura)); ?>">Editar</a>
            <form action="<?php echo e(route('asignaturas.destroy', $asignatura)); ?>" method="GET">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit">Borrar</button>
            </form>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php $__env->stopSection(); ?> 

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\actividadfinal\resources\views/index.blade.php ENDPATH**/ ?>