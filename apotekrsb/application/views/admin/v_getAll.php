<section class="content-wrapper">
	<section class="content-header">
		<h3>Daftar Resep Obat</h3>
		<small>Seluruh Daftar Resep</small>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-primary">
					<div class="box-header">
						<h3 class="box-title">Daftar</h3>
					</div>

					<div class="box-body">
						<br/>
						<table id="table1" class="table table-striped table-bordered" width="100%">
							<thead>
								<tr>
									<th width="1px">No</th>
									<th>No Resep</th>
									<th>Tanggal</th>
									<th>No Rawat</th>
									<th>Dokter</th>
									<th>Pasien</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
</section>


<script type="text/javascript">
	$(document).ready(function() {
    $('#table1').DataTable({
    		"processing" : true,
            "serverSide": true,
            "ordering" : true,
            "orderable" : true,
            "ajax": {
                "url": "<?=base_url('resep/get_ajax')?>",
                "type": "POST"
            }
    });
} );
</script>