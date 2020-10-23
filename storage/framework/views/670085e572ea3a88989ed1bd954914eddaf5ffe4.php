<?php $__env->startSection('site_name',' | '.__('site.add_skill')); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo app('translator')->get('site.dashboard'); ?></a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.skills.index')); ?>"><?php echo app('translator')->get('site.skills'); ?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo app('translator')->get('site.add_skill'); ?></li>
            </ol>
        </nav>
        <form action="<?php echo e(route('admin.skills.store')); ?>" id="form_validation" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title"><?php echo app('translator')->get('site.title'); ?> </label>
                                        <input type="text"  class="form-control" placeholder="<?php echo app('translator')->get('site.title'); ?>" value="<?php echo e(old('title')); ?>" name="title" id="title">
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="progress"><?php echo app('translator')->get('site.progress'); ?> </label>
                                        <input type="text"  class="form-control" placeholder="<?php echo app('translator')->get('site.progress'); ?>" value="<?php echo e(old('progress')); ?>" name="progress" id="progress">
                                    </div>
                                </div>

                                </div>

                            </div>



                            <br><button type="submit" class="btn btn-primary"> <i class="fa fa-plus"></i> <?php echo app('translator')->get('site.add'); ?></button>
                        </div>
                    </div>
                </div>

        </form>
    </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts._app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\profile\resources\views/dashboard/skills/create.blade.php ENDPATH**/ ?>