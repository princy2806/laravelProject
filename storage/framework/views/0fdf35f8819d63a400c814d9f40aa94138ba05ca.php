

<?php $__env->startSection("contain"); ?>


<h1> Edit User Details</h1>
<form action="<?php echo e(route('usermaster.update', $user->id)); ?>" method="post">
<?php echo method_field('PATCH'); ?>
<?php echo csrf_field(); ?>
Enter User Name :-<br>
<input type="text" name="uname" value="<?php echo e($user->uname); ?>"><br><br>
Enter Email Id :-<br>
<input type="text" name="uemail" value="<?php echo e($user->uemail); ?>"><br><br>
Enter Password :-<br>
<input type="password" name="upassword" value="<?php echo e($user->upassword); ?>"><br><br>
Confirm Password :-<br>
<input type="password" name="cpassword" value="<?php echo e($user->upassword); ?>"><br><br>
User Type :-<br>
<input type="text" name="utype" value="<?php echo e($user->utype); ?>"><br><br>

<input type="submit" value="submit" >
</form>
<?php $__env->stopSection(); ?>;
<?php echo $__env->make("layout.adminmaster", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\ansh\pdfdrive\resources\views/usermaster/edit.blade.php ENDPATH**/ ?>