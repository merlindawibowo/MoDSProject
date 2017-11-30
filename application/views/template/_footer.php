        <div id="setting" class="modal fade" role="dialog">
            <div class="modal-dialog">

            <!-- Modal content-->
                <form id="form-split" class="form-inline" method="post">
                    <div class="modal-content">
                        <div class="modal-header login-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Split in two :</h4>
                        </div>
                        <div class="modal-body">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="form-group">
                                            <input type="text" name="data_1" class="form-control" id="data_1">
                                        </div>
                                        <span style="margin-left:5px; margin-right:5px;">/</span>
                                        <div class="form-group">
                                            <input type="text" name="data_2" class="form-control" id="data_2" disabled>
                                        </div>
                                        <span style="margin-left:5px;">%</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="cancel" data-dismiss="modal">Close</button>
                            <button type="submit" class="add-project">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        </div>
    </div>
</div>

<?php $this->load->view('template/_script'); ?>
<script type="text/javascript">
$(document).ready(function(){
   $('[data-toggle="offcanvas"]').click(function(){
       $("#navigation").toggleClass("hidden-xs");
   });
});
</script>
