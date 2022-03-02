


<?php $__env->startSection('content'); ?>
<div class="container-fluid mt--6">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-8">
        <div class="card" >
          <div class="card-header">
            <h3 class="mb-0 text-dark"><?php echo e(__('Bank Transfer')); ?></h3>
          </div>
          <div class="card-body">
          <form method="post" action="<?php echo e(route('bank_transfersubmit')); ?>" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
           <div class="form-group row">
              <label class="col-form-label col-lg-3"><?php echo e(__('Transfer Amount')); ?></label>
              <div class="col-lg-9">
                <div class="input-group">
                  <span class="input-group-prepend">
                    <span class="input-group-text"><?php echo e($currency->symbol); ?></span>
                  </span>
                <input type="number" step="any" name="amount" max-length="10" class="form-control">
                  </div>
                </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-lg-3"><?php echo e(__('Transfer Notes')); ?></label>
              <div class="col-lg-9">
                  <textarea type="text" class="form-control" rows="5" placeholder="<?php echo e(__('Transaction Details')); ?>" name="details" required></textarea>
              </div>
            </div> 
            <div class="form-group row">
              <label class="col-form-label col-lg-3"><?php echo e(__('Proof of Payment')); ?></label>
              <div class="col-lg-9">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFileLang" name="image" lang="en">
                  <label class="custom-file-label" for="customFileLang"><?php echo e(__('Choose Screenshot')); ?></label>
                </div>
              </div>
            </div> 
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
            <div class="text-right">
                <button type="submit" class="btn btn-primary btn-block"><?php echo e(__('Proceed')); ?></button>
            </div>
                </div>
              </div>
            </div>
          </form>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card" >
          <div class="card-body text-left">
            <div class="">
              <div>
                <h3 class="card-title mb-3 text-dark"><?php echo e(__('Bank details')); ?></h3>
                <ul class="list list-unstyled mb-0 card-text text-sm text-dark">
                  <?php if($bank->name!=null): ?><li><?php echo e(__('Name')); ?>: <?php echo e($bank->name); ?></li><?php endif; ?>
                  <?php if($bank->bank_name!=null): ?><li><?php echo e(__('Bank')); ?>: <?php echo e($bank->bank_name); ?></li><?php endif; ?>
                  <?php if($bank->address!=null): ?><li><?php echo e(__('Address')); ?>: <?php echo e($bank->address); ?></li><?php endif; ?>
                  <?php if($bank->swift!=null): ?><li><?php echo e(__('Swift Code')); ?>: <?php echo e($bank->swift); ?></li><?php endif; ?>
                  <?php if($bank->iban!=null): ?><li><?php echo e(__('Iban Code')); ?>: <?php echo e($bank->iban); ?></li><?php endif; ?>
                  <?php if($bank->acct_no!=null): ?><li><?php echo e(__('Account Number')); ?>: <?php echo e($bank->acct_no); ?></li><?php endif; ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('userlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\core\resources\views/user/fund/bank.blade.php ENDPATH**/ ?>