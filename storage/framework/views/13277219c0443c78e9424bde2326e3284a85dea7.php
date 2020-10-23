<?php $__env->startSection('site_name','| '.$about->title ); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo app('translator')->get('site.dashboard'); ?></a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.aboutus.index')); ?>"><?php echo app('translator')->get('site.aboutus'); ?></a></li>
                <li class="breadcrumb-item active" aria-current="page"># <?php echo e($about->title); ?></li>
            </ol>
        </nav>


                <div class="row">
                  <div class="col-lg-3">

                      <!-- Default Card Example -->
                      <div class="card shadow  mb-4">
                          <div class="card-header">
                              Info
                          </div>
                          <small class="card-body">

                        </small>
                      </div>
                  </div>

                  <div class="col-lg-7">

                      <!-- Dropdown Card Example -->
                      <div class="card shadow mb-4">
                          <!-- Card Header - Dropdown -->
                          <!-- Replys Card -->

                          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                              <?php echo app('translator')->get('site.all_information'); ?>
                          </div>
                          <div class="card-body">
                              <?php $__currentLoopData = config('translatable.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code => $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <center><?php echo app('translator')->get('site.'.$locale.'_lang'); ?></center>
                                  <h5><?php echo app('translator')->get('site.'.$locale.'.title'); ?> : <?php echo e(! empty($about->translate($locale)->title)?$about->translate($locale)->title:''); ?></h5>
                                  <h6><?php echo app('translator')->get('site.'.$locale.'.sub_title'); ?> : <?php echo e(! empty($about->translate($locale)->sub_title)?$about->translate($locale)->sub_title:''); ?></h6>
                                  <p><?php echo app('translator')->get('site.'.$locale.'.desc'); ?> : <?php echo e(! empty($about->translate($locale)->desc)?$about->translate($locale)->desc:''); ?></p>
                                  <strong><?php echo app('translator')->get('site.'.$locale.'.freelance'); ?> : <?php echo e(! empty($about->translate($locale)->freelance)?$about->translate($locale)->freelance:''); ?></strong>,
                                  <strong><?php echo app('translator')->get('site.'.$locale.'.degree'); ?> : <?php echo e(! empty($about->translate($locale)->degree)?$about->translate($locale)->degree:''); ?></strong>,
                                  <strong><?php echo app('translator')->get('site.'.$locale.'.address'); ?> : <?php echo e(! empty($about->translate($locale)->address)?$about->translate($locale)->address:''); ?></strong>
                                   <hr>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               <h4><?php echo app('translator')->get('site.birthday'); ?> : <?php echo e($about->birthday); ?></h4>
                               <h4><?php echo app('translator')->get('site.phone'); ?> : <?php echo e($about->phone); ?></h4>
                               <h4><?php echo app('translator')->get('site.email'); ?>  : <?php echo e($about->email); ?></h4>
                               <h4><?php echo app('translator')->get('site.is_it_in_profile'); ?> : <?php echo e($about->one == 1 ? __('site.yes'): __('site.no')); ?></h4>




                          </div>
                      </div>


                  </div>

                    <div class="col-lg-2">
                        <!-- Default Card Example -->
                        <div class="card shadow  mb-4">
                            <div class="card-header">Action</div>
                            <div class="card-body">
                                <a href="<?php echo e(route('admin.aboutus.show',$about->id)); ?>" class="btn btn-primary btn-circle btn-sm"><i class="fas fa-eye"></i></a>
                                <a href="<?php echo e(route('admin.aboutus.edit',$about->id)); ?>" class="btn btn-success btn-circle btn-sm"><i class="fas fa-edit"></i></a>
                                <?php if($about->one == 0): ?>
                                    <a href="#" data-toggle="modal" data-target="#oneModal_<?php echo e($about->id); ?>" href="#" class="btn btn-warning btn-circle btn-sm"><i class="fas fa-star"></i></a>
                                <?php endif; ?>

                                <?php if($about->enabled == 1): ?>
                                    <a href="#" data-toggle="modal" data-target="#disabledModal_<?php echo e($about->id); ?>" href="#" class="btn btn-warning btn-circle btn-sm"><i class="fas fa-exclamation-triangle"></i></a>
                                <?php else: ?>
                                    <a href="#" data-toggle="modal" data-target="#enabledModal_<?php echo e($about->id); ?>" href="#" class="btn btn-primary btn-circle btn-sm"><i class="fas fa-check"></i></a>
                                <?php endif; ?>

                                <a href="#" data-toggle="modal" data-target="#logoutModal_<?php echo e($about->id); ?>" href="#" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>




                            </div>
                        </div>
                      </div>
                    </div>
    </div>
    <!-- Delete Modal-->
    <div class="modal fade" id="logoutModal_<?php echo e($about->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('site.Ready_to_Delete'); ?>?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <small class="modal-body"><?php echo app('translator')->get('site.Select_Delete_below_if_you_are_ready_to_Delete'); ?><?php echo e($about->title); ?>. ?</small>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal"><?php echo app('translator')->get('site.cancel'); ?></button>
                    <a class="btn btn-primary" href="<?php echo e(route('admin.aboutus.del',$about->id)); ?>"><?php echo app('translator')->get('site.delete'); ?>.</a>
                </div>
            </div>
        </div>
    </div>

    <!-- disabledModal_-->
    <div class="modal fade" id="disabledModal_<?php echo e($about->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('site.Ready_to_Disabled'); ?>?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <small class="modal-body"><?php echo app('translator')->get('site.Select_Disabled_below_if_you_are_ready_to_Disabled_This'); ?> <?php echo e($about->title); ?>. ?</small>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?php echo e(route('admin.aboutus.disabled',$about->id)); ?>">Disabled .</a>
                </div>
            </div>
        </div>
    </div>
    <!-- enabledModal_-->
    <div class="modal fade" id="enabledModal_<?php echo e($about->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('site.Ready_to_Enable'); ?> ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <small class="modal-body"><?php echo app('translator')->get('site.Select_Enable_below_if_you_are_ready_to_Enable_This'); ?>  <?php echo e($about->title); ?>. ?</small>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal"><?php echo app('translator')->get('site.cancel'); ?></button>
                    <a class="btn btn-primary" href="<?php echo e(route('admin.aboutus.enabled',$about->id)); ?>"><?php echo app('translator')->get('site.enable'); ?> .</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="oneModal_<?php echo e($about->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('site.ready_to_make_it_primary'); ?> ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <small class="modal-body"><?php echo app('translator')->get('site.Select_one_below_if_you_are_ready_to_make_it_primary'); ?>  <?php echo e($about->title); ?>. ?</small>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal"><?php echo app('translator')->get('site.cancel'); ?></button>
                    <a class="btn btn-primary" href="<?php echo e(route('admin.aboutus.one',$about->id)); ?>"><?php echo app('translator')->get('site.one'); ?> .</a>
                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts._app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\profile\resources\views\dashboard\aboutus\show.blade.php ENDPATH**/ ?>