<?php $__env->startSection('site_name',' | Settings'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('settings.index')); ?>">Settings</a></li>

            </ol>
        </nav>
        <div class="row">
            <div class="col-lg-6">
                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <small class="m-0 font-weight-bold text-primary"><?php echo e(sitesettings()->site_name ? 'Site name : '. sitesettings()->site_name:''); ?></small>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body text-primary">
                        <small><?php echo e(sitesettings()->description ? 'Site description : '. sitesettings()->description:''); ?></small>
                        <hr/>
                        <small><?php echo e(sitesettings()->keywords ? 'Site keywords : '. sitesettings()->keywords:''); ?></small>
                        <hr/>
                        <small><?php echo e(sitesettings()->message_maintenance ? 'Site message maintenance : '. sitesettings()->message_maintenance:''); ?></small>

                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <small class="m-0 font-weight-bold text-primary"><?php echo e(sitesettings()->email ? 'E-mail : '. sitesettings()->email:''); ?></small>
                       </div>
                    <!-- Card Body -->
                    <div class="card-body text-primary">
                                <small><?php echo e(sitesettings()->adress ? 'Address : '. sitesettings()->adress:''); ?></small>
                                <small><?php echo e(sitesettings()->phone ? 'Phone : '. sitesettings()->phone:''); ?></small>
                                <small><?php echo e(sitesettings()->head_office ? 'Head Office : '. sitesettings()->head_office:''); ?></small>
                                <small><?php echo e(sitesettings()->status == 1 || sitesettings()->status == 0 ? 'Status : '. (sitesettings()->status == 1 ?'Open':'Closed') :''); ?></small>

                    </div>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="card shadow mb-4">
                    <!-- Card Header - Accordion -->
                    <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                        <small class="m-0 font-weight-bold text-primary">Social media</small>
                    </a>
                    <!-- Card Content - Collapse -->
                    <div class="collapse show" id="collapseCardExample">
                        <div class="card-body">

                  <a href="<?php echo e(sitesettings()->facebook); ?>" target="_blank" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-<?php echo e(sitesettings()->facebook_status?'check':'exclamation-triangle'); ?> "></i>
                    </span>
                                <span class="text">Facebook</span>
                            </a>
                     <hr />
                  <a href="<?php echo e(sitesettings()->twitter); ?>" target="_blank" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-<?php echo e(sitesettings()->twitter_status?'check':'exclamation-triangle'); ?> "></i>
                    </span>
                                <span class="text">Twitter</span>
                            </a>
                     <hr />
                  <a href="<?php echo e(sitesettings()->instagram); ?>" target="_blank" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-<?php echo e(sitesettings()->instagram_status?'check':'exclamation-triangle'); ?> "></i>
                    </span>
                                <span class="text">Instagram</span>
                            </a>
                     <hr />
                  <a href="<?php echo e(sitesettings()->linkedin); ?>" target="_blank" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-<?php echo e(sitesettings()->linkedin_status?'check':'exclamation-triangle'); ?> "></i>
                    </span>
                                <span class="text">Linkedin</span>
                            </a>
                     <hr />
                            <a href="<?php echo e(sitesettings()->vk); ?>" target="_blank" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-<?php echo e(sitesettings()->vk_status?'check':'exclamation-triangle'); ?> "></i>
                    </span>
                                <span class="text">Vk</span>
                            </a>

                        </div>
                        <?php if (app('laratrust')->can(['settings-update','trash-read'])) : ?>

                        <div class="card-footer">
                            <?php if (app('laratrust')->can('settings-update')) : ?>


                            <a href="<?php echo e(route('settings.edit')); ?>" target="_blank" class="btn btn-info btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-edit"></i>
                    </span>
                                <span class="text">Edit Settings</span>
                            </a>
                            <hr>
                            <?php endif; // app('laratrust')->can ?>
                            <?php if (app('laratrust')->can('trash-read')) : ?>
                            <a href="<?php echo e(route('trash.index')); ?>" target="_blank" class="btn btn-danger btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-trash"></i>
                    </span>
                                <span class="text">Trash</span>
                            </a>
                            <?php endif; // app('laratrust')->can ?>
                        </div>
                        <?php endif; // app('laratrust')->can ?>



                    </div>
                </div>
            </div>

        </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts._app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\profile\resources\views\dashboard\settings\index.blade.php ENDPATH**/ ?>