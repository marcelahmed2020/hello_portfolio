<?php
$url = Request::url();
?>
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo e(route('admin.dashboard')); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SSS</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo e(route('admin.dashboard')); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span><?php echo app('translator')->get('site.dashboard'); ?></span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">

  <?php echo app('translator')->get('site.Interface'); ?>

    </div>



    <li class="nav-item   <?php  if (preg_match('/aboutus/i',$url)){echo  'active';} ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseaboutus" aria-expanded="true" aria-controls="collapseaboutus">
            <i class="fas fa-fw fa-list"></i>
            <span>  <?php echo app('translator')->get('site.aboutus'); ?> </span>
        </a>
        <div id="collapseaboutus" class="collapse <?php  if (preg_match('/aboutus/i',$url)){echo  'show';} ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header"> <?php echo app('translator')->get('site.aboutus'); ?> <?php echo app('translator')->get('site.components'); ?>:</h6>

                <a class="collapse-item <?php  if (preg_match('/aboutus/i',$url)){echo  'active';} ?>" href="<?php echo e(route('admin.aboutus.index')); ?>"><?php echo app('translator')->get('site.view'); ?> </a>


                <a class="collapse-item <?php  if (preg_match('/aboutus/i',$url)){echo  'active';} ?>" href="<?php echo e(route('admin.aboutus.create')); ?>"><?php echo app('translator')->get('site.add'); ?> </a>

            </div>
        </div>
    </li>



      <?php if (app('laratrust')->can(['settings-read','trash-read'])) : ?>
    <li class="nav-item <?php  if (preg_match('/settings/i',$url)){echo  'active';} ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefive" aria-expanded="true" aria-controls="collapsefive">
            <i class="fas fa-fw fa-cogs"></i>
            <span>Settings</span>
        </a>

        <div id="collapsefive" class="collapse <?php  if (preg_match('/settings/i',$url) || preg_match('/trash/i',$url)){echo  'show';} ?>" aria-labelledby="headingfiv" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Site settings components:</h6>
                <?php if (app('laratrust')->can('settings-read')) : ?>
                <a class="collapse-item <?php  if (preg_match('/settings/i',$url)){echo  'active';} ?>" href="<?php echo e(route('settings.index')); ?>">View</a>
                <?php endif; // app('laratrust')->can ?>
                <?php if (app('laratrust')->can('trash-read')) : ?>
                <a class="collapse-item <?php  if (preg_match('/trash/i',$url)){echo  'active';} ?>" href="<?php echo e(route('trash.index')); ?>">trash</a>
                <?php endif; // app('laratrust')->can ?>

            </div>
        </div>
    </li>
    <?php endif; // app('laratrust')->can ?>

    <!-- Nav Item  -->


    <!-- Divider -->
    <hr class="sidebar-divider">



    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
<?php /**PATH E:\projects\profile\resources\views\dashboard\layouts\_aside.blade.php ENDPATH**/ ?>