<?php $__env->startSection('site_name',' | '. $my_info->name); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo app('translator')->get('site.dashboard'); ?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo app('translator')->get('site.profile'); ?>  #<?php echo e($my_info->name); ?></li>
            </ol>
        </nav>
        <form action="<?php echo e(route('admin.profile.update',$my_info->id)); ?>" id="form_validation" method="post" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('PUT')); ?>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name"><?php echo app('translator')->get('site.name'); ?> </label>
                                        <input type="text"  class="form-control" placeholder="<?php echo app('translator')->get('site.name'); ?>" value="<?php echo e($my_info->name); ?>" name="name" id="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email"><?php echo app('translator')->get('site.email'); ?> </label>
                                        <input type="email"  class="form-control" placeholder="<?php echo app('translator')->get('site.email'); ?>" value="<?php echo e($my_info->email); ?>" name="email" id="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password"><?php echo app('translator')->get('site.password'); ?> </label>
                                        <input type="password"  class="form-control" placeholder="<?php echo app('translator')->get('site.password'); ?>" value="<?php echo e(old('password')); ?>" name="password" id="password">

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="min_image"><?php echo app('translator')->get('site.min_image'); ?> </label>
                                        <input type="file"  class="form-control" placeholder="<?php echo app('translator')->get('site.min_image'); ?>" value="<?php echo e(old('min_image')); ?>" name="min_image" id="min_image">
                                        <input type="hidden" value="<?php echo e($my_info->min_image); ?>" name="old_min_image">

                                    </div>
                                </div><div class="col-md-12">
                                    <div class="form-group">
                                        <label for="max_image"><?php echo app('translator')->get('site.max_image'); ?> </label>
                                        <input type="file"  class="form-control" placeholder="<?php echo app('translator')->get('site.max_image'); ?>" value="<?php echo e(old('max_image')); ?>" name="max_image" id="max_image">
                                        <input type="hidden"  value="<?php echo e($my_info->max_image); ?>" name="old_max_image">
                                    </div>
                                </div>



                            </div>

                        </div>



                        <br><button type="submit" class="btn btn-primary"> <i class="fa fa-edit"></i> <?php echo app('translator')->get('site.update'); ?></button>
                    </div>
                </div>
            </div>

        </form>
    </div>

 <?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts._app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\profile\resources\views/dashboard/profile/index.blade.php ENDPATH**/ ?>