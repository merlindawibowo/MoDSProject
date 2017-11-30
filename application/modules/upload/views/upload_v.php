

<?php $this->load->view('template/_script'); ?>

<?php $this->load->view('template/_header'); ?>
<?php $this->load->view('template/_aside'); ?>
<div class="user-dashboard">
    <h1>Upload Data</h1>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 gutter">
            <div class="sales">
                <div id="message"></div>
                <form id="form-upload-file" method="POST">
                  <input type="file" name="file" id="file"><br/>
                  <button type="submit">submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('template/_footer'); ?>
