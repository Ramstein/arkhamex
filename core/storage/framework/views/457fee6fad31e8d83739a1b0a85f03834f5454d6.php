<?php $__env->startSection('content'); ?>
<div class="container-fluid mt--6">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><?php echo e(__('Add status update')); ?></h3>
                    </div>
                    <div class="card-body">
                        <p class="text-danger"></p>
                        <form action="<?php echo e(route('admin.sand.plan.status.update')); ?>" method="post" >
                        <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Information')); ?></label>
                                <div class="col-lg-10">
                                    <textarea type="text" name="information" rows="5" class="form-control" required><?php echo e($plan->information); ?></textarea>
                                    <input type="hidden" name="plan" value="<?php echo e($plan->id); ?>">
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Report')); ?></label>
                                <div class="col-lg-10">
                                    <textarea type="text" name="report" rows="5" class="form-control" required><?php echo e($plan->report); ?></textarea>
                                </div>
                            </div>                           
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Activity')); ?></label>
                                <div class="col-lg-10">
                                    <textarea type="text" name="activity" rows="5" class="form-control" required><?php echo e($plan->activity); ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Stage')); ?></label>
                                <div class="col-lg-10">
                                    <input type="text" name="stage" class="form-control" value="<?php echo e($plan->stage); ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Weeks')); ?></label>
                                <div class="col-lg-10">
                                    <input type="text" name="weeks" class="form-control" value="<?php echo e($plan->weeks); ?>" required>
                                </div>
                            </div>                                                        
                            <div class="text-right">
                                <button type="submit" class="btn btn-success btn-sm"><?php echo e(__('Save')); ?></button>
                            </div>
                        </form>
                    </div>
                </div> 
            </div>            
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\core\resources\views/admin/project/edit_status.blade.php ENDPATH**/ ?>