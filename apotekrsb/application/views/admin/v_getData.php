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
						<h3 class="box-title">Daftar Resep Hari Ini</h3>
					</div>

					<div class="box-body">
						<br/>
						<table id="example1" class="table table-striped table-bordered" width="100%">
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
								<?php
								$no = 1;
								foreach ($resep_obat as $resep) { ?>
									<tr>
										<td><?php echo $no++ ?></td>
										<td><?php echo $resep->no_resep;?></td>
										<td><?php echo $resep->tgl_perawatan;?></td>
										<td><?php echo $resep->no_rawat;?></td>
										<td><?php echo $resep->nm_dokter;?></td>
										<td><?php echo $resep->nm_pasien;?></td>
										<td>
											<a href="<?=site_url('resep/del_data/'.$resep->no_resep)?>" 
                     						 onclick="return confirm('Yakin hapus data ?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
										</td>
									</tr>
							</tbody>
						<?php } ?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
</section>
