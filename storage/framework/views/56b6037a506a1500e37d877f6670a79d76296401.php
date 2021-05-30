

<?php $__env->startSection("contain"); ?>


<h1>Book Details</h1>
<form action="<?php echo e(route('book.store')); ?>" method="post"  enctype="multipart/form-data">
<?php echo csrf_field(); ?>
Enter Book Name :-<br>
<input type="text" name="bname"><br><br>
Enter Author Name :-<br>
<input type="text" name="bauthor"><br><br>
Enter Book Pages :-<br>
<input type="text" name="bpage"><br><br>
Enter Book Size :-<br>
<input type="text" name="bsize" ><br><br>
Enter Book Cover :-<br>
<input type="file" name="bcover" ><br><br>
Enter Book Pdf :-<br>
<input type="file" name="bpdf" ><br><br>
Enter Book Language :-<br>
<input type="text" name="blanguage" ><br><br>
Enter Book Publish Date :-<br>
<input type="date" name="bpubdate" ><br><br>
Enter Category:-<br>
<select name="catid" >
	<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo e($c->id); ?>"><?php echo e($c->catname); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
<br><br>
<input type="submit" value="submit" >
</form>
<?php $__env->stopSection(); ?>;
<?php echo $__env->make("layout.adminmaster", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Mansi\laravel\pdfdrive3\resources\views/book/create.blade.php ENDPATH**/ ?>