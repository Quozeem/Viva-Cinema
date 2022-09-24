
 <?php echo $__env->make('layouts.adminside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<form method="post" action="<?php echo e(route('insert-movies')); ?>" >
   <?php echo csrf_field(); ?>

   Cinema Location
       <select id="cinema_location_id" 
       required=""    name="cinema_location_id[]" multiple="multiple"
       >
       <option>Select Location</option>	
       <?php if($available_cinema != null): ?>
<?php $__currentLoopData = $available_cinema; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<option value="<?php echo e($row->id); ?>">
<?php echo e($row->cinema_location); ?>

</option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
{"Currently not available"} 
<?php endif; ?>
</select>

<br><br>
Add Movies 
<input type="text" name="list_movies"  required=""/>
<br><br>
<input type="submit" value="Submit">
</form>
</html>
</body><?php /**PATH C:\Users\DELL\Documents\laravel\Cinema\React\resources\views/addMovies.blade.php ENDPATH**/ ?>