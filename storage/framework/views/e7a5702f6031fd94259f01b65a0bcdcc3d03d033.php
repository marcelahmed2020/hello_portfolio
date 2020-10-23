<?php $__env->startSection('site_name',' | '. $portfolio->title); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo app('translator')->get('site.dashboard'); ?></a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.portfolios.index')); ?>"><?php echo app('translator')->get('site.portfolios'); ?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo e($portfolio->title); ?></li>
            </ol>
        </nav>
        <form action="<?php echo e(route('admin.portfolios.update',$portfolio->id)); ?>" id="form_validation" method="post" enctype="multipart/form-data">

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
                                            <input type="text"  class="form-control" placeholder="<?php echo app('translator')->get('site.'.$locale.'.title'); ?>"  value="<?php echo e(! empty($portfolio->translate($locale)->title)?$portfolio->translate($locale)->title:''); ?>"  name="<?php echo e($locale); ?>[title]" id="<?php echo e($locale.'.name'); ?>">

                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="links"><?php echo app('translator')->get('site.links'); ?> </label>
                                        <input type="text"  class="form-control" placeholder="<?php echo app('translator')->get('site.links'); ?>" value="<?php echo e($portfolio->links); ?>" name="links" id="links">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="image"><?php echo app('translator')->get('site.image'); ?> </label>
                                        <input type="file"  class="form-control" placeholder="<?php echo app('translator')->get('site.image'); ?>" value="<?php echo e(old('image')); ?>" name="image" id="image">
                                        <input type="hidden"   value="<?php echo e($portfolio->image); ?>" name="old_image">

                                    </div>
                                </div>


                            </div>

                        </div>



                        <br><button type="submit" class="btn btn-primary"> <i class="fa fa-edit"></i> <?php echo app('translator')->get('site.edit'); ?></button>
                    </div>
                </div>
            </div>

        </form>
    </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts._app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\profile\resources\views/dashboard/portfolios/edit.blade.php ENDPATH**/ ?>