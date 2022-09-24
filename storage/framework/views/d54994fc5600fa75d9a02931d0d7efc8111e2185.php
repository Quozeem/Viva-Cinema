
 <?php echo $__env->make('layouts.adminside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

 <form method="post" action="<?php echo e(url('cinema_location')); ?>">
	<?php echo csrf_field(); ?>

Add Cinema Location
<input type="text" name="cinema_location"  required=""/>
<br><br>
<input type="submit" value="Submit">
</form>

</html>
</body><?php /**PATH C:\Users\DELL\Documents\laravel\Cinema\React\resources\views/admin.blade.php ENDPATH**/ ?>