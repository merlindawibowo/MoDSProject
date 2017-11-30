<?php $this->load->view('template/_header'); ?>
<?php $this->load->view('template/_aside'); ?>
<div class="user-dashboard">
    <h1>Training Data</h1>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 gutter">
            <div class="sales">
                <ul class="nav nav-tabs" style="margin-bottom: 20px;">
                  <li class="active"><a href="#">Training Data</a></li>
                  <li><a href="#">Reduct</a></li>
                  <li><a href="#">Rules</a></li>
                </ul>
                <ul class="nav nav-tabs" style="margin-bottom: 20px;">
                  <li class="active"><a href="#">Equivalent Class</a></li>
                  <li><a href="<?php echo site_url(); ?>training_data/discernibility_matrix">Discernibility Matrix</a></li>
                  <li><a href="<?php echo site_url(); ?>training_data/discernibility_matrix_modulo">Discernibility Matrix Modulo D</a></li>
                </ul>
                <table id="data_training" class="table table-bordered hover nowrap" cellspacing="0" width="100%">
        			<thead>
        				<tr>
        					<th>No.</th>
                            <th>Class</th>
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
                        foreach ($data as $key => $value) :
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo 'EC'.$no; ?></td>
                                <td><?php echo $value->date; ?></td>
                                <td><?php echo $value->time; ?></td>
                                <td><?php echo $value->region; ?></td>
                                <td><?php echo $value->state; ?></td>
                                <td><?php echo $value->api; ?></td>
                                <td><?php echo $value->decision; ?></td>
                            </tr>
                        <?php
                        $no++;
        				endforeach;
        				?>
        			</tbody>
        		</table>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('template/_footer'); ?>
<script type="text/javascript">
$(document).ready(function() {
	$('#data_training').DataTable({
		"ordering" : false,
		"bLengthChange" : true,
		"searching" : true,
	});
} );
</script>
</body>
</html>
