

<?php $__env->startSection("contain"); ?>


<center><h1>Download's Data :-</h1><br><br>
<table border="2" class="table table-hover" height="70%" width="70%">
	<tr>
	<th>Book Id</th>
	<th>User Id</th>
	</tr>
	<?php $__currentLoopData = $download; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $down): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
	<td><?php echo e($down->bname); ?></td>
    <td><?php echo e($down->uname); ?></td>
	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table></center>
<?php $__env->stopSection(); ?>;
<?php echo $__env->make("layout.adminmaster", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Mansi\laravel\pdfdrive3\resources\views/download/index.blade.php ENDPATH**/ ?>