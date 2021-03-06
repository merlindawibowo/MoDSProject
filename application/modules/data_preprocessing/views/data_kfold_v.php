<?php $this->load->view('template/_header'); ?>
<?php $this->load->view('template/_aside'); ?>
<div class="user-dashboard">
    <h1>Data Preprocessing</h1>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 gutter">
            <div class="sales">
                <ul class="nav nav-tabs" style="margin-bottom: 20px;">
                  <li><a href="#">Main Data</a></li>
                  <li><a href="<?php echo site_url() ?>data_preprocessing/unused_data">Unused Data</a></li>
                  <li class="active"><a href="<?php echo site_url() ?>data_preprocessing/kfold_data">K-Fold Data</a></li>
                </ul>
                <?php  
                   $tableno = 0;
                        foreach ($data as $key => $datatable) : 
                ?>
                <h3> Fold <?php echo $tableno++;?> </h3>
                <table id="data_preprocessing" class="table table-bordered hover nowrap" cellspacing="0" width="100%">
        			<thead>
        				<tr>
        					<th>No.</th>
        					<th>Date</th>
        					<th>Time</th>
        					<th>Region</th>
        					<th>State</th>
        					<th>API</th>
                            <th>Decision</th>
        				</tr>
        			</thead>

        			<tbody>
                        <?php
                        $no = 1;
                        foreach ($datatable as $data => $value) :
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $value->date; ?></td>
                                <td><?php echo $value->time; ?></td>
                                <td><?php echo $value->region; ?></td>
                                <td><?php echo $value->state; ?></td>
                                <td><?php echo $value->api; ?></td>
                                <td><?php echo $value->decision; ?></td>
                            </tr>
                        <?php
        				endforeach;
        				?>
        			</tbody>
        		</table>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('template/_footer'); ?>
<script type="text/javascript">
$(document).ready(function() {
	$('#data_preprocessing').DataTable({
		"ordering" : false,
		"bLengthChange" : true,
		"searching" : true,
	});
} );
</script>
</body>
</html>
