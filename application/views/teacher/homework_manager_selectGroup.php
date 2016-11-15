  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content">

    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6 col-xs-12">
        <div class="box">
          <div class="box-header with-border">
            <center><h3 class="box-title">รายการการส่งงานทั้งหมด</h3></center>
            <center><h3 class="box-title">วิชา : 887240 - System Analysis and Designs</h3></center>

          </div>

          <div class="box-body">
            <form id="homeworkManagerSelect" action="<?php echo site_url('teacher/homework_manager_list');?>">
                  <label>Chapter:</label>
                  <select class="form-control">
                    <option>#0 - 14 ส.ค. 59 : Software Spec</option>
                    <option>#1 - 26 ส.ค. 59 : Wireframe</option>
                    <option>#2 - 27 ส.ค. 59 : Mockup</option>
                    <option>#3 - 28 ส.ค. 59 : Database</option>
                    <option>#4 - 29 ส.ค. 59 : Docs</option>
                    <option >#5 - 16 ต.ค. 59 : Half</option>
                  </select>

                  <label>กลุ่มเรียน:</label>
                  <select class="form-control">
                    <option>กลุ่ม 1</option>
                    <option>กลุ่ม 2</option>
                    <option>กลุ่ม 3401</option>
                    <option>กลุ่ม 3402</option>

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

