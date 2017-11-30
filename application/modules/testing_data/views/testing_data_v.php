<?php $this->load->view('template/_header'); ?>
<?php $this->load->view('template/_aside'); ?>
<div class="user-dashboard">
    <h1>Testing Data</h1>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 gutter">
            <div class="sales">
                <ul class="nav nav-tabs" style="margin-bottom: 20px;">
                  <li class="active"><a href="#">Testing Data</a></li>
                  <li><a href="#">Classification</a></li>
                </ul>
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
                        foreach ($data as $key => $value) :
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
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('template/_footer'); ?>
