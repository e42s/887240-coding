  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('image/14642807_1150024835065185_1164436550_n.png');?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $teacher->teacher_firstname;?> <?php echo $teacher->teacher_lastname;?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <li class="active treeview">
          <a href="<?php echo site_url('teacher/index_teacher');?>">
            <i class="glyphicon glyphicon-home"></i> <span>Home</span>
          </a>
        
        </li>


        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-book"></i>
            <span>Student Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('teacher/namecheck_manager');?>"><i class="glyphicon glyphicon-plus"></i> Add Class</a></li>
            <li><a href="<?php echo site_url('teacher/namereport_manager');?>"><i class="glyphicon glyphicon-list-alt"></i> Report</a></li>

          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-book"></i>
            <span>Homework Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('teacher/homework_manager');?>"><i class="glyphicon glyphicon-plus"></i> Add Homework</a></li>
            <li><a href="<?php echo site_url('teacher/homework_manager_select');?>"><i class="glyphicon glyphicon-list-alt"></i> Report</a></li>

          </ul>
        </li>

        
        <!--<li class="treeview">
          <a href="<?php echo site_url('teacher/tables_manager');?>">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        
        </li>
        <li>
          <a href="pages/calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>-->
    </section>
    <!-- /.sidebar -->
  </aside>

