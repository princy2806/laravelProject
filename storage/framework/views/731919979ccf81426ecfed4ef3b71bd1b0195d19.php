

<?php $__env->startSection("contain"); ?>


<center><h1>Order Data :-</h1><br><br>
<table border="2" class="table table-hover" height="100%" width="100%">
	<tr>
	<th>Book Id</th>
	<th>User Id</th>
	<th>User Email</th>
	</tr>
	<?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ord): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
	<td><?php echo e($ord->bname); ?></td>
    <td><?php echo e($ord->uname); ?></td>
    <td><?php echo e($ord->email); ?></td>
	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table></center>
<?php $__env->stopSection(); ?>;
<?php echo $__env->make("layout.adminmaster", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Mansi\laravel\pdfdrive3\resources\views/ordermaster/index.blade.php ENDPATH**/ ?>