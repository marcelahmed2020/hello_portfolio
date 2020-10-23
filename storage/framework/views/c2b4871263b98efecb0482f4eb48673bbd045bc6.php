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
        <div class="sidebar-brand-text mx-3"><?php echo e($settings->site_name); ?></div>
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

     <li class="nav-item   <?php  if (preg_match('/prices/i',$url)){echo  'active';} ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseprices" aria-expanded="true" aria-controls="collapseprices">
            <i class="fas fa-fw fa-list"></i>
            <span>  <?php echo app('translator')->get('site.prices'); ?> </span>
        </a>
        <div id="collapseprices" class="collapse <?php  if (preg_match('/prices/i',$url)){echo  'show';} ?>" aria-labelledby="headingpricesTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header"> <?php echo app('translator')->get('site.prices'); ?> <?php echo app('translator')->get('site.components'); ?>:</h6>
                 <a class="collapse-item <?php  if (preg_match('/prices/i',$url)){echo  'active';} ?>" href="<?php echo e(route('admin.prices.index')); ?>"><?php echo app('translator')->get('site.view'); ?> </a>
                <a class="collapse-item <?php  if (preg_match('/prices/i',$url)){echo  'active';} ?>" href="<?php echo e(route('admin.prices.create')); ?>"><?php echo app('translator')->get('site.add'); ?> </a>
             </div>
        </div>
    </li>


     <li class="nav-item   <?php  if (preg_match('/skills/i',$url)){echo  'active';} ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseprices" aria-expanded="true" aria-controls="collapseprices">
            <i class="fas fa-fw fa-list"></i>
            <span>  <?php echo app('translator')->get('site.skills'); ?> </span>
        </a>
        <div id="collapseprices" class="collapse <?php  if (preg_match('/skills/i',$url)){echo  'show';} ?>" aria-labelledby="headingskillsTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header"> <?php echo app('translator')->get('site.skills'); ?> <?php echo app('translator')->get('site.components'); ?>:</h6>
                 <a class="collapse-item <?php  if (preg_match('/skills/i',$url)){echo  'active';} ?>" href="<?php echo e(route('admin.skills.index')); ?>"><?php echo app('translator')->get('site.view'); ?> </a>
                <a class="collapse-item <?php  if (preg_match('/skills/i',$url)){echo  'active';} ?>" href="<?php echo e(route('admin.skills.create')); ?>"><?php echo app('translator')->get('site.add'); ?> </a>
             </div>
        </div>
    </li>
     <li class="nav-item   <?php  if (preg_match('/services/i',$url)){echo  'active';} ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseservices" aria-expanded="true" aria-controls="collapseprices">
            <i class="fas fa-fw fa-list"></i>
            <span>  <?php echo app('translator')->get('site.services'); ?> </span>
        </a>
        <div id="collapseservices" class="collapse <?php  if (preg_match('/services/i',$url)){echo  'show';} ?>" aria-labelledby="headingservicesTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header"> <?php echo app('translator')->get('site.services'); ?> <?php echo app('translator')->get('site.components'); ?>:</h6>
                 <a class="collapse-item <?php  if (preg_match('/services/i',$url)){echo  'active';} ?>" href="<?php echo e(route('admin.services.index')); ?>"><?php echo app('translator')->get('site.view'); ?> </a>
                <a class="collapse-item <?php  if (preg_match('/services/i',$url)){echo  'active';} ?>" href="<?php echo e(route('admin.services.create')); ?>"><?php echo app('translator')->get('site.add'); ?> </a>
             </div>
        </div>
    </li>
  <li class="nav-item   <?php  if (preg_match('/portfolios/i',$url)){echo  'active';} ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseportfolios" aria-expanded="true" aria-controls="collapseportfolios">
            <i class="fas fa-fw fa-list"></i>
            <span>  <?php echo app('translator')->get('site.portfolios'); ?> </span>
        </a>
        <div id="collapseportfolios" class="collapse <?php  if (preg_match('/portfolios/i',$url)){echo  'show';} ?>" aria-labelledby="headingportfoliosTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header"> <?php echo app('translator')->get('site.portfolios'); ?> <?php echo app('translator')->get('site.components'); ?>:</h6>
                 <a class="collapse-item <?php  if (preg_match('/portfolios/i',$url)){echo  'active';} ?>" href="<?php echo e(route('admin.portfolios.index')); ?>"><?php echo app('translator')->get('site.view'); ?> </a>
                <a class="collapse-item <?php  if (preg_match('/portfolios/i',$url)){echo  'active';} ?>" href="<?php echo e(route('admin.portfolios.create')); ?>"><?php echo app('translator')->get('site.add'); ?> </a>
             </div>
        </div>
    </li>
  <li class="nav-item   <?php  if (preg_match('/educations/i',$url)){echo  'active';} ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseeducations" aria-expanded="true" aria-controls="collapseeducations">
            <i class="fas fa-fw fa-list"></i>
            <span>  <?php echo app('translator')->get('site.educations'); ?> </span>
        </a>
        <div id="collapseeducations" class="collapse <?php  if (preg_match('/educations/i',$url)){echo  'show';} ?>" aria-labelledby="headingeducationsTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header"> <?php echo app('translator')->get('site.educations'); ?> <?php echo app('translator')->get('site.components'); ?>:</h6>
                 <a class="collapse-item <?php  if (preg_match('/educations/i',$url)){echo  'active';} ?>" href="<?php echo e(route('admin.educations.index')); ?>"><?php echo app('translator')->get('site.view'); ?> </a>
                <a class="collapse-item <?php  if (preg_match('/educations/i',$url)){echo  'active';} ?>" href="<?php echo e(route('admin.educations.create')); ?>"><?php echo app('translator')->get('site.add'); ?> </a>
             </div>
        </div>
    </li>
    <li class="nav-item   <?php  if (preg_match('/professional_experiences/i',$url)){echo  'active';} ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseprofessional_experiences" aria-expanded="true" aria-controls="collapseprofessional_experiences">
            <i class="fas fa-fw fa-list"></i>
            <span>  <?php echo app('translator')->get('site.professional_experiences'); ?> </span>
        </a>
        <div id="collapseprofessional_experiences" class="collapse <?php  if (preg_match('/professional_experiences/i',$url)){echo  'show';} ?>" aria-labelledby="headingprofessional_experiencesTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header"> <?php echo app('translator')->get('site.professional_experiences'); ?> <br> <?php echo app('translator')->get('site.components'); ?>:</h6>
                 <a class="collapse-item <?php  if (preg_match('/professional_experiences/i',$url)){echo  'active';} ?>" href="<?php echo e(route('admin.professional_experiences.index')); ?>"><?php echo app('translator')->get('site.view'); ?> </a>
                <a class="collapse-item <?php  if (preg_match('/professional_experiences/i',$url)){echo  'active';} ?>" href="<?php echo e(route('admin.professional_experiences.create')); ?>"><?php echo app('translator')->get('site.add'); ?> </a>
             </div>
        </div>
    </li>


     <li class="nav-item <?php  if (preg_match('/settings/i',$url)){echo  'active';} ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefive" aria-expanded="true" aria-controls="collapsefive">
            <i class="fas fa-fw fa-cogs"></i>
            <span>Settings</span>
        </a>

        <div id="collapsefive" class="collapse <?php  if (preg_match('/settings/i',$url) || preg_match('/trash/i',$url)){echo  'show';} ?>" aria-labelledby="headingfiv" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Site settings components:</h6>
                 <a class="collapse-item <?php  if (preg_match('/settings/i',$url)){echo  'active';} ?>" href="<?php echo e(route('admin.settings.index')); ?>">View</a>



            </div>
        </div>
    </li>

    <!-- Nav Item  -->


    <!-- Divider -->
    <hr class="sidebar-divider">



    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
<?php /**PATH C:\xampp\htdocs\laravel\devmarcel\resources\views/dashboard/layouts/_aside.blade.php ENDPATH**/ ?>