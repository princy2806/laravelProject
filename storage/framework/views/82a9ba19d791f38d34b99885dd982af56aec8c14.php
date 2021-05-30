

<?php $__env->startSection("contain"); ?>


<center><h1>User Data :-</h1>
<a href="usermaster/create"> Add New Data</a><br><br>
<table border="2" class="table table-hover" height="100%" width="100%">
	<tr>
	<th>User Name</th>
	<th>Email Id</th>
	<th>User Type</th>
	<th>Action</th>
	</tr>
	<?php $__currentLoopData = $usermaster; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
	<td><?php echo e($user->uname); ?></td>
	<td><?php echo e($user->uemail); ?></td>
	<td><?php echo e($user->utype); ?></td>
	
	<td>
	<a href="usermaster/<?php echo e($user->id); ?>/edit">Edit</a> / <a href="usermaster/<?php echo e($user->id); ?>/destroy">Delete</a>
	<!-- <form method="post" action="<?php echo e(route('usermaster.destroy', $user->id)); ?>">
	<?php echo method_field('DELETE'); ?>
	<?php echo csrf_field(); ?>
	<input type="submit" value="Delete" />	
	</form>-->
	</td>
	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table></center>
<?php $__env->stopSection(); ?>;
<?php echo $__env->make("layout.adminmaster", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Mansi\laravel\pdfdrive3\resources\views/usermaster/index.blade.php ENDPATH**/ ?>