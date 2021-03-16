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
    <li><a class="app-menu__item" href="dashboard.html"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
    <li class="treeview">
        <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-laptop"></i>
            <span class="app-menu__label">Slideshow Header</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?= base_url('add.php') ?>"><i class="icon fa fa-circle-o"></i> Add Article</a></li>
            <li><a class="treeview-item" href="<?= base_url('list.php') ?>"><i class="icon fa fa-circle-o"></i> List Articles</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-laptop"></i>
            <span class="app-menu__label">Services</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?= base_url('add.php') ?>"><i class="icon fa fa-circle-o"></i> Add Article</a></li>
            <li><a class="treeview-item" href="<?= base_url('list.php') ?>"><i class="icon fa fa-circle-o"></i> List Articles</a></li>
        </ul>
    </li>
    <li><a class="app-menu__item" href="setting/index.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Teamwork</span></a></li>
    <li class="treeview">
        <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-laptop"></i>
            <span class="app-menu__label">Blog</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?= base_url('add.php') ?>"><i class="icon fa fa-circle-o"></i> Add Article</a></li>
            <li><a class="treeview-item" href="<?= base_url('list.php') ?>"><i class="icon fa fa-circle-o"></i> List Articles</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-laptop"></i>
            <span class="app-menu__label">Testimonial</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?= base_url('add.php') ?>"><i class="icon fa fa-circle-o"></i> Add Article</a></li>
            <li><a class="treeview-item" href="<?= base_url('list.php') ?>"><i class="icon fa fa-circle-o"></i> List Articles</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-laptop"></i>
            <span class="app-menu__label">About US</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?= base_url('add.php') ?>"><i class="icon fa fa-circle-o"></i> Add Article</a></li>
            <li><a class="treeview-item" href="<?= base_url('list.php') ?>"><i class="icon fa fa-circle-o"></i> List Articles</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-laptop"></i>
            <span class="app-menu__label">Contact US</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?= base_url('add.php') ?>"><i class="icon fa fa-circle-o"></i> Add Article</a></li>
            <li><a class="treeview-item" href="<?= base_url('list.php') ?>"><i class="icon fa fa-circle-o"></i> List Articles</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-laptop"></i>
            <span class="app-menu__label">Terms</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?= base_url('add.php') ?>"><i class="icon fa fa-circle-o"></i> Add Article</a></li>
            <li><a class="treeview-item" href="<?= base_url('list.php') ?>"><i class="icon fa fa-circle-o"></i> List Articles</a></li>
        </ul>
    </li>
    <li><a class="app-menu__item" href="setting/index.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Messages</span></a></li>
    <li><a class="app-menu__item" href="setting/index.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Setting</span></a></li>
    
  </ul>
</aside>