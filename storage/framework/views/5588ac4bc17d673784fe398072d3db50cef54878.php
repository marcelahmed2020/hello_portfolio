<?php $__env->startSection('site_name',' | '.__('site.edit').' / '. $about->title); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo app('translator')->get('site.dashboard'); ?></a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.aboutus.index')); ?>"><?php echo app('translator')->get('site.aboutus'); ?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('site.edit').' | '. $about->title); ?></li>
            </ol>
        </nav>
        <form action="<?php echo e(route('admin.aboutus.update',$about->id)); ?>" id="form_validation" method="post" enctype="multipart/form-data">

                <?php echo e(csrf_field()); ?>

                <?php echo e(method_field('PUT')); ?>

            <div class="row">
                <div class="col-lg-10">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row">
                                <?php $__currentLoopData = config('translatable.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="<?php echo e($locale.'.title'); ?>"><?php echo app('translator')->get('site.'.$locale.'.title'); ?> </label>
                                            <input type="text"  class="form-control" placeholder="<?php echo app('translator')->get('site.'.$locale.'.title'); ?>" value="<?php echo e(! empty($about->translate($locale)->title)?$about->translate($locale)->title:''); ?>" name="<?php echo e($locale); ?>[title]" id="<?php echo e($locale.'.name'); ?>">

                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = config('translatable.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="<?php echo e($locale.'.sub_title'); ?>"><?php echo app('translator')->get('site.'.$locale.'.sub_title'); ?> </label>
                                            <input type="text"  class="form-control" placeholder="<?php echo app('translator')->get('site.'.$locale.'.sub_title'); ?>"  value="<?php echo e(! empty($about->translate($locale)->sub_title)?$about->translate($locale)->sub_title:''); ?>"  name="<?php echo e($locale); ?>[sub_title]" id="<?php echo e($locale.'.sub_title'); ?>">
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = config('translatable.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="<?php echo e($locale.'.address'); ?>"><?php echo app('translator')->get('site.'.$locale.'.address'); ?> </label>
                                            <input type="text"  class="form-control" placeholder="<?php echo app('translator')->get('site.'.$locale.'.address'); ?>"  value="<?php echo e(! empty($about->translate($locale)->address)?$about->translate($locale)->address:''); ?>" name="<?php echo e($locale); ?>[address]"  id="<?php echo e($locale.'.address'); ?>">
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <?php $__currentLoopData = config('translatable.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="<?php echo e($locale.'.freelance'); ?>"><?php echo app('translator')->get('site.'.$locale.'.freelance'); ?> </label>
                                            <input type="text"  class="form-control" placeholder="<?php echo app('translator')->get('site.'.$locale.'.freelance_available'); ?>"   value="<?php echo e(! empty($about->translate($locale)->freelance)?$about->translate($locale)->freelance:''); ?>"  name="<?php echo e($locale); ?>[freelance]" id="<?php echo e($locale.'.sub_title'); ?>">                                </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = config('translatable.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="<?php echo e($locale.'.degree'); ?>"><?php echo app('translator')->get('site.'.$locale.'.degree'); ?> </label>
                                            <input type="text"  class="form-control" placeholder="<?php echo app('translator')->get('site.'.$locale.'.degree'); ?>"    value="<?php echo e(! empty($about->translate($locale)->degree)?$about->translate($locale)->degree:''); ?>"   name="<?php echo e($locale); ?>[degree]" id="<?php echo e($locale.'.degree'); ?>">                                </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone"><?php echo app('translator')->get('site.phone'); ?> </label>
                                        <input type="number"  class="form-control" placeholder="<?php echo app('translator')->get('site.phone'); ?>" value="<?php echo e($about->phone); ?>" name="phone" id="phone">

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="birthday"><?php echo app('translator')->get('site.birthday'); ?> </label>
                                        <input type="date"  class="form-control" placeholder="<?php echo app('translator')->get('site.birthday'); ?>" value="<?php echo e($about->birthday); ?>" name="birthday" id="birthday">

                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email"><?php echo app('translator')->get('site.email'); ?> </label>
                                        <input type="email"  class="form-control" placeholder="<?php echo app('translator')->get('site.email'); ?>" value="<?php echo e($about->email); ?>" name="email" id="email">

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="image"><?php echo app('translator')->get('site.image'); ?> </label>
                                        <input type="file"  class="form-control" placeholder="<?php echo app('translator')->get('site.image'); ?>" value="<?php echo e(old('image')); ?>" name="image" id="image">

                                    </div>
                                </div>


                            </div>
                            <div class="col-sm-12">
                                <?php $__currentLoopData = config('translatable.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="form-group">
                                        <label for="<?php echo e($locale.'.desc'); ?>"><?php echo app('translator')->get('site.'.$locale.'.description'); ?> </label>
                                        <textarea   class="form-control"  placeholder="<?php echo app('translator')->get('site.'.$locale.'.description'); ?>"  name="<?php echo e($locale); ?>[desc]" id="<?php echo e($locale.'.desc'); ?>" rows="10" cols="80"><?php echo e(! empty($about->translate($locale)->desc)?$about->translate($locale)->desc:''); ?></textarea>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>



                            <div class="form-check">
                                <input type="checkbox"  checked value="1" name="enabled"  class="form-check-input" id="enabled">
                                <label class="form-check-label" for="enabled"><?php echo app('translator')->get('site.visiblity'); ?></label>
                            </div>

                            <br><button type="submit" class="btn btn-primary"> <i class="fa fa-plus"></i> <?php echo app('translator')->get('site.edit'); ?></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">

                    <!-- Default Card Example -->
                    <div class="card shadow  mb-4">
                        <div class="card-header">
                            <?php echo app('translator')->get('site.info'); ?>
                        </div>
                        <small class="card-body">
                            
                            
                            
                            
                            
                            
                            
                            
                            <div class="my-2"></div>
                        </small>
                    </div>
                </div>
            </div>
        </form>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts._app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\profile\resources\views\dashboard\aboutus\edit.blade.php ENDPATH**/ ?>