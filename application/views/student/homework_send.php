  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content">


    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6 col-xs-12">
        <div class="box">
          <div class="box-header with-border">
            <center><h3 class="box-title">ส่งการบ้าน</h3></center><br>
            <center><h3 class="box-title">ปีการศึกษา 59/1</h3></center>
          </div>

          <div class="box-body">
            <form action="<?php echo site_url('Student/homework_send2');?>" method="post">
            
                  <center><label>รหัสรายวิชา</label></center>
                  <select class="form-control">
                    <option>887240 - System Analysis and Designs - กลุ่ม 3401</option>
                    <option>887321 - Information Security Management - กลุ่ม 3401</option>
                    <option>887342 - Software Development Process - กลุ่ม 3402</option>
                    <option>887370 - Internet Technology and Services - กลุ่ม 3401</option>
                  </select>
                </div>
                 <div class="box-footer text-center">
                <button type="submit" class="btn btn-success ">Confirm</button>
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


  <!-- /.content