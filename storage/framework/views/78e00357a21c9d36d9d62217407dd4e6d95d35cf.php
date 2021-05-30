

<?php $__env->startSection("contain"); ?>


<h1>User Details</h1>
<form action="<?php echo e(route('usermaster.store')); ?>" method="post">
<?php echo csrf_field(); ?>
Enter User Name :-<br>
<input type="text" name="uname"><br><br>
Enter Email Id :-<br>
<input type="text" name="uemail"><br><br>
Enter Password :-<br>
<input type="password" name="upassword"><br><br>
Confirm Password :-<br>
<input type="passeord" name="cpassword"><br><br>
User Type :-<br>
<input type="text" name="utype" ><br><br>

<br><br>
<input type="submit" value="submit" >
</form>
<?php $__env->stopSection(); ?>;
<?php echo $__env->make("layout.adminmaster", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\ansh\pdfdrive 27-2\resources\views/usermaster/create.blade.php ENDPATH**/ ?>