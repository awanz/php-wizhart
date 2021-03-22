<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
  <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" width="50px" height="50px" src="https://adminlte.io/themes/dev/AdminLTE/dist/img/user2-160x160.jpg" alt="User Image">
    <div>
      <p class="app-sidebar__user-designation"><small>Selamat datang,</small></p>
      <p class="app-sidebar__user-name"><?= $_SESSION['username'] ?></p>
    </div>
  </div>
  <ul class="app-menu">
    <li><a class="app-menu__item" href="<?= base_url("dashboard.php") ?>"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
    <li class="treeview">
        <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-slideshare"></i>
            <span class="app-menu__label">Slideshow Header</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?= base_url('slideshow/add.php') ?>"><i class="icon fa fa-circle-o"></i> Add Slideshow</a></li>
            <li><a class="treeview-item" href="<?= base_url('slideshow/list.php') ?>"><i class="icon fa fa-circle-o"></i> List Slideshow</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-tasks"></i>
            <span class="app-menu__label">Services</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?= base_url('services/add.php') ?>"><i class="icon fa fa-circle-o"></i> Service Add</a></li>
            <li><a class="treeview-item" href="<?= base_url('services/list.php') ?>"><i class="icon fa fa-circle-o"></i> Service Lists</a></li>
        </ul>
    </li>
    <li>
        <a class="app-menu__item" href="<?= base_url("setting/about.php") ?>">
            <i class="app-menu__icon fa fa-id-card"></i>
            <span class="app-menu__label">About</span>
        </a>
    </li>
    <li class="treeview">
        <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-rss"></i>
            <span class="app-menu__label">Blog</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?= base_url('blogs/add.php') ?>"><i class="icon fa fa-circle-o"></i> Add Article</a></li>
            <li><a class="treeview-item" href="<?= base_url('blogs/list.php') ?>"><i class="icon fa fa-circle-o"></i> Article Lists</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-users"></i>
            <span class="app-menu__label">Teams</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?= base_url('teams/add.php') ?>"><i class="icon fa fa-circle-o"></i> Add Member</a></li>
            <li><a class="treeview-item" href="<?= base_url('teams/list.php') ?>"><i class="icon fa fa-circle-o"></i> List Member</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-star"></i>
            <span class="app-menu__label">Testimonials</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?= base_url('testimonials/add.php') ?>"><i class="icon fa fa-circle-o"></i> Add Testimonials</a></li>
            <li><a class="treeview-item" href="<?= base_url('testimonials/list.php') ?>"><i class="icon fa fa-circle-o"></i> List Testimonials</a></li>
        </ul>
    </li>
    <li><a class="app-menu__item" href="<?= base_url("setting/terms.php") ?>"><i class="app-menu__icon fa fa-handshake-o"></i><span class="app-menu__label">Terms</span></a></li>
    <li><a class="app-menu__item" href="<?= base_url("setting/index.php") ?>"><i class="app-menu__icon fa fa-cogs"></i><span class="app-menu__label">Setting</span></a></li>
    
  </ul>
</aside>