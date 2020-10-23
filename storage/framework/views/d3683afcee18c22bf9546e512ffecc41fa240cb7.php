<?php $__env->startSection('site_name',' | '.__('site.skills')); ?>

<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo app('translator')->get('site.dashboard'); ?></a></li>
                <li  class="breadcrumb-item active" aria-current="page"><a href="#"><?php echo app('translator')->get('site.skills'); ?></a></li>
            </ol>
        </nav>
        <!-- Page Heading -->
        <h1 class="h3 m-0 font-weight-bold text-primary"><?php echo app('translator')->get('site.DataTablesSkillsList'); ?>   </h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">

            <div class="card-header py-3">
                <a href="<?php echo e(route('admin.skills.create')); ?>" class="btn btn-primary btn-icon-split" style="float: right">
                    <span class="icon text-white-50">
                      <i class="fas fa-plus"></i>
                    </span>
                    <span class="text"> <?php echo app('translator')->get('site.add_skill'); ?></span>
                </a>

            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th><?php echo app('translator')->get('site.id'); ?></th>
                            <th><?php echo app('translator')->get('site.title'); ?></th>
                            <th><?php echo app('translator')->get('site.progress'); ?></th>
                            <th><?php echo app('translator')->get('site.action'); ?></th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th><?php echo app('translator')->get('site.id'); ?></th>
                                <th><?php echo app('translator')->get('site.title'); ?></th>
                            <th><?php echo app('translator')->get('site.progress'); ?></th>
                            <th><?php echo app('translator')->get('site.action'); ?></th>

                        </tr>
                        </tfoot>
                        <tbody>
                        <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr role="row" class="even">
                                <td class="sorting_1"><?php echo e($key + 1); ?></td>
                                <td><?php echo e($ad->title); ?></td>

                                <td><?php echo e($ad->progress); ?> %</td>
                                <td>
                                    <div class="js-modal-buttons button-demo">
                                        <a  class="btn btn-info btn-sm"  href="<?php echo e(route('admin.skills.edit',$ad->id)); ?>" title="<?php echo app('translator')->get('site.edit'); ?>"> <i class="fas fa-edit"></i>  </a>
                                        <form   style="margin:0px 2px  ;display:inline"  action="<?php echo e(route('admin.skills.destroy',$ad->id)); ?>" id="date-form-<?php echo e($ad->id); ?>" method="post">
                                            <?php echo e(csrf_field()); ?>

                                            <?php echo e(method_field('DELETE')); ?>

                                        </form>
                                        <a class="btn btn-danger btn-sm"  onclick="
                                            if(confirm('<?php echo app('translator')->get('site.Are_You_Sure_You_Want_To_Delete_This_Skill'); ?>')){
                                            event.preventDefault();document.getElementById('date-form-<?php echo e($ad->id); ?>').submit()
                                            }else{
                                            event.preventDefault();
                                            }"  href="<?php echo e(route('admin.skills.destroy',$ad->id)); ?>"><i class="fas fa-trash"></i>   </a>
                                    </div></td>

                            </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts._app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\profile\resources\views/dashboard/skills/index.blade.php ENDPATH**/ ?>