  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content">

    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6 col-xs-12">
        <div class="box">
          <div class="box-header with-border">
            <center><h3 class="box-title">เลือกวิชา/กลุ่มรายงานการเช็คชื่อ</h3></center><br>
          </div>

          <div class="box-body">
            <form action="<?php echo site_url('teacher/namereport_select');?>">
                  <center><label>วิชา:</label></center>
                  <select class="form-control">
                    <option>887240 - System Analysis and Designs - กลุ่ม 3401</option>
                    <option>887321 - Information Security Management - กลุ่ม 3401</option>
                    <option>887342 - Software Development Process - กลุ่ม 3402</option>
                    <option>887370 - Internet Technology and Services - กลุ่ม 3401</option>
                  </select>

                  <center><label>กลุ่ม:</label></center>
                  <select class="form-control">
                    <option>กลุ่ม 1</option>
                    <option>กลุ่ม 2</option>
                    <option>กลุ่ม 3</option>
                    <option>กลุ่ม 3401</option>
                  </select>

                  <center><label>ประเภท:</label></center>
                  <select class="form-control">
                    <option>Lecture</option>
                    <option>Lab</option>
                  </select>
            
                  
                <div class="box-footer text-center">
                  <button type="submit" class="btn btn-success">ยืนยัน</button>
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