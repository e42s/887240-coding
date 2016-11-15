  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content">

    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6 col-xs-12">
        <div class="box">
          <div class="box-header with-border">
            <center><h3 class="box-title">รายการการส่งงานทั้งหมด</h3></center>
          </div>

          <div class="box-body">
            <form id="homeworkManagerSelect" action="<?php echo site_url('teacher/homework_manager_selectGroup');?>">
                  <label>รายวิชา:</label>
                  <select class="form-control">
                    <option>887240 - System Analysis and Designs</option>
                    <option>887493 - Web Programming</option>
                  </select>
            
                  
                <div class="box-footer">
                  <button type="reset" class="btn btn-danger">Reset</button>
                  <button type="submit" class="btn btn-success pull-right">Comfirm</button>
                </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-3"></div>
    </div>


  </section>

  </div>

  <!-- /.content-wrapper -->

