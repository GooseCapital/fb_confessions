<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="ion ion-navicon-round"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="ion ion-search"></i></a></li>
          </ul>
         
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
            <i class="ion ion-android-person d-lg-none"></i>
            <div class="d-sm-none d-lg-inline-block"><?php echo $name; ?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="/admin/login/logout" class="dropdown-item has-icon">
                <i class="ion ion-log-out"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="/admin/trang_chu">THPT BAC LIEU CFS</a>
          </div>
          <div class="sidebar-user">
            <div class="sidebar-user-picture">
              <img alt="image" src="<?php echo $avatar; ?>">
            </div>
            <div class="sidebar-user-details">
              <div class="user-name"><?php echo $name; ?></div>
              <div class="user-role">
               <?php print $chucvu; ?>
              </div>
            </div>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li>
              <a href="/admin/trang_chu"><i class="ion ion-speedometer"></i><span>Dashboard</span></a>
            </li>

            <li class="menu-header">Components</li>
            
            
            <li>
              <a href="/admin/confessions_moi"><i class="ion ion-clipboard"></i><span>Confessions mới</span></a>
            </li>
            <li>
              <a href="/admin/them_admin_moi"><i class="ion ion-plus"></i><span>Thêm admin</span></a>
            </li>
         </ul>
         
        </aside>
      </div>