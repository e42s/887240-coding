  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="http://reg.buu.ac.th/registrar/getstudentimage.asp?id=<?php echo $student->student_id;?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $student->student_firstname;?> <?php echo $student->student_lastname;?></p>
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
        <li class=" treeview">
          <a href="<?php echo site_url('student/index_student');?>">
            <i class="glyphicon glyphicon-home"></i> <span>Home</span>
            <span class="pull-right-container">
            </span>
          </a>
 
        </li>

        <li>
          <a href="<?php echo site_url('student/time_check');?>">
            <i class="glyphicon glyphicon-check"></i> <span>Check Time in Class</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo site_url('student/homework_send');?>">
            <i class="glyphicon glyphicon-send"></i>
            <span>Homework Send</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
            </span>
          </a>

        </li>
       
        
        <!--<li class="treeview">
          <a href="<?php echo site_url('student/tables_student');?>">
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

