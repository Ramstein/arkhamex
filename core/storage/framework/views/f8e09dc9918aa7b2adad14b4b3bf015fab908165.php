<?php $__env->startSection('content'); ?>
<div class="container-fluid mt--6">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="">
                <div class="card-body">
                    <a  href="<?php echo e(route('admin.sand.status.create', ['id' => $plan->id])); ?>" class="btn btn-sm btn-neutral"><i class="fa fa-plus"></i> <?php echo e(__('Status Update')); ?></a>
                </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h3 class="mb-0"><?php echo e(__('Plan Updates')); ?></h3>
                    </div>
                    <div class="table-responsive py-4">
                        <table class="table table-flush" id="datatable-buttons">
                        <thead>
                            <tr>
                            <th><?php echo e(__('S / N')); ?></th>
                            <th><?php echo e(__('Information')); ?></th>
                            <th><?php echo e(__('Report')); ?></th>
                            <th><?php echo e(__('Activity')); ?></th>
                            <th><?php echo e(__('Stage')); ?></th>
                            <th><?php echo e(__('Weeks')); ?></th>
                            <th></th>
                            </tr>
                        </thead>
                        <tbody>  
                            <?php $__currentLoopData = $updates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e(++$k); ?>.</td>
                                <td><?php echo e(str_limit($val->information, 10)); ?></td>
                                <td><?php echo e(str_limit($val->report, 10)); ?></td>
                                <td><?php echo e(str_limit($val->activity, 10)); ?></td>
                                <td><?php echo e($val->stage); ?></td>
                                <td><?php echo e($val->weeks); ?></td>
                                <td class="text-center">
                                    <div class="text-right">
                                        <div class="dropdown">
                                            <a class="text-dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a href="<?php echo e(route('admin.sand.plan.status.edit', ['id' => $val->id])); ?>" class="dropdown-item"><?php echo e(__('Edit Update')); ?></a>
                                                <a href="<?php echo e(route('admin.sand.plan.status.image', ['id' => $val->id])); ?>" class="dropdown-item"><?php echo e(__('Status Images')); ?></a>
                                            </div>
                                        </div>
                                    </div> 
                                </td> 
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        </table>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><?php echo e(__('Edit')); ?></h3>
                    </div>
                    <div class="card-body">
                        <p class="text-danger"></p>
                        <form action="<?php echo e(route('admin.sand.plan.update')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Name')); ?></label>
                                <div class="col-lg-10">
                                    <input type="text" name="name" class="form-control" value="<?php echo e($plan->name); ?>" reqiured>
                                    <input type="hidden" name="id" value="<?php echo e($plan->id); ?>">
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Category')); ?></label>
                                <div class="col-lg-10">
                                    <select class="form-control select" name="category" data-fouc required>   
                                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                        <option value="<?php echo e($val->id); ?>" <?php if($plan->cat_id==$val->id): ?> <?php echo e(__('selected')); ?> <?php endif; ?>><?php echo e($val->name); ?></option>    
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                                                          
                                    </select>
                                </div>
                            </div>                           
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Location')); ?></label>
                                <div class="col-lg-10">
                                    <input type="text" name="location" value="<?php echo e($plan->location); ?>" class="form-control" required>
                                </div>
                            </div>                                                      
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Status')); ?></label>
                                <div class="col-lg-10">
                                    <select class="form-control select" name="status">
                                        <option value="1" <?php if($plan->status==1): ?><?php echo e(__('selected')); ?> <?php endif; ?>><?php echo e(__('Active')); ?></option>
                                        <option value="0" <?php if($plan->status==0): ?><?php echo e(__('selected')); ?> <?php endif; ?>><?php echo e(__('Disable')); ?></option>
                                    </select>
                                </div>
                            </div>                           
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Insurance')); ?></label>
                                <div class="col-lg-10">
                                    <select class="form-control select" name="insurance">
                                        <option value="1" <?php if($plan->insurance==1): ?><?php echo e(__('selected')); ?> <?php endif; ?>><?php echo e(__('Yes')); ?></option>
                                        <option value="0" <?php if($plan->insurance==0): ?><?php echo e(__('selected')); ?> <?php endif; ?>><?php echo e(__('No')); ?></option>
                                    </select>
                                </div>
                            </div>   
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFileLang" name="image" lang="en">
                                    <label class="custom-file-label" for="customFileLang"><?php echo e(__('Choose Media')); ?> *</label>
                                </div>
                            </div>   
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="exampleDatepicker"><?php echo e(__('Start date')); ?></label>
                                <div class="col-lg-10">
                                    <input type="date-local" name="start_date" class="form-control datepicker" value="<?php echo e(str_replace('-', '/', $plan->start_date)); ?>" required>
                                    <span class="text-xs">This is the day investment will begin, you can only edit this if there are no investors</span>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Duration')); ?></label>
                                <div class="col-lg-10">
                                    <input type="number" name="duration" pattern="[0-9]+(\.[0-9]{0,2})?%?" value="<?php echo e($plan->duration); ?>" id="duration" class="form-control" placeholder="1" required>
                                    <span class="text-xs">This is the day investment will begin, you can only edit this if there are no investors</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Period')); ?></label>
                                <div class="col-lg-10">
                                    <select class="form-control select" name="period" data-fouc required>    
                                        <option value="Day" <?php if($plan->period=="Day"): ?><?php echo e(__('selected')); ?> <?php endif; ?>><?php echo e(__('Day - 1')); ?></option>                                         
                                        <option value="Week" <?php if($plan->period=="Week"): ?><?php echo e(__('selected')); ?> <?php endif; ?>><?php echo e(__('Week - 7')); ?></option>                                         
                                        <option value="Month" <?php if($plan->period=="Month"): ?><?php echo e(__('selected')); ?> <?php endif; ?>><?php echo e(__('Month - 30')); ?></option>                                         
                                        <option value="Year" <?php if($plan->period=="Year"): ?><?php echo e(__('selected')); ?> <?php endif; ?>><?php echo e(__('Year - 365')); ?></option>                                       
                                    </select>
                                    <span class="text-xs">This is the day investment will begin, you can only edit this if there are no investors</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Interest')); ?></label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="text" step="any" name="interest" value="<?php echo e($plan->interest); ?>" class="form-control" required>
                                        <span class="input-group-append">
                                            <span class="input-group-text">%</span>
                                        </span>
                                    </div>
                                    <span class="text-xs">This is the day investment will begin, you can only edit this if there are no investors</span>
                                </div>
                            </div>                            
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Price')); ?></label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="number" step="any" name="price" class="form-control" value="<?php echo e($plan->price); ?>" required>
                                        <span class="input-group-append">
                                            <span class="input-group-text"><?php echo e($currency->name); ?></span>
                                        </span>
                                    </div>
                                    <span class="text-xs">This is the day investment will begin, you can only edit this if there are no investors</span>
                                </div>
                            </div>                             
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Units')); ?></label>
                                <div class="col-lg-10">
                                        <input type="number" step="any" name="units" value="<?php echo e($plan->units); ?>" class="form-control" required>
                                        <span class="text-xs">This is the day investment will begin, you can only edit this if there are no investors</span>
                                </div>
                            </div>   
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2"><?php echo e(__('Referral percent')); ?></label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="text" name="ref_percent" maxlength="10" placeholder="2.5" value="<?php echo e($plan->ref_percent); ?>" class="form-control">
                                        <span class="input-group-append">
                                            <span class="input-group-text">%</span>
                                        </span>
                                    </div>
                                </div>
                            </div>                               
                            <div class="form-group row">
                                <label class="col-form-label col-lg-12"><?php echo e(__('Description')); ?></label>
                                <div class="col-lg-12">
                                    <textarea type="text" rows="8" name="description" class="form-control tinymce"><?php echo e($plan->description); ?></textarea>
                                </div>
                            </div>  
                            <div class="text-right">
                                <button type="submit" class="btn btn-success btn-sm"><?php echo e(__('Save')); ?></button>
                            </div>
                        </form>
                    </div>
                </div> 
            </div>            
            <div class="col-md-4">
                <div class="card-body text-center">
                    <div class="card-img-actions d-inline-block mb-3">
                        <img class="img-fluid" src="<?php echo e(url('/')); ?>/asset/images/<?php echo e($plan->image); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/flutter/core/resources/views/admin/project/edit.blade.php ENDPATH**/ ?>