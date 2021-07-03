<?php $__env->startSection('title','edit'); ?>


<?php $__env->startSection('content'); ?>


<div class="container-fluid">
    <form method="post" action="<?php echo e(route('admin.update',[$author->id])); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>
           <div class="form-group">
               <label>Nama</label>
               <input type="text" name="name" class="form-control" value="<?php echo e($author->name); ?>">
           </div>
           <div class="form-group">
            <label>Picture</label>
            <input type="file" name="picture" class="form-control" value="<?php echo e($author->picture); ?>" >
            
           </div>
           <div class="form-group">
               <label>Address</label>
               <input type="text" name="address" class="form-control" value="<?php echo e($author->address); ?>">
           </div>                                       
            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
       </form>
</div>



<?php $__env->stopSection(); ?>




<?php echo $__env->make('admin.template.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Nanang Qosim\Documents\laravel5\resources\views/admin/edit.blade.php ENDPATH**/ ?>