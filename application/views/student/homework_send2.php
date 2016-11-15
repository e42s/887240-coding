  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content">


    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6 col-xs-12">
        <div class="box">
          <div class="box-header with-border">
            <center><h3 class="box-title">ส่งการบ้าน</h3></center><br>
            <center><h3 class="box-title">วิชา 887240 - System Analysis and Designs - กลุ่ม 3401</h3></center>
          </div>

          <div class="box-body">
           <form action="<?php echo site_url('Student/status_homework');?>" method="post">
             <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">ส่งการบ้าน</a></li>
              <li><a href="#tab_2" data-toggle="tab">ประวัติการส่ง</a></li>
            </ul>
                   <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                  <form action="#" id="submitHomework">
                      <div class="form-group">
                      <label>Chapter</label>
                      <select class="form-control">
                        <option disabled>#0 - 14 ส.ค. 59 : Software Spec</option>
                        <option disabled>#1 - 26 ส.ค. 59 : Wireframe</option>
                        <option disabled>#2 - 27 ส.ค. 59 : Mockup</option>
                        <option disabled>#3 - 28 ส.ค. 59 : Database</option>
                        <option disabled>#4 - 29 ส.ค. 59 : Docs</option>
                        <option >#5 - 16 ต.ค. 59 : Half</option>

                      </select>
                    </div>
                      <div class="form-group">

                      <label for="homeworkFile">เลือกไฟล์งาน</label>
                      <input type="file" id="homeworkFile" multiple>
                  </div>
                  <div class="form-group text-center">
                    <button type="submit" class="btn btn-success ">Confirm</button>
                  </div>
                </form>
                 


              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
              <div class="form-group">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ว/ด/ป</th>
                  <th>งานครั้งที่</th>
                  <th>ชื่อไฟล์</th>
                  <th>เวลา</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>11 ต.ค. 59</td>
                  <th>#5 - Half</th>
                  <td>887240-05-spec.pdf</td>
                  <td>18:00</td>
                  <td>
                    <a href="#" class="btn btn-xs btn-danger">ลบ</a>
                  </td>
                </tr>
                <tr>
                  <td>13 ต.ค. 59</td>
                  <th>#5 - Half</th>
                  <td>887240-05-picture.pdf</td>
                  <td>14:36</td>
                  <td>
                    <a href="#" class="btn btn-xs btn-danger">ลบ</a>
                  </td>
                </tr>
                
                </tbody>
              </table>
              </div>
                
              </div>
           
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3"></div>
    </div>

    </section>
  </div>

  <!-- /.content-wrapper -->


  <!-- /.content