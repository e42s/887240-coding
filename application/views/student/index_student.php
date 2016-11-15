<style>
.carousel-inner > .item > img, 
.carousel-inner > .item > a > img{
width: 100%; /* use this, or not */
margin: auto;
}
</style>
<div class="content-wrapper">
  <section class="content">
    <div class="row">
        <div class="col-md-12 text-center">
          <div class="box box-solid">

            <!-- /.box-header -->
            <div class="box-body text-center">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="<?php echo base_url('image/coverIndex.png');?>" alt="New Buliding">

                    <div class="carousel-caption">
                      New Buliding
                    </div>
                  </div>
                  <div class="item">
                    <img src="<?php echo base_url('image/14642562_1150052258395776_1265434788_n.png');?>" alt="New Buliding">

                    <div class="carousel-caption">
                      Information Technology
                    </div>
                  </div>
                  <div class="item">
                    <img src="<?php echo base_url('image/14643212_1150052638395738_32442875_n.png');?>" alt="New Buliding">

                    <div class="carousel-caption">
                      Security
                    </div>
                  </div>
                  <div class="item">
                    <img src="<?php echo base_url('image/14699735_1150052465062422_154239014_n.png');?>" alt="New Buliding">

                    <div class="carousel-caption">
                      Web Programming
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="fa fa-angle-right"></span>
                </a>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

    </div>
  </section>
</div>