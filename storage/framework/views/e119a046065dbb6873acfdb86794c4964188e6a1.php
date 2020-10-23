<?php $__env->startSection('site_name',' | '. $profile->username . ' Activities'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo e('@'.$profile->username); ?> Activities</li>
            </ol>
        </nav>


        <div class="row">

            <div class="col-lg-2">

                <!-- Default Card Example -->
                <div class="card shadow  mb-4">
                    <div class="card-header">
                        Image
                    </div>
                    <div class="card-body">
                        <img  class="img-profile rounded-circle" width="80px" height="80px" src="<?php echo e(url('/avatars/'.$profile->avatar_path)); ?>">
                        <small><a href="<?php echo e($profile->username); ?>"> <?php echo e('@'.$profile->username); ?></a></small>
                        <?php if(! empty($profile->getRoles()[0])): ?>
                            <?php $__currentLoopData = $profile->getRoles(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <small><?php echo $val; ?></small>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="card shadow mb-4">

                    <div class="card-body">
                        <small><span class="text"><?php echo e($profile->news()->count()); ?> Article</span> </small>
                        <div class="my-2"></div>
                        <small><span class="text"><?php echo e($profile->replies()->count()); ?>  Replies</span> </small>
                        <div class="my-2"></div>


                    </div>
                </div>



            </div>


            <div class="col-lg-5">


                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <!-- Articles Card -->

                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Articles    <?php echo e($profile->news()->count()?'- '. $profile->news()->count():''); ?></h6>

                    </div>
                    <div class="card-body">

                        <?php if( $profile->news->count() > 0): ?>
                            <?php $__currentLoopData = $profile->news()->paginate(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e(substr($new->title,0,90)); ?><br>
                                <a  href="<?php echo e(route('articles.show',$new->id)); ?>" class="btn btn-primary btn-sm btn-icon-split">
                    <span class="icon">
                      <i class="fas fa-eye"></i>
                    </span>
                                    <span class="text">Show </span>
                                </a>
                                <hr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <p  disabled="" class="btn btn-warning btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-exclamation-triangle"></i>
                    </span>
                                <small class="text">Sorry not have any aricles yet.!</small>
                            </p>

                        <?php endif; ?>
                    </div>
                    <?php if($profile->news()->count() > 4): ?>
                        <div class="card-footer">
                            <a  href="<?php echo e(route('activities',$profile->id)); ?>" class="btn btn-primary btn-block btn-icon-split">View all activities</a>
                        </div>
                    <?php endif; ?>

                </div>

                <!-- Collapsable Card Example -->


            </div>
            <div class="col-lg-5">

                <div class="card shadow mb-4">

                    <!-- Relies Card -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Replies  <?php echo e($profile->replies()->count()?'- '. $profile->replies()->count():''); ?> </h6>

                    </div>
                    <div class="card-body">
                        <?php if($profile->replies->count() > 0): ?>
                            <?php $__currentLoopData = $profile->replies()->paginate(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $replies): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo substr($replies->desc,0,90); ?><br>
                                <a  href="<?php echo e(route('replies.index')); ?>?id=<?php echo e($replies->id); ?>" class="btn btn-primary btn-sm btn-icon-split">
                    <span class="icon">
                      <i class="fas fa-eye"></i>
                    </span>
                                    <span class="text">Show Replies</span>
                                </a>
                                <a  href="<?php echo e(route('articles.show',$replies->news_id)); ?>" class="btn btn-info btn-sm btn-icon-split">
                    <span class="icon">
                      <i class="fas fa-eye"></i>
                    </span>
                                    <small class="text">Show Article</small>
                                </a>

                                <hr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <p  disabled="" class="btn btn-warning btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-exclamation-triangle"></i>
                    </span>
                                <span class="text">Sorry not have any replies yet.!</span>
                            </p>

                        <?php endif; ?>
                    </div>
                    <?php if($profile->replies()->count() > 4): ?>
                        <div class="card-footer">
                            <a  href="<?php echo e(route('activities',$profile->id)); ?>" class="btn btn-primary btn-block btn-icon-split">View all activities</a>
                        </div>
                    <?php endif; ?>


                </div>
                <!-- Collapsable Card Example -->


            </div>

        </div>
    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts._app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\profile\resources\views\dashboard\profile\activities.blade.php ENDPATH**/ ?>