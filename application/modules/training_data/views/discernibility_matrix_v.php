<?php $this->load->view('template/_header'); ?>
<?php $this->load->view('template/_aside'); ?>
<div class="user-dashboard">
    <h1>Training Data</h1>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 gutter">
            <div class="sales">
                <ul class="nav nav-tabs" style="margin-bottom: 20px;">
                  <li class="active"><a href="<?php echo site_url() ?>training_data">Training Data</a></li>
                  <li><a href="#">Reduct</a></li>
                  <li><a href="#">Rules</a></li>
                </ul>
                <ul class="nav nav-tabs" style="margin-bottom: 20px;">
                  <li><a href="<?php echo site_url(); ?>training_data">Training Data</a></li>
                  <li class="active"><a href="#">Discernibility Matrix</a></li>
                  <li><a href="<?php echo site_url(); ?>training_data/discernibility_matrix_modulo">Discernibility Matrix Modulo D</a></li>
                </ul>
                <div class="col-md-12" style="margin-bottom:20px;">
                    A = Date, B = Time, C = Region, D = State
                    <div class="col-md-3 col-md-offset-9">
                        <a href="<?php echo site_url(); ?>training_data/discernibilityMatrix" type="button" class="btn btn-primary float-right">Hitung Discernibility Matrix</a>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <table id="data_matrix" class="table-bordered hover" cellspacing="0" width="100%">
                            <thead>
            					<tr>
            						<td width="3%">Data Code</td>
            						<?php $total = $data_th->jumlah; ?>
            						<?php for ($i = 1; $i <= $data_th->jumlah; $i++) : ?>
        								<td width="3%"><?php echo 'EC'.$i; ?></td>
            						<?php endfor; ?>
            					</tr>
            				</thead>
            				<tbody>
            					<?php
            					$nome = $total;
            					foreach ($data_matrix as $key => $value) :
            						?>
            						<?php if($nome == $total): ?>
            							<tr>
            								<td width="3%"><?php echo $value->class; ?></td>
            								<td width="3%"><?php echo $value->matrix; ?></td>
            								<?php $nome = 0; ?>
            							<?php else : ?>
            								<td width="3%"><?php echo $value->matrix; ?></td>
            								<?php if($nome == $total): ?>
            								</tr>
            							<?php endif; ?>
            							<?php
            						endif;
            						$nome++;
            						?>
            					<?php endforeach; ?>
            				</tbody>
                		</table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('template/_footer'); ?>
<script type="text/javascript">
$(document).ready(function() {
	var lastIdx = null;
	var table = $('#data_matrix').DataTable({
		"ordering" : false,
		"bLengthChange" : false,
		"searching" : false,
		"info" : false,
		scrollY : "500px",
		"scrollX" : true,
		scrollCollapse: true,
		paging: false,
	});

	$('#data_matrix tbody')
	.on( 'mouseover', 'td', function () {
		var colIdx = table.cell(this).index().column;

		if ( colIdx !== lastIdx ) {
			$( table.cells().nodes() ).removeClass( 'highlight' );
			$( table.column( colIdx ).nodes() ).addClass( 'highlight' );
		}
	})
	.on( 'mouseleave', function () {
		$( table.cells().nodes() ).removeClass( 'highlight' );
	});

	new $.fn.dataTable.fixedColumns( table );
});
</script>
</body>
</html>
