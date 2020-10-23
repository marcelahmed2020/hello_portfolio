<?php $__env->startSection('site_name',' | @'.$profile->username); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Setting</a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('profile.index')); ?>">Profile</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo e('@'.$profile->username); ?></li>
            </ol>
        </nav>

        <form method="post"  action="<?php echo e(route('admins.update', $profile->id)); ?>"  enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
          <?php echo e(method_field('put')); ?>

        <div class="row">


            <div class="col-lg-6">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputfirst">First Name</label>
                            <input type="text" class="form-control" name="first_name" value="<?php echo e($profile->first_name); ?>" id="exampleInputfirst" aria-describedby="firstHelp" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputlast">Last Name</label>
                            <input type="text" class="form-control"  name="last_name" value="<?php echo e($profile->last_name); ?>" id="exampleInputlast" aria-describedby="lastHelp" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"   name="email" value="<?php echo e($profile->email); ?>"  placeholder="Enter Email address">
                        </div>
                        <div class="form-group">
                            <label for="Address">Address</label>
                            <input type="text" class="form-control" id="Address" aria-describedby="AddressHelp"   name="location" value="<?php echo e($profile->location); ?>"  placeholder="Enter Email address">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                            <input type="hidden" name="old_password" value="<?php echo e($profile->password); ?>">
                            <small>if you don't want change password leave it..</small>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" <?php echo e($profile->enabled?'checked':''); ?> value="1" name="enabled"  class="form-check-input" id="enabled">
                            <label class="form-check-label" for="enabled">Enabled</label>
                        </div>
                        <br><button type="submit" class="btn btn-primary"> <i class="fa fa-user-edit"></i> Update</button>
                    </div>
                </div>
            </div>
            <?php if (app('laratrust')->hasRole('superadministrator')) : ?>
            <div class="col-lg-6">
                <div class="card shadow">
                    <div class="card-header"> Permissions </div>
                    <div class="card-body">

                        <?php
                                $models = ['admins','users','articels','channels','trash','settings'];
                                $maps = ['read','create',  'update', 'delete'];
                        ?>
                        <div class="row">
                            <div class="col-4">
                                <div class="list-group" id="list-tab" role="tablist">

                                    <?php $__currentLoopData = $models; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a class="list-group-item list-group-item-action <?php echo e($key == 0?'active':''); ?>" id="list-<?php echo e($model); ?>-list" data-toggle="list" href="#list-<?php echo e($model); ?>" role="tab" aria-controls="<?php echo e($model); ?>"><?php echo e($model); ?></a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="tab-content" id="nav-tabContent">
                                    <?php $__currentLoopData = $models; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="tab-pane fade show <?php echo e($key == 0?'active':''); ?>" id="list-<?php echo e($model); ?>" role="tabpanel" aria-labelledby="list-<?php echo e($model); ?>-list">
                                            <h4 class="text-center"> <?php echo e($model); ?></h4>
                                            <?php $__currentLoopData = $maps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $map): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="demo-radio-button"  style="display: inline;margin-right: 5px;">
                                                <input name="permissions[]" <?php echo e($profile->hasPermission($model. '-'.$map ) ? 'checked' : ''); ?>  value="<?php echo e($model. '-'.$map); ?>" type="checkbox" id="<?php echo e($model. '-'.$map); ?>" class="radio-col-orange">
                                            <label for="<?php echo e($map . '_' . $model); ?>"> <?php echo e($map); ?></label>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; // app('laratrust')->hasRole ?>


        </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts._app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\profile\resources\views\dashboard\profile\edit.blade.php ENDPATH**/ ?>