<?php
use App\Http\Controllers\AuthenticateController;
$admin = AuthenticateController::isAdmin();
?>
 
 <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo e(route('dashboard')); ?>">
        <div class="sidebar-brand-icon">
          <img src="images/logo.png"/>
        </div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Tables
      </div>
      
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(url('/prospect')); ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Prospects</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link"  href="<?php echo e(url('/client')); ?>">
          <i class="fas fa-fw fa-building"></i>
          <span>Clients</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link"  href="<?php echo e(url('/contact')); ?>">
          <i class="fas fa-fw fa-users"></i>
          <span>Contacts</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(url('/opportunite')); ?>">
          <i class="fas fa-fw fa-shopping-cart"></i>
          <span>Opportunités</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link"  href="<?php echo e(url('/rdv')); ?>">
          <i class="fas fa-fw fa-calendar"></i>
          <span>Rendez-Vous</span>
        </a>
      </li>
      <?php if ($admin): ?>
      <li class="nav-item">
        <a class="nav-link"  href="<?php echo e(url('/produit')); ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Produits</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link"  href="<?php echo e(url('/user')); ?>">
          <i class="fas fa-fw fa-user"></i>
          <span>Utilisateurs</span>
        </a>
      </li>
      <?php endif ?>
      <hr class="sidebar-divider">
    </ul><?php /**PATH C:\laragon\www\GRC\resources\views/layout/admin/sidebar.blade.php ENDPATH**/ ?>