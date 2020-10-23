<?php $__env->startSection('site_name',' | Trash'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Trash</li>
            </ol>
        </nav>
        <div class="row">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>From</th>
                        <th>Info</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>From</th>
                        <th>Info</th>
                        <th>Action</th>

                    </tr>
                    </tfoot>
                    <tbody>
                    
<?php if($articels->count() > 0 ): ?>
   <?php $__currentLoopData = $articels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td> <a href="<?php echo e(route('articles.index')); ?>">Articels</a> </td>
                            <td><?php echo e(substr($articel->title,0,100)); ?></td>
                            <td>
                                <?php if (app('laratrust')->can('articels-read')) : ?>
                                <a href="<?php echo e(route('articles.show',$articel->id)); ?>" class="btn btn-info btn-circle btn-sm"><i class="fas fa-eye"></i></a>
                                <?php endif; // app('laratrust')->can ?>
                                <?php if (app('laratrust')->can('articels-update')) : ?>
                                <a href="<?php echo e(route('articles.edit',$articel->id)); ?>" class="btn btn-success btn-circle btn-sm"><i class="fas fa-edit"></i></a>
                                <?php endif; // app('laratrust')->can ?>
                                <?php if (app('laratrust')->can('trash-delete')) : ?>

                                <a href="#" data-toggle="modal" data-target="#reModal_<?php echo e($articel->id); ?>" href="#" class="btn btn-info btn-circle btn-sm"><i class="fas fa-backward"></i></a>
                                <a href="#" data-toggle="modal" data-target="#logoutModal_<?php echo e($articel->id); ?>" href="#" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
                                <?php endif; // app('laratrust')->can ?>
                            </td>

                        </tr>
                        <?php if (app('laratrust')->can('trash-delete')) : ?>

                        <!-- Delete Modal-->
                        <div class="modal fade" id="logoutModal_<?php echo e($articel->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Ready to Delete?</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <small class="modal-body">Select "Delete" below if you are ready to Delete <?php echo e($articel->title); ?>. ?</small>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                        <a class="btn btn-primary" href="<?php echo e(route('articles.destroy.art',$articel->id)); ?>">Delete.</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="reModal_<?php echo e($articel->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Ready to Restore?</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <small class="modal-body">Select "Delete" below if you are ready to Restore <?php echo e($articel->title); ?>. ?</small>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                        <a class="btn btn-primary" href="<?php echo e(route('articles.restore',$articel->id)); ?>">Restore.</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; // app('laratrust')->can ?>


                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
                    
<?php if($replies->count() > 0 ): ?>
<?php $__currentLoopData = $replies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td> <a href="<?php echo e(route('replies.index')); ?>">Replies</a> </td>
        <td><?php echo e(substr($reply->desc,0,60)); ?>..</td>

        <td>
            <?php if (app('laratrust')->can('replies-read')) : ?>
            <a href="<?php echo e(route('replies.show',$reply->id)); ?>" class="btn btn-info btn-circle btn-sm"><i class="fas fa-eye"></i></a>
            <?php endif; // app('laratrust')->can ?>
            <?php if (app('laratrust')->can('replies-update')) : ?>
            <a href="<?php echo e(route('replies.edit',$reply->id)); ?>" class="btn btn-success btn-circle btn-sm"><i class="fas fa-edit"></i></a>
            <?php endif; // app('laratrust')->can ?>

            <?php if (app('laratrust')->can('trash-delete')) : ?>
            <a href="#" data-toggle="modal" data-target="#rpliesModal_<?php echo e($reply->id); ?>" href="#" class="btn btn-info btn-circle btn-sm"><i class="fas fa-backward"></i></a>

            <a href="#" data-toggle="modal" data-target="#logoutModal_<?php echo e($reply->id); ?>" href="#" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>


            <?php endif; // app('laratrust')->can ?>
        </td>

    </tr>
    <?php if (app('laratrust')->can('trash-delete')) : ?>

    <!-- Delete Modal-->
    <div class="modal fade" id="logoutModal_<?php echo e($reply->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Delete?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <small class="modal-body">Select "Delete" below if you are ready to Delete <?php echo e(substr($reply->desc,0,60)); ?>. ?</small>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?php echo e(route('replies.destroy.art',$reply->id)); ?>">Delete.</a>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="rpliesModal_<?php echo e($reply->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Restore?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <small class="modal-body">Select "Delete" below if you are ready to Restore <?php echo e(substr($reply->desc,0,60)); ?>. ?</small>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?php echo e(route('replies.restore',$reply->id)); ?>">Restore.</a>
                </div>
            </div>
        </div>
    </div> <?php endif; // app('laratrust')->can ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
                    
<?php if($channels->count() > 0 ): ?>
    <?php $__currentLoopData = $channels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $channel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td>                <a href="<?php echo e(route('channels.index')); ?>">Channels</a></td>
            <td><?php echo e($channel->title); ?> </td>

            <td>
                
                
                
                <?php if (app('laratrust')->can('channels-update')) : ?>
                <a href="<?php echo e(route('channels.edit',$channel->id)); ?>" class="btn btn-success btn-circle btn-sm"><i class="fas fa-edit"></i></a>
                <?php endif; // app('laratrust')->can ?>
                <?php if (app('laratrust')->can('trash-delete')) : ?>
                <a href="#" data-toggle="modal" data-target="#channelsModal_<?php echo e($channel->id); ?>" href="#" class="btn btn-info btn-circle btn-sm"><i class="fas fa-backward"></i></a>
                <a href="#" data-toggle="modal" data-target="#logoutChannelModal_<?php echo e($channel->id); ?>" href="#" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
                <?php endif; // app('laratrust')->can ?>
            </td>

        </tr>
        <?php if (app('laratrust')->can('trash-delete')) : ?>
        <!-- Delete Modal-->
        <div class="modal fade" id="logoutChannelModal_<?php echo e($channel->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Delete?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <small class="modal-body">Select "Delete" below if you are ready to Delete <?php echo e($channel->title); ?>. ?</small>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="<?php echo e(route('channels.destroy.art',$channel->id)); ?>">Delete.</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Restore-->
        <div class="modal fade" id="channelsModal_<?php echo e($channel->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Restore?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <small class="modal-body">Select "Disabled" below if you are ready to Disabled This Restore <?php echo e($channel->title); ?>. ?</small>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="<?php echo e(route('channels.restore',$channel->id)); ?>">Restore .</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; // app('laratrust')->can ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
                     
<?php if($contacts->count() > 0): ?>
    <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
              <td> <a href="<?php echo e(route('contact.index')); ?>">Contacts</a> </td>
              <td><?php echo e($contact->subject); ?></td>
            <td>
                <?php if (app('laratrust')->can('replies-read')) : ?>
                <a href="<?php echo e(route('contact.show',$contact->id)); ?>" class="btn btn-info btn-circle btn-sm"><i class="fas fa-eye"></i></a>
                <?php endif; // app('laratrust')->can ?>

                <?php if (app('laratrust')->can('trash-delete')) : ?>
                <a href="#" data-toggle="modal" data-target="#contactssModal_<?php echo e($contact->id); ?>" class="btn btn-info btn-circle btn-sm"><i class="fas fa-backward"></i></a>
                <a href="#" data-toggle="modal" data-target="#contaoutModal_<?php echo e($contact->id); ?>"  class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
                <?php endif; // app('laratrust')->can ?>
            </td>

        </tr>
        <?php if (app('laratrust')->can('trash-delete')) : ?>

        <!-- Delete Modal-->
        <div class="modal fade" id="contaoutModal_<?php echo e($contact->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Delete?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <small class="modal-body">Select "Delete" below if you are ready to Delete <?php echo e($contact->title); ?>. ?</small>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="<?php echo e(route('contact.destroy.art',$contact->id)); ?>">Delete.</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Restore-->
        <div class="modal fade" id="contactssModal_<?php echo e($contact->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Restore?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <small class="modal-body">Select "Disabled" below if you are ready to Disabled This Restore <?php echo e($contact->subject); ?>. ?</small>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="<?php echo e(route('contact.restore',$contact->id)); ?>">Restore .</a>
                    </div>
                </div>
            </div>
        </div>

        <?php endif; // app('laratrust')->can ?>


    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts._app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\profile\resources\views\dashboard\settings\trash.blade.php ENDPATH**/ ?>