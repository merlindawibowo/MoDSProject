<?php $this->load->view('template/_header'); ?>
<style media="screen">
.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  margin: 5px;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
}
.btn-circle.btn-lg {
  width: 50px;
  height: 50px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.33;
  border-radius: 25px;
}
.btn-circle.btn-xl {
  width: 70px;
  height: 70px;
  padding: 10px 16px;
  font-size: 24px;
  line-height: 1.33;
  border-radius: 35px;
}
</style>
<?php $this->load->view('template/_aside'); ?>
<div class="user-dashboard">
    <h1>Summarization</h1>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 gutter">
            <div class="sales">
                <!-- <h2>Your Scheme</h2> -->
                <div class="row">
                  <div class="col-md-3 col-sm-3  col-md-offset-4 col-sm-offset-4 col-xs-10 col-xs-offset-2">
                    <a href="<?php echo site_url() ?>data_preprocessing">
                        <button type="button" data-toggle="tooltip" title="Data Preprocessing" class="btn btn-success btn-circle btn-xl"><i class="glyphicon glyphicon-cd"></i></button>
                    </a>
                    <a href="<?php echo site_url() ?>training_data">
                        <button type="button" data-toggle="tooltip" title="Training Data" class="btn btn-info btn-circle btn-xl"><i class="glyphicon glyphicon-duplicate"></i></button>
                    </a>
                    <a href="<?php echo site_url() ?>testing_data">
                        <button type="button" data-toggle="tooltip" title="Testing Data" class="btn btn-warning btn-circle btn-xl"><i class="glyphicon glyphicon-file"></i></button>
                    </a>
                    <a href="<?php echo site_url() ?>analytics">
                        <button type="button" data-toggle="tooltip" title="Analytics" class="btn btn-danger btn-circle btn-xl"><i class="glyphicon glyphicon-stats"></i></button>
                    </a>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('template/_footer'); ?>
