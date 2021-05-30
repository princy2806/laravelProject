

<?php $__env->startSection("contain"); ?>


<h1> Edit Book Details</h1>
<form action="<?php echo e(route('book.update', $book->id)); ?>" method="post">
<?php echo method_field('PATCH'); ?>
<?php echo csrf_field(); ?>
Enter Book Name :-<br>
<input type="text" name="bname" value="<?php echo e($book->bname); ?>"><br><br>
Enter Author Name :-<br>
<input type="text" name="bauthor" value="<?php echo e($book->bauthor); ?>"><br><br>
Enter Book Pages :-<br>
<input type="text" name="bpage" value="<?php echo e($book->bpage); ?>"><br><br>
Enter Book Size :-<br>
<input type="text" name="bsize" value="<?php echo e($book->bsize); ?>"><br><br>
Enter Book Cover :-<br>
<input type="file" name="bcover" value="<?php echo e($book->bcover); ?>"><br><br>
Enter Book Pdf :-<br>
<input type="file" name="bpdf" value="<?php echo e($book->bpdf); ?>"><br><br>

Enter Book Language :-<br>
<input type="text" name="blanguage" value="<?php echo e($book->blanguage); ?>" ><br><br>
Enter Book Publish Date :-<br>
<input type="date" name="bpubdate" value="<?php echo e($book->bpubdate); ?>" ><br><br>
Enter Category Id:-<br>
<input type="text" name="catid" value="<?php echo e($book->catid); ?>" ><br><br>
<input type="submit" value="submit" >
</form>
<?php $__env->stopSection(); ?>;
<?php echo $__env->make("layout.adminmaster", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\ansh\pdfdrive\resources\views/book/edit.blade.php ENDPATH**/ ?>