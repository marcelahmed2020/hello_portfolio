<?php $__env->startSection('site_name',' | '.__('site.edit').' / '. $price->title); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo app('translator')->get('site.dashboard'); ?></a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.prices.index')); ?>"><?php echo app('translator')->get('site.prices'); ?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo app('translator')->get('site.edit'); ?> / <?php echo e($price->title); ?></li>
            </ol>
        </nav>
             <form action="<?php echo e(route('admin.prices.update',$price->id)); ?>" id="form_validation" method="post" enctype="multipart/form-data">

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
                                            <input type="text"  class="form-control" placeholder="<?php echo app('translator')->get('site.'.$locale.'.title'); ?>" value="<?php echo e(! empty($price->translate($locale)->title)?$price->translate($locale)->title:''); ?>" name="<?php echo e($locale); ?>[title]" id="<?php echo e($locale.'.name'); ?>">

                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = config('translatable.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="<?php echo e($locale.'.sub_title'); ?>"><?php echo app('translator')->get('site.'.$locale.'.sub_title'); ?> </label>
                                            <input type="text"  class="form-control" placeholder="<?php echo app('translator')->get('site.'.$locale.'.sub_title'); ?>" value="<?php echo e(! empty($price->translate($locale)->sub_title)?$price->translate($locale)->sub_title:''); ?>" name="<?php echo e($locale); ?>[sub_title]" id="<?php echo e($locale.'.sub_title'); ?>">                                </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = config('translatable.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="<?php echo e($locale.'.desc1'); ?>"><?php echo app('translator')->get('site.'.$locale.'.desc1'); ?> </label>
                                            <input type="text"  class="form-control" placeholder="<?php echo app('translator')->get('site.'.$locale.'.desc1'); ?>" value="<?php echo e(! empty($price->translate($locale)->desc1)?$price->translate($locale)->desc1:'0'); ?>" name="<?php echo e($locale); ?>[desc1]" id="<?php echo e($locale.'.desc1'); ?>">                                </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <?php $__currentLoopData = config('translatable.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="<?php echo e($locale.'.desc2'); ?>"><?php echo app('translator')->get('site.'.$locale.'.desc2'); ?> </label>
                                            <input type="text"  class="form-control" placeholder="<?php echo app('translator')->get('site.'.$locale.'.desc2'); ?>" value="<?php echo e(! empty($price->translate($locale)->desc2)?$price->translate($locale)->desc2:'0'); ?>" name="<?php echo e($locale); ?>[desc2]" id="<?php echo e($locale.'.desc2'); ?>">                                </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = config('translatable.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="<?php echo e($locale.'.desc3'); ?>"><?php echo app('translator')->get('site.'.$locale.'.desc3'); ?> </label>
                                            <input type="text"  class="form-control" placeholder="<?php echo app('translator')->get('site.'.$locale.'.desc3'); ?>" value="<?php echo e(! empty($price->translate($locale)->desc3)?$price->translate($locale)->desc3:'0'); ?>" name="<?php echo e($locale); ?>[desc3]" id="<?php echo e($locale.'.desc3'); ?>">
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = config('translatable.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="<?php echo e($locale.'.footer_desc'); ?>"><?php echo app('translator')->get('site.'.$locale.'.footer_desc'); ?> </label>
                                            <input type="text"  class="form-control" placeholder="<?php echo app('translator')->get('site.'.$locale.'.footer_desc'); ?>" value="<?php echo e(! empty($price->translate($locale)->footer_desc)?$price->translate($locale)->footer_desc:'0'); ?>" name="<?php echo e($locale); ?>[footer_desc]" id="<?php echo e($locale.'.footer_desc'); ?>">
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="price"><?php echo app('translator')->get('site.price'); ?> </label>
                                        <input type="text"  class="form-control" placeholder="<?php echo app('translator')->get('site.price'); ?>" value="<?php echo e($price->price); ?>" name="price" id="price">

                                    </div>
                                </div>

                            </div>




                            <div class="form-check">
                                <input type="checkbox"  checked value="1" name="enabled"  class="form-check-input" id="enabled">
                                <label class="form-check-label" for="enabled"><?php echo app('translator')->get('site.visiblity'); ?></label>
                            </div>

                            <br><button type="submit" class="btn btn-primary"> <i class="fa fa-plus"></i> <?php echo app('translator')->get('site.add'); ?></button>
                        </div>
                    </div>
                </div>
                

                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
            </div>
        </form>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts._app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\profile\resources\views/dashboard/prices/edit.blade.php ENDPATH**/ ?>