  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><b>Hospital-system</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/mylogo.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
         <!----Adminstration Area starts here----->
             <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Adminstration
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="users.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="usersview.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="permission.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User permission</p>
                </a>
              </li>
    
            </ul>
          </li>
          <!----Ends here----->
           <!----patient Area starts here----->
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-nurse"></i>
              <p>
                Health Service
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Patient.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add patients</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="checkup.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Add checkup</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="checkup_results.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Add checkup Results</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="prescription.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Add prescription</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="diseases.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Add Diseases</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="drugs.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Add Drugs</p>
                </a>
              </li>
            
            
    
            </ul>
          </li>
          <!----Ends here----->
            <!----Finance Area starts here----->
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-dollar-sign"></i>
              <p>
                Finance
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">3</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="payment.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add payments</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="accounts.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Accounts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="expenses.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Add Expense</p>
                </a>
              </li>
            </ul>
          </li>
          <!----Ends here----->

           
         

          <!----Hrm Area starts here----->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Hrm
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">5</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="emloyee.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register employee</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="employeeview.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>employee List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="doctor.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>doctors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="jobs.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add jobs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="department.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add departments</p>
                </a>
              </li>
              
    
            </ul>
          </li>
          <!----Ends here----->

      <!----Reports Area starts here----->
      <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                Reports
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">4</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="emloyee.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register employee</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="employeeview.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>employee List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="jobs.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add jobs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="departments.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add departments</p>
                </a>
              </li>
              
    
            </ul>
          </li>
           <!----Ends here----->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>