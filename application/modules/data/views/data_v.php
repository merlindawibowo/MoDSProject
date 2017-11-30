<?php $this->load->view('template/_header'); ?>
<?php $this->load->view('template/_aside'); ?>
<div class="user-dashboard">
    <h1>Data</h1>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 gutter">
            <div class="sales">
                <!-- <h2>Your Scheme</h2> -->
                <div id="message"></div>
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <a href="<?php echo site_url() ?>upload">
                      <button class="btn btn-lg btn-success" type="button">
                          <span>Upload</span>
                      </button>
                    </a>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 col-sm-6  col-md-offset-4 col-sm-offset-4 col-xs-12">
                      <form id="form-select-file">
                        <h4>List File</h4>
                        <div id="select-file">

                        </div>
                        <button class="btn btn-lg btn-primary" type="submit">
                            <span>Set</span>
                        </button>
                      </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('template/_footer'); ?>
