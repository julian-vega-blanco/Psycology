<aside class="main-sidebar sidebar-dark-green elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link" style="background-color: green;">
      <img src="views/assets/img/ANGIEGOD.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Anguie</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="views/assets/img/ANGIEGOD.jpeg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Angie</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->


      <!-- Sidebar Menu -->


      <nav class="mt-2">

      

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
            <a href="home" class="nav-link <?php if($routesArray[3]== "home"):?> active <?php endif?>">
              <i class="nav-icon far fa-user"></i>
              <p>
                Home
              </p>
            </a>
        </li>


        <li class="nav-item">
            <a href="clinicHistory" class="nav-link <?php if($routesArray[3]== "clinicHistory"):?> active <?php endif?>">
              <i class="nav-icon far fa-user"></i>
              <p>
                Clinic History
              </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="users" class="nav-link <?php if($routesArray[3]== "users"):?> active <?php endif?>">
              <i class="nav-icon far fa-user"></i>
              <p>
                Users
              </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="interviews" class="nav-link <?php if($routesArray[3]== "interviews"):?> active <?php endif?>">
              <i class="nav-icon far fa-user"></i>
              <p>
                Interviews
              </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="psychologists" class="nav-link <?php if($routesArray[3]== "psychologists"):?> active <?php endif?>">
              <i class="nav-icon far fa-user"></i>
              <p>
                Psychologists
              </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="treatment" class="nav-link <?php if($routesArray[3]== "treatment"):?>active <?php endif?>">
              <i class="nav-icon far fa-user"></i>
              <p>
                Treatment
              </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>