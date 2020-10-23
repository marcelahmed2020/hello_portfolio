<?php $__env->startSection('site_name',' | '.$education->title); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo app('translator')->get('site.dashboard'); ?></a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.professional_experiences.index')); ?>"><?php echo app('translator')->get('site.professional_experiences'); ?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo e($education->title); ?></li>
            </ol>
        </nav>
             <form action="<?php echo e(route('admin.professional_experiences.update',$education->id)); ?>" id="form_validation" method="post" enctype="multipart/form-data">

                <?php echo e(csrf_field()); ?>

                <?php echo e(method_field('PUT')); ?>            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row">
                                <?php $__currentLoopData = config('translatable.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="<?php echo e($locale.'.title'); ?>"><?php echo app('translator')->get('site.'.$locale.'.title'); ?> </label>
                                            <input type="text"  class="form-control" placeholder="<?php echo app('translator')->get('site.'.$locale.'.title'); ?>" value="<?php echo e(! empty($education->translate($locale)->title)?$education->translate($locale)->title:'0'); ?>" name="<?php echo e($locale); ?>[title]" id="<?php echo e($locale.'.title'); ?>">

                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = config('translatable.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="<?php echo e($locale.'.sub_title'); ?>"><?php echo app('translator')->get('site.'.$locale.'.sub_title'); ?> </label>
                                            <input type="text"  class="form-control" placeholder="<?php echo app('translator')->get('site.'.$locale.'.sub_title'); ?>" value="<?php echo e(! empty($education->translate($locale)->sub_title)?$education->translate($locale)->sub_title:'0'); ?>" name="<?php echo e($locale); ?>[sub_title]" id="<?php echo e($locale.'.sub_title'); ?>">

                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <?php $__currentLoopData = config('translatable.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="<?php echo e($locale.'.desc1'); ?>"><?php echo app('translator')->get('site.'.$locale.'.desc1'); ?> </label>
                                            <input type="text"  class="form-control" placeholder="<?php echo app('translator')->get('site.'.$locale.'.desc1'); ?>"  value="<?php echo e(! empty($education->translate($locale)->desc1)?$education->translate($locale)->desc1:'0'); ?>" name="<?php echo e($locale); ?>[desc1]" id="<?php echo e($locale.'.desc1'); ?>">
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                <?php $__currentLoopData = config('translatable.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="<?php echo e($locale.'.desc2'); ?>"><?php echo app('translator')->get('site.'.$locale.'.desc2'); ?> </label>
                                            <input type="text"  class="form-control" placeholder="<?php echo app('translator')->get('site.'.$locale.'.desc2'); ?>"  value="<?php echo e(! empty($education->translate($locale)->desc2)?$education->translate($locale)->desc2:'0'); ?>" name="<?php echo e($locale); ?>[desc2]" id="<?php echo e($locale.'.desc2'); ?>">
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                <?php $__currentLoopData = config('translatable.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="<?php echo e($locale.'.desc3'); ?>"><?php echo app('translator')->get('site.'.$locale.'.desc3'); ?> </label>
                                            <input type="text"  class="form-control" placeholder="<?php echo app('translator')->get('site.'.$locale.'.desc3'); ?>"  value="<?php echo e(! empty($education->translate($locale)->desc3)?$education->translate($locale)->desc3:'0'); ?>" name="<?php echo e($locale); ?>[desc3]" id="<?php echo e($locale.'.desc3'); ?>">
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="from"><?php echo app('translator')->get('site.from'); ?> </label>
                                        <input type="text"  class="form-control" placeholder="<?php echo app('translator')->get('site.from'); ?> - 2016-01-06" value="<?php echo e($education->from); ?>" name="from" id="from">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="to"><?php echo app('translator')->get('site.to'); ?> </label>
                                        <input type="text"  class="form-control" placeholder="<?php echo app('translator')->get('site.to'); ?> - <?php echo e(date("Y-m-d")); ?>" value="<?php echo e($education->to); ?>" name="to" id="to">
                                    </div>
                                </div>

                            </div>




                            <div class="form-check">
                                <input type="checkbox" <?php echo e($education->enabled == 1 ? 'checked':''); ?> value="1" name="enabled"  class="form-check-input" id="enabled">
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

<?php echo $__env->make('dashboard.layouts._app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\profile\resources\views/dashboard/professional_experience/edit.blade.php ENDPATH**/ ?>