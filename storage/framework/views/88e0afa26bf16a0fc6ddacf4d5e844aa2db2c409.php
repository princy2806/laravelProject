

<?php $__env->startSection("contain"); ?>


<center><h1>Category Data :-</h1>
<a href="category/create"> Add New Data</a><br><br>
<table border="2" class="table table-hover"  height="70%" width="70%">
	<tr>
	<th>Category Name</th>
	<th>Category Icon </th>
	<th>Action</th>
	</tr>
	<?php $__currentLoopData = $cat->sortByDesc('id'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
	<td><?php echo e($c->catname); ?></td>
	<td>
		<img src="<?php echo e('catimages/' . $c->caticon); ?>" width="100px" height="100px"/>
		</td>
	<td>
	<a href="category/<?php echo e($c->id); ?>/edit">Edit</a> / <a href="category/<?php echo e($c->id); ?>/destroy">Delete</a>
	<!-- <form method="post" action="<?php echo e(route('category.destroy', $c->id)); ?>">
	<?php echo method_field('DELETE'); ?>
	<?php echo csrf_field(); ?>
	<input type="submit" value="Delete" />	
	</form>-->
	</td>
	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table></center>

<?php $__env->stopSection(); ?>;

<?php echo $__env->make("layout.adminmaster", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\ansh\pdfdrive 27-2\resources\views/category/index.blade.php ENDPATH**/ ?>