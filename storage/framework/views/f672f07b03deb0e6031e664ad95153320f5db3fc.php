

<?php $__env->startSection("contain"); ?>


<center><h1>Book Data :-</h1>
<a href="book/create"> Add New Data</a><br><br>
<table border="2" class="table table-hover" height="100%" width="100%">
	<tr>
	<th>Book Name</th>
	<th>Author Name</th>
	<th>Pages</th>
	<th>Size</th>
	<th>Cover</th>
	<th>Book Pdf</th>
	<th>Language</th>
	<th>Publish Date</th>
	<th>Category Id</th>
	<th>Action</th>
	</tr>
	<?php $__currentLoopData = $book->sortByDesc('id'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
	<td><?php echo e($b->bname); ?></td>
	<td><?php echo e($b->bauthor); ?></td>
	<td><?php echo e($b->bpage); ?></td>
	<td><?php echo e($b->bsize); ?></td>
	<td>
		<img src="<?php echo e('bookimages/' . $b->bcover); ?>" width="100px" height="100px"/>
	</td>
	<td>
		<a target="_blank" href="<?php echo e('bookpdf/' . $b->bpdf); ?>" > View </a>
	</td>
	
	<td><?php echo e($b->blanguage); ?></td>
	<td><?php echo e($b->bpubdate); ?></td>
	<td><?php echo e($b->catname); ?></td>
	<td>
	<a href="book/<?php echo e($b->id); ?>/edit">Edit</a> / <a href="book/<?php echo e($b->id); ?>/destroy">Delete</a>
	<!-- <form method="post" action="<?php echo e(route('book.destroy', $b->id)); ?>">
	<?php echo method_field('DELETE'); ?>
	<?php echo csrf_field(); ?>
	<input type="submit" value="Delete" />	
	</form>-->
	</td>
	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table></center>
<?php $__env->stopSection(); ?>;
<?php echo $__env->make("layout.adminmaster", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Mansi\laravel\pdfdrive3\resources\views/book/index.blade.php ENDPATH**/ ?>