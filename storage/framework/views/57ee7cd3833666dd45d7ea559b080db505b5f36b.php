<?php $__env->startSection('site_name',' | '.__('site.professional_experiences')); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo app('translator')->get('site.dashboard'); ?></a></li>
                <li  class="breadcrumb-item active" aria-current="page"><a href="#"><?php echo app('translator')->get('site.professional_experiences'); ?></a></li>
            </ol>
        </nav>
        <!-- Page Heading -->
        <h1 class="h3 m-0 font-weight-bold text-primary"><?php echo app('translator')->get('site.DataTablesprofessional_experiencesList'); ?>   </h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">

            <div class="card-header py-3">
                <a href="<?php echo e(route('admin.professional_experiences.create')); ?>" class="btn btn-primary btn-icon-split" style="float: right">
                    <span class="icon text-white-50">
                      <i class="fas fa-plus"></i>
                    </span>
                    <span class="text"> <?php echo app('translator')->get('site.add_professional_experiences'); ?></span>
                </a>

            </div>

            <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                      <tr>
                          <th><?php echo app('translator')->get('site.id'); ?></th>
                          <th><?php echo app('translator')->get('site.title'); ?> <hr>
                              <?php echo app('translator')->get('site.sub_title'); ?></th>
                          <th><?php echo app('translator')->get('site.desc'); ?></th>
                          <th><?php echo app('translator')->get('site.created_by'); ?>
                            </th>
                          <th><?php echo app('translator')->get('site.visiblity'); ?> <hr>
                              <?php echo app('translator')->get('site.from'); ?> - <?php echo app('translator')->get('site.to'); ?></th>
                        <th><?php echo app('translator')->get('site.action'); ?></th>
                      </tr>
                      </thead>
                      <tfoot>
                      <tr>
                          <th><?php echo app('translator')->get('site.id'); ?></th>
                          <th><?php echo app('translator')->get('site.title'); ?> <hr>
                              <?php echo app('translator')->get('site.sub_title'); ?></th>                          <th><?php echo app('translator')->get('site.desc'); ?></th>
                          <th><?php echo app('translator')->get('site.created_by'); ?>
                          </th>                          <th><?php echo app('translator')->get('site.visiblity'); ?><hr>
                              <?php echo app('translator')->get('site.from'); ?> - <?php echo app('translator')->get('site.to'); ?></th>
                          <th><?php echo app('translator')->get('site.action'); ?></th>

                      </tr>
                      </tfoot>
                      <tbody>
                      <?php $__currentLoopData = $professional_experiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $professional_ex): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                          <td><?php echo e($key + 1); ?> </td>
                          <td><?php echo e($professional_ex->title); ?> <hr> <?php echo e($professional_ex->sub_title); ?> </td>
                          <td><?php echo e(! empty($professional_ex->desc1)?__('site.desc1').' : '.$professional_ex->desc1:''); ?> <br>
                              <?php echo e(! empty($professional_ex->desc2)?__('site.desc2').' : '.$professional_ex->desc2:''); ?><br>
                              <?php echo e(! empty($professional_ex->desc3)?__('site.desc3').' : '.$professional_ex->desc3:''); ?></td>

                          <td> <small>
                                  <?php if($professional_ex->users->count() > 0): ?>
                                  <?php echo e($professional_ex->users->first()['name']); ?>

                                  <?php endif; ?>
                              </small> </td>
                          <td><?php echo e($professional_ex->enabled == 1?'Enabled':'Disabled'); ?>

                               <hr>
                              <?php echo e($professional_ex->from); ?>-<?php echo e($professional_ex->to); ?>

                          </td>

                          <td>
                               <a href="<?php echo e(route('admin.professional_experiences.edit',$professional_ex->id)); ?>" class="btn btn-success btn-circle btn-sm"><i class="fas fa-edit"></i></a>

                          <?php if($professional_ex->enabled == 1): ?>
                                   <a href="#" data-toggle="modal" data-target="#disabledModal_<?php echo e($professional_ex->id); ?>" href="#" class="btn btn-warning btn-circle btn-sm"><i class="fas fa-exclamation-triangle"></i></a>
                               <?php else: ?>
                                   <a href="#" data-toggle="modal" data-target="#enabledModal_<?php echo e($professional_ex->id); ?>" href="#" class="btn btn-primary btn-circle btn-sm"><i class="fas fa-check"></i></a>
                               <?php endif; ?>

                               <a href="#" data-toggle="modal" data-target="#logoutModal_<?php echo e($professional_ex->id); ?>" href="#" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
                           </td>

                      </tr>
                       <!-- Delete Modal-->
                      <div class="modal fade" id="logoutModal_<?php echo e($professional_ex->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('site.Ready_to_Delete'); ?>?</h5>
                                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">×</span>
                                      </button>
                                  </div>
                                  <small class="modal-body"><?php echo app('translator')->get('site.Select_Delete_below_if_you_are_ready_to_Delete'); ?><?php echo e($professional_ex->title); ?>. ?</small>
                                  <div class="modal-footer">
                                      <button class="btn btn-secondary" type="button" data-dismiss="modal"><?php echo app('translator')->get('site.cancel'); ?></button>
                                      <a class="btn btn-primary" href="<?php echo e(route('admin.professional_experiences.del',$professional_ex->id)); ?>"><?php echo app('translator')->get('site.delete'); ?>.</a>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <!-- disabledModal_-->
                      <div class="modal fade" id="disabledModal_<?php echo e($professional_ex->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('site.Ready_to_Disabled'); ?>?</h5>
                                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">×</span>
                                      </button>
                                  </div>
                                  <small class="modal-body"><?php echo app('translator')->get('site.Select_Disabled_below_if_you_are_ready_to_Disabled_This'); ?> <?php echo e($professional_ex->title); ?>. ?</small>
                                  <div class="modal-footer">
                                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                      <a class="btn btn-primary" href="<?php echo e(route('admin.professional_experiences.disabled',$professional_ex->id)); ?>">Disabled .</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- enabledModal_-->
                      <div class="modal fade" id="enabledModal_<?php echo e($professional_ex->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('site.Ready_to_Enable'); ?> ?</h5>
                                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">×</span>
                                      </button>
                                  </div>
                                  <small class="modal-body"><?php echo app('translator')->get('site.Select_Enable_below_if_you_are_ready_to_Enable_This'); ?>  <?php echo e($professional_ex->title); ?>. ?</small>
                                  <div class="modal-footer">
                                      <button class="btn btn-secondary" type="button" data-dismiss="modal"><?php echo app('translator')->get('site.cancel'); ?></button>
                                      <a class="btn btn-primary" href="<?php echo e(route('admin.professional_experiences.enabled',$professional_ex->id)); ?>"><?php echo app('translator')->get('site.enable'); ?> .</a>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                  </table>

                </div>
            </div>
        </div>

    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts._app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\profile\resources\views/dashboard/professional_experience/index.blade.php ENDPATH**/ ?>