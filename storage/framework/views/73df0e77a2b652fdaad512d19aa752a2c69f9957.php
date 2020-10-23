<?php $__env->startSection('site_name',' | '.__('site.settings')); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo app('translator')->get('site.dashboard'); ?></a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.settings.index')); ?>"><?php echo app('translator')->get('site.settings'); ?></a></li>
            </ol>
        </nav>
        <form action="<?php echo e(route('admin.settings.update',$settings->id)); ?>" id="form_validation" method="post" enctype="multipart/form-data">
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
                                            <label for="<?php echo e($locale.'.site_name'); ?>"><?php echo app('translator')->get('site.'.$locale.'.site_name'); ?> </label>
                                            <input type="text"  class="form-control" placeholder="<?php echo app('translator')->get('site.'.$locale.'.site_name'); ?>" value="<?php echo e(! empty($settings->translate($locale)->site_name)?$settings->translate($locale)->site_name:''); ?>" name="<?php echo e($locale); ?>[site_name]" id="<?php echo e($locale.'.site_name'); ?>">

                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = config('translatable.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="<?php echo e($locale.'.adress'); ?>"><?php echo app('translator')->get('site.'.$locale.'.adress'); ?> </label>
                                            <input type="text"  class="form-control" placeholder="<?php echo app('translator')->get('site.'.$locale.'.adress'); ?>" value="<?php echo e(! empty($settings->translate($locale)->adress)?$settings->translate($locale)->adress:''); ?>" name="<?php echo e($locale); ?>[adress]" id="<?php echo e($locale.'.adress'); ?>">

                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <?php $__currentLoopData = config('translatable.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="<?php echo e($locale.'.description'); ?>"><?php echo app('translator')->get('site.'.$locale.'.description'); ?> </label>
                                            <textarea   class="form-control" placeholder="<?php echo app('translator')->get('site.'.$locale.'.description'); ?>" name="<?php echo e($locale); ?>[description]" id="<?php echo e($locale.'.description'); ?>"  rows="8"><?php echo e(! empty($settings->translate($locale)->description)?$settings->translate($locale)->description:''); ?></textarea>
                                         </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <?php $__currentLoopData = config('translatable.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="<?php echo e($locale.'.keywords'); ?>"><?php echo app('translator')->get('site.'.$locale.'.keywords'); ?> </label>
                                            <textarea   class="form-control" placeholder="<?php echo app('translator')->get('site.'.$locale.'.keywords'); ?>" name="<?php echo e($locale); ?>[keywords]" id="<?php echo e($locale.'.keywords'); ?>"  rows="8"><?php echo e(! empty($settings->translate($locale)->keywords)?$settings->translate($locale)->keywords:''); ?></textarea>
                                         </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <?php $__currentLoopData = config('translatable.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="<?php echo e($locale.'.message_maintenance'); ?>"><?php echo app('translator')->get('site.'.$locale.'.message_maintenance'); ?> </label>
                                            <textarea   class="form-control" placeholder="<?php echo app('translator')->get('site.'.$locale.'.message_maintenance'); ?>" name="<?php echo e($locale); ?>[message_maintenance]" id="<?php echo e($locale.'.message_maintenance'); ?>"  rows="8"><?php echo e(! empty($settings->translate($locale)->message_maintenance)?$settings->translate($locale)->message_maintenance:''); ?></textarea>
                                         </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone1"><?php echo app('translator')->get('site.phone'); ?> </label>
                                        <input type="text"  class="form-control" placeholder="<?php echo app('translator')->get('site.phone'); ?>" value="<?php echo e($settings->phone1); ?>" name="phone1" id="phone1">
                                    </div>
                                </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email"><?php echo app('translator')->get('site.email'); ?> </label>
                                            <input type="text"  class="form-control" placeholder="<?php echo app('translator')->get('site.email'); ?>" value="<?php echo e($settings->email); ?>" name="email" id="email">
                                        </div>
                                    </div>

                                <div class="col-sm-5">
                                        <div class="form-group">
                                            <label for="facebook"><?php echo app('translator')->get('site.facebook'); ?> </label>
                                            <input type="text"  class="form-control" placeholder="<?php echo app('translator')->get('site.facebook'); ?>" value="<?php echo e($settings->facebook); ?>" name="facebook" id="facebook">
                                        </div>
                                </div>
                                <div class="input-group-addon col-sm-1">
                                          <label for="facebook_status"></label>
                                          <input type="checkbox" name="facebook_status" class="filled-in" value="1" <?php echo e($settings->facebook_status == 1 ? 'checked':''); ?>   id="facebook_status">
                                </div>


                                <div class="col-sm-5">
                                        <div class="form-group">
                                            <label for="twitter"><?php echo app('translator')->get('site.twitter'); ?> </label>
                                            <input type="text"  class="form-control" placeholder="<?php echo app('translator')->get('site.twitter'); ?>" value="<?php echo e($settings->twitter); ?>" name="twitter" id="twitter">
                                        </div>
                                </div>
                                <div class="input-group-addon col-sm-1">
                                          <label for="twitter_status"></label>
                                          <input type="checkbox" name="twitter_status" class="filled-in" value="1" <?php echo e($settings->twitter_status == 1 ? 'checked':''); ?>   id="twitter_status">
                                </div>




                                <div class="col-sm-5">
                                        <div class="form-group">
                                            <label for="vk"><?php echo app('translator')->get('site.vk'); ?> </label>
                                            <input type="text"  class="form-control" placeholder="<?php echo app('translator')->get('site.vk'); ?>" value="<?php echo e($settings->vk); ?>" name="vk" id="vk">
                                        </div>
                                </div>
                                <div class="input-group-addon col-sm-1">
                                          <label for="vk_status"></label>
                                          <input type="checkbox" name="vk_status" class="filled-in" value="1" <?php echo e($settings->vk_status == 1 ? 'checked':''); ?>   id="vk_status">
                                </div>

                                <div class="col-sm-5">
                                        <div class="form-group">
                                            <label for="telegram"><?php echo app('translator')->get('site.telegram'); ?> </label>
                                            <input type="text"  class="form-control" placeholder="<?php echo app('translator')->get('site.telegram'); ?>" value="<?php echo e($settings->telegram); ?>" name="telegram" id="telegram">
                                        </div>
                                </div>
                                <div class="input-group-addon col-sm-1">
                                          <label for="telegram_status"></label>
                                          <input type="checkbox" name="telegram_status" class="filled-in" value="1" <?php echo e($settings->telegram_status == 1 ? 'checked':''); ?>   id="telegram_status">
                                </div>





                                <div class="col-sm-5">
                                        <div class="form-group">
                                            <label for="whatsapp"><?php echo app('translator')->get('site.whatsapp'); ?> </label>
                                            <input type="text"  class="form-control" placeholder="<?php echo app('translator')->get('site.whatsapp'); ?>" value="<?php echo e($settings->whatsapp); ?>" name="whatsapp" id="whatsapp">
                                        </div>
                                </div>
                                <div class="input-group-addon col-sm-1">
                                          <label for="whatsapp_status"></label>
                                          <input type="checkbox" name="whatsapp_status" class="filled-in" value="1" <?php echo e($settings->whatsapp_status == 1 ? 'checked':''); ?>   id="whatsapp_status">
                                </div>









                            </div>








                            <div class="form-check">
                                <input type="checkbox"  checked value="1" name="closed"  class="form-check-input" id="closed">
                                <label class="form-check-label" for="closed"><?php echo app('translator')->get('site.opend'); ?></label>
                            </div>

                            <br><button type="submit" class="btn btn-primary"> <i class="fa fa-edit"></i> <?php echo app('translator')->get('site.update'); ?></button>
                        </div>
                    </div>
                </div>

            </div>
        </form>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts._app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\profile\resources\views/dashboard/settings/index.blade.php ENDPATH**/ ?>