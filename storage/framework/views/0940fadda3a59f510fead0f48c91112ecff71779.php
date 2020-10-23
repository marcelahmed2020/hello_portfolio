<?php $__env->startSection('site_name',' | Contact Message '. $contact->subject.'..'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('contact.index')); ?>">Contacts</a></li>

                <li class="breadcrumb-item active" aria-current="page"> <?php echo e('Reply to #'.$contact->subject.'..'); ?></li>

            </ol>
        </nav>


        <div class="row">
            <div class="col-lg-3">

                <!-- Default Card Example -->
                <div class="card shadow text-primary  mb-4">
                    <div class="card-header">
                        Info
                    </div>
                    <small class="card-body">
                        <?php if(! empty($contact->user())): ?>
                            <?php if ($contact->user->admin == 1): ?>
                            <a href="<?php echo e(route('admins.show',$contact->user->id)); ?>">First read By admin : <?php echo e('@'.$contact->user->username); ?></a>
                            <?php else: ?>
                            <a href="<?php echo e(route('users.show',$contact->user->id)); ?>">First read By formar admin : <?php echo e('@'.$contact->user->username); ?></a>
                            <?php endif; ?>
                            <br>
                        <?php endif; ?>
                        <p> Read at : <?php echo e($contact->read); ?> </p>
                     <?php if($contact->response_by_id != 0): ?>
                                <?php if(! empty($contact->userResponse())): ?>
                                <?php if ($contact->userResponse->admin == 1): ?>
                                <a href="<?php echo e(route('admins.show',$contact->userResponse->id)); ?>">First response By admin : <?php echo e('@'.$contact->userResponse->username); ?></a>
                                <?php else: ?>
                                <a href="<?php echo e(route('users.show',$contact->userResponse->id)); ?>">First response By formar admin : <?php echo e('@'.$contact->userResponse->username); ?></a>
                                <?php endif; ?>
                                <?php endif; ?>
                            <?php else: ?>
                                No Resonse Yet
                            <?php endif; ?>


                    </small>
                </div>
            </div>

            <div class="col-lg-7">

                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <!-- Replys Card -->

                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="m-2 font-weight-bold text-primary">Full Name : <?php echo e($contact->full_name); ?> </h5>

                    </div>
                    <div class="card-body">

                        <h5 class="m-2 font-weight-bold text-primary">E-mail : <?php echo e($contact->email); ?> </h5>
                        <h6 class="m-2 font-weight-bold text-primary">Subject : <?php echo e($contact->subject); ?> </h6>
                        <p>Message: <?php echo $contact->message; ?></p>
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <div class="card-header"> Lets Response..</div>
                   <div class="card-body">
                      <form  method="post" action="<?php echo e(route('send.message')); ?>">
                          <?php echo csrf_field(); ?>
                       <div class="form-group">
                            <input type="hidden" class="form-control"  name="email" id="email" placeholder="E-mail.."   value="<?php echo e($contact->email); ?>" />
                           <input type="hidden"    name="contact_id"     value="<?php echo e($contact->id); ?>" />
                       </div>
                          <div class="form-group">
                            <input type="hidden" class="form-control"  name="subject" id="subject"  placeholder="Type subject.."  value="<?php echo e($contact->subject); ?>" />
                       </div>
                       <div class="form-group">
                           <label for="message">Message</label>
                           <textarea class="ckeditor form-control" name="message" id="message" placeholder="Type article description.."><?php echo e(old('message')); ?></textarea>
                       </div>
                          <div class="form-group">
                              <button type="submit" class="btn btn-primary btn-block"> <i class="fa fa-mail-bulk"></i> Send</button>
                          </div>

                      </form>
                   </div>


                </div>



                </div>

            <div class="col-lg-2">
                <!-- Default Card Example -->
                <div class="card shadow  mb-4">
                    <div class="card-header">Action</div>
                    <div class="card-body">

                        <div class="my-2"></div>

                        <?php if (app('laratrust')->can('replies-delete')) : ?>
                        <a data-toggle="modal" data-target="#logoutModal_<?php echo e($contact->id); ?>" href="#" class="btn btn-danger btn-icon-split">
                          <span class="icon text-gray-600">
                            <i class="fas fa-trash"></i>
                          </span>
                            <span class="text">Delete</span>
                        </a>
                        <?php endif; // app('laratrust')->can ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if (app('laratrust')->can('replies-delete')) : ?>

    <!-- Delete Modal-->
    <div class="modal fade" id="logoutModal_<?php echo e($contact->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Delete?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <small class="modal-body">Select "Delete" below if you are ready to Delete <?php echo e(substr($contact->subject,0,80)); ?>. ?</small>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?php echo e(route('contact.destroy.status',$contact->id)); ?>">Delete.</a>
                </div>
            </div>
        </div>
    </div>
    <?php endif; // app('laratrust')->can ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts._app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\profile\resources\views\dashboard\contact\show.blade.php ENDPATH**/ ?>