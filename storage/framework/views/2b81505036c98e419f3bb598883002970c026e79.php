<?php $__env->startSection('site_name',' | '.__('site.edit').' / '. $service->title); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo app('translator')->get('site.dashboard'); ?></a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.services.index')); ?>"><?php echo app('translator')->get('site.services'); ?></a></li>
                <li class="breadcrumb-item active" aria-current="page"> <?php echo app('translator')->get('site.edit'); ?> <?php echo e(' / '. $service->title); ?></li>
            </ol>
        </nav>
             <form action="<?php echo e(route('admin.services.update',$service->id)); ?>" id="form_validation" method="post" enctype="multipart/form-data">

                <?php echo e(csrf_field()); ?>

                <?php echo e(method_field('PUT')); ?>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row">
                                <?php $__currentLoopData = config('translatable.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="<?php echo e($locale.'.title'); ?>"><?php echo app('translator')->get('site.'.$locale.'.title'); ?> </label>
                                            <input type="text"  class="form-control" placeholder="<?php echo app('translator')->get('site.'.$locale.'.title'); ?>" value="<?php echo e(! empty($service->translate($locale)->title)?$service->translate($locale)->title:''); ?>" name="<?php echo e($locale); ?>[title]" id="<?php echo e($locale.'.name'); ?>">

                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <?php $__currentLoopData = config('translatable.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="<?php echo e($locale.'.desc'); ?>"><?php echo app('translator')->get('site.'.$locale.'.desc'); ?> </label>
                                            <input type="text"  class="form-control" placeholder="<?php echo app('translator')->get('site.'.$locale.'.desc'); ?>" value="<?php echo e(! empty($service->translate($locale)->desc)?$service->translate($locale)->desc:''); ?>" name="<?php echo e($locale); ?>[desc]" id="<?php echo e($locale.'.desc'); ?>">
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="icon"> <a href="https://icofont.com/icons"><?php echo app('translator')->get('site.icon'); ?> => https://icofont.com/icons</a></label>

                                        <input type="text"  class="form-control" placeholder="<?php echo app('translator')->get('site.icon'); ?>" value="<?php echo e($service->icon); ?>" name="icon" id="icon">

                                    </div>
                                </div>

                            </div>




                            <div class="form-check">
                                <input type="checkbox"  checked value="1" name="enabled"  class="form-check-input" id="enabled">
                                <label class="form-check-label" for="enabled"><?php echo app('translator')->get('site.visiblity'); ?></label>
                            </div>

                            <br><button type="submit" class="btn btn-primary"> <i class="fa fa-plus"></i> <?php echo app('translator')->get('site.edit'); ?></button>
                        </div>
                    </div>
                </div>
                

                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
            </div>
        </form>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts._app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\profile\resources\views/dashboard/services/edit.blade.php ENDPATH**/ ?>