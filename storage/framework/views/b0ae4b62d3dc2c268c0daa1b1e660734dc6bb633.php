

<?php $__env->startSection("contain"); ?>

<h1> Edit Category Details</h1>
<form action="<?php echo e(route('category.update', $cat->id)); ?>" method="post">
<?php echo method_field('PATCH'); ?>
<?php echo csrf_field(); ?>
Enter Category Name :-<br>
<input type="text" name="cat_name" value="<?php echo e($cat->catname); ?>"><br><br>
Enter Category Icon :-<br>
<input type="file" name="cat_icon" value="<?php echo e($cat->caticon); ?>"><br><br>

<input type="submit" value="submit" >
</form>
<?php $__env->stopSection(); ?>;
<?php echo $__env->make("layout.adminmaster", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\ansh\pdfdrive\resources\views/category/edit.blade.php ENDPATH**/ ?>