<?php $__env->startSection('site_name',' | '.__('site.prices')); ?>

<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo app('translator')->get('site.dashboard'); ?></a></li>
                <li  class="breadcrumb-item active" aria-current="page"><a href="#"><?php echo app('translator')->get('site.prices'); ?></a></li>
            </ol>
        </nav>
        <!-- Page Heading -->
        <h1 class="h3 m-0 font-weight-bold text-primary"><?php echo app('translator')->get('site.DataTablesPricesList'); ?>   </h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">

            <div class="card-header py-3">
                <a href="<?php echo e(route('admin.prices.create')); ?>" class="btn btn-primary btn-icon-split" style="float: right">
                    <span class="icon text-white-50">
                      <i class="fas fa-plus"></i>
                    </span>
                    <span class="text"> <?php echo app('translator')->get('site.add_price'); ?></span>
                </a>

            </div>

            <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                      <tr>
                          <th><?php echo app('translator')->get('site.title'); ?></th>
                          <th><?php echo app('translator')->get('site.sub_title'); ?></th>
                          <th><?php echo app('translator')->get('site.created_by'); ?></th>
                          <th><?php echo app('translator')->get('site.visiblity'); ?></th>
                        <th><?php echo app('translator')->get('site.action'); ?></th>
                      </tr>
                      </thead>
                      <tfoot>
                      <tr>
                          <th><?php echo app('translator')->get('site.title'); ?></th>
                          <th><?php echo app('translator')->get('site.sub_title'); ?></th>
                          <th><?php echo app('translator')->get('site.created_by'); ?></th>
                          <th><?php echo app('translator')->get('site.visiblity'); ?></th>
                          <th><?php echo app('translator')->get('site.action'); ?></th>

                      </tr>
                      </tfoot>
                      <tbody>
                      <?php $__currentLoopData = $prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                          <td><?php echo e($price->title); ?> </td>
                          <td><?php echo e($price->sub_title); ?> </td>

                          <td> <small>
                                  <?php if($price->users->count() > 0): ?>
                                  <?php echo e($price->users->first()['name']); ?>

                                  <?php endif; ?>
                              </small> </td>
                          <td><?php echo e($price->enabled == 1?'Enabled':'Disabled'); ?></td>

                          <td>
                              <a href="<?php echo e(route('admin.prices.show',$price->id)); ?>" class="btn btn-primary btn-circle btn-sm"><i class="fas fa-eye"></i></a>
                              <a href="<?php echo e(route('admin.prices.edit',$price->id)); ?>" class="btn btn-success btn-circle btn-sm"><i class="fas fa-edit"></i></a>

                          <?php if($price->enabled == 1): ?>
                                   <a href="#" data-toggle="modal" data-target="#disabledModal_<?php echo e($price->id); ?>" href="#" class="btn btn-warning btn-circle btn-sm"><i class="fas fa-exclamation-triangle"></i></a>
                               <?php else: ?>
                                   <a href="#" data-toggle="modal" data-target="#enabledModal_<?php echo e($price->id); ?>" href="#" class="btn btn-primary btn-circle btn-sm"><i class="fas fa-check"></i></a>
                               <?php endif; ?>

                               <a href="#" data-toggle="modal" data-target="#logoutModal_<?php echo e($price->id); ?>" href="#" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
                           </td>

                      </tr>
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
                                      <a class="btn btn-primary" href="<?php echo e(route('admin.prices.del',$price->id)); ?>"><?php echo app('translator')->get('site.delete'); ?>.</a>
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
                                      <a class="btn btn-primary" href="<?php echo e(route('admin.prices.disabled',$price->id)); ?>">Disabled .</a>
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
                                      <a class="btn btn-primary" href="<?php echo e(route('admin.prices.enabled',$price->id)); ?>"><?php echo app('translator')->get('site.enable'); ?> .</a>
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
                                      <a class="btn btn-primary" href="<?php echo e(route('admin.prices.one',$price->id)); ?>"><?php echo app('translator')->get('site.one'); ?> .</a>
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

<?php echo $__env->make('dashboard.layouts._app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\profile\resources\views/dashboard/prices/index.blade.php ENDPATH**/ ?>