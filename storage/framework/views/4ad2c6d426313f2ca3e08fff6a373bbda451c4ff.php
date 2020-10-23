<?php $__env->startSection('site_name','| '.$price->title ); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo app('translator')->get('site.dashboard'); ?></a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.aboutus.index')); ?>"><?php echo app('translator')->get('site.aboutus'); ?></a></li>
                <li class="breadcrumb-item active" aria-current="page"># <?php echo e($price->title); ?></li>
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
                                  <h5><?php echo app('translator')->get('site.'.$locale.'.title'); ?> : <?php echo e(! empty($price->translate($locale)->title)?$price->translate($locale)->title:''); ?></h5>
                                  <h6><?php echo app('translator')->get('site.'.$locale.'.sub_title'); ?> : <?php echo e(! empty($price->translate($locale)->sub_title)?$price->translate($locale)->sub_title:''); ?></h6>
                                  <?php if($price->translate($locale)->desc1): ?>
                                  <p><?php echo app('translator')->get('site.'.$locale.'.desc1'); ?> : <?php echo e(! empty($price->translate($locale)->desc1)?$price->translate($locale)->desc1:''); ?></p>
                                  <?php endif; ?>
                                  <?php if($price->translate($locale)->desc2): ?>
                                  <p><?php echo app('translator')->get('site.'.$locale.'.desc2'); ?> : <?php echo e(! empty($price->translate($locale)->desc2)?$price->translate($locale)->desc2:''); ?></p>
                                  <?php endif; ?>
                                <?php if($price->translate($locale)->desc3): ?>
                                      <p><?php echo app('translator')->get('site.'.$locale.'.desc3'); ?> : <?php echo e(! empty($price->translate($locale)->desc3)?$price->translate($locale)->desc3:''); ?></p>
                                  <?php endif; ?>
                                  <hr>

                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <strong>  <?php echo app('translator')->get('site.price'); ?> : <?php echo e($price->price); ?></strong>
                          </div>
                      </div>


                  </div>

                    <div class="col-lg-2">
                        <!-- Default Card Example -->
                        <div class="card shadow  mb-4">
                            <div class="card-header">Action</div>
                            <div class="card-body">
                                <a href="<?php echo e(route('admin.aboutus.show',$price->id)); ?>" class="btn btn-primary btn-circle btn-sm"><i class="fas fa-eye"></i></a>
                                <a href="<?php echo e(route('admin.aboutus.edit',$price->id)); ?>" class="btn btn-success btn-circle btn-sm"><i class="fas fa-edit"></i></a>


                                <?php if($price->enabled == 1): ?>
                                    <a href="#" data-toggle="modal" data-target="#disabledModal_<?php echo e($price->id); ?>" href="#" class="btn btn-warning btn-circle btn-sm"><i class="fas fa-exclamation-triangle"></i></a>
                                <?php else: ?>
                                    <a href="#" data-toggle="modal" data-target="#enabledModal_<?php echo e($price->id); ?>" href="#" class="btn btn-primary btn-circle btn-sm"><i class="fas fa-check"></i></a>
                                <?php endif; ?>

                                <a href="#" data-toggle="modal" data-target="#logoutModal_<?php echo e($price->id); ?>" href="#" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>




                            </div>
                        </div>
                      </div>
                    </div>
    </div>
    <!-- Delete Modal-->
    <div class="modal fade" id="logoutModal_<?php echo e($price->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('site.Ready_to_Delete'); ?>?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <small class="modal-body"><?php echo app('translator')->get('site.Select_Delete_below_if_you_are_ready_to_Delete'); ?><?php echo e($price->title); ?>. ?</small>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal"><?php echo app('translator')->get('site.cancel'); ?></button>
                    <a class="btn btn-primary" href="<?php echo e(route('admin.aboutus.del',$price->id)); ?>"><?php echo app('translator')->get('site.delete'); ?>.</a>
                </div>
            </div>
        </div>
    </div>

    <!-- disabledModal_-->
    <div class="modal fade" id="disabledModal_<?php echo e($price->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('site.Ready_to_Disabled'); ?>?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <small class="modal-body"><?php echo app('translator')->get('site.Select_Disabled_below_if_you_are_ready_to_Disabled_This'); ?> <?php echo e($price->title); ?>. ?</small>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?php echo e(route('admin.aboutus.disabled',$price->id)); ?>">Disabled .</a>
                </div>
            </div>
        </div>
    </div>
    <!-- enabledModal_-->
    <div class="modal fade" id="enabledModal_<?php echo e($price->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('site.Ready_to_Enable'); ?> ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <small class="modal-body"><?php echo app('translator')->get('site.Select_Enable_below_if_you_are_ready_to_Enable_This'); ?>  <?php echo e($price->title); ?>. ?</small>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal"><?php echo app('translator')->get('site.cancel'); ?></button>
                    <a class="btn btn-primary" href="<?php echo e(route('admin.aboutus.enabled',$price->id)); ?>"><?php echo app('translator')->get('site.enable'); ?> .</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="oneModal_<?php echo e($price->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('site.ready_to_make_it_primary'); ?> ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <small class="modal-body"><?php echo app('translator')->get('site.Select_one_below_if_you_are_ready_to_make_it_primary'); ?>  <?php echo e($price->title); ?>. ?</small>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal"><?php echo app('translator')->get('site.cancel'); ?></button>
                    <a class="btn btn-primary" href="<?php echo e(route('admin.aboutus.one',$price->id)); ?>"><?php echo app('translator')->get('site.one'); ?> .</a>
                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts._app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\profile\resources\views/dashboard/prices/show.blade.php ENDPATH**/ ?>