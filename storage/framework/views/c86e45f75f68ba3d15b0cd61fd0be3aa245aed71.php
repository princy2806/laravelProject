

<?php $__env->startSection("contain"); ?>


<h1>Category Details</h1>
<form action="<?php echo e(route('category.store')); ?>" method="post" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
Enter Category Name :-<br>
<input type="text" name="cat_name"><br><br>
Enter Category Icon :-<br>
<input type="file" name="cat_icon"><br><br>

<input type="submit" value="submit" >
</form>
<?php $__env->stopSection(); ?>;
<?php echo $__env->make("layout.adminmaster", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\pdfdrive 27-2\resources\views/category/create.blade.php ENDPATH**/ ?>