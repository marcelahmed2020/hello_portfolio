<?php $__env->startSection('site_name',__('site.login')); ?>

<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4"><?php echo app('translator')->get('site.welcome_back'); ?>!</h1>
                                </div>
                                <form class="user" method="post" id="mylogin" action="<?php echo e(route('admin.login')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <input type="email" name="email"  id="email" aria-describedby="email" class="form-control form-control-user" placeholder="<?php echo app('translator')->get('site.email'); ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password"  id="password"  class="form-control form-control-user" id="password" placeholder="<?php echo app('translator')->get('site.password'); ?>">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" name="remember" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck"><?php echo app('translator')->get('site.remember_me'); ?></label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        <?php echo app('translator')->get('site.login'); ?>
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?php echo e(route('admin.forgot-password')); ?>"> <?php echo app('translator')->get('site.forgot_password'); ?>?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('dashboard.guest.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\profile\resources\views\dashboard\guest\login.blade.php ENDPATH**/ ?>