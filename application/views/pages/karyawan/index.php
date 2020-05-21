<div class="container">
	<div class="row">
		<div class="col">
			<div class="border-bottom mb-3">
				<h3 class="text-center">Tabel Karyawan</h3>	
			</div>
			<a href="<?php echo site_url('home/add'); ?>" class="btn btn-outline-success mb-4 mr-3">Tambah Karyawan</a>
			<a href="#" class="btn btn-outline-secondary mb-4">Beri nilai Karyawan</a>

			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th scope="col">No</th>
						<th scope="col">NIK</th>
						<!-- <th scope="col">Departemen</th> -->
						<th scope="col">Nama</th>
						<th style="text-center" scope="col">JK</th>
						<th scope="col">Alamat</th>
						<th class="text-center" scope="col">Tanggal Lahir</th>
						<th scope="col">Status</th>
						<th scope="col">Pendidikan</th>
						<th scope="col">No HP</th>
						<th class="text-center" scope="col">Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$no=1;
						foreach ($karyawan as $row) :
					?>
						<tr>
							<th scope="row"><?php echo $no ?></th>
							<td><?php echo $row->nik ?></td>
							<!-- <td><?php //echo $row->nama_departemen ?></td> -->
							<td><?php echo $row->nama ?></td>
							<td><?php echo $row->jk == 0 ? 'Laki-laki' : 'Perempuan'  ?></td>
							<td><?php echo $row->alamat ?></td>
							<td><?php echo $row->ttl ?></td>
							<td>
								<?php 
									$status = $row->status;
									if($status == 0){
										echo "Belum Menikah";
									} else if($status == 1){
										echo "Sudah Menikah";
									} else {
										echo $row->jk == 0 ? "Duda" : "Janda";
									}
								?>
							</td>
							<td class="text-center"><?php echo $row->pendidikan ?></td>
							<td><?php echo $row->no_hp ?></td>

							<td class="d-flex">
								<a href="#" class="btn btn-warning mr-2">Edit</a>
								<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $row->id_karyawan; ?>">Delete</button>
							</td>
						</tr>
					<?php $no++; endforeach; ?>
					
				</tbody>
			</table>
			<!-- Modal  Delete-->
			<?php
				foreach ($karyawan as $row) :
			?>
				<div class="modal fade" id="exampleModal<?php echo $row->id_karyawan ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								Apakah Anda Yakin Menghapus Data  <?php echo $row->nama ?> - <?php echo $row->id_karyawan ?>?
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<a href="<?php echo base_url() . "karyawan/delete_data/" . $row->id_karyawan; ?>"> 
									<button type="button" class="btn btn-danger">Delete</button>
								</a>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?> 

			<!-- modal Delete -->
			<?php
				foreach ($karyawan as $row) :
			?>
				<div class="modal fade" id="exampleModal<?php echo $row->id_karyawan ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							Apakah Anda Yakin Menghapus Data <?php echo $row->nama_karyawan ?> ?
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<a href="<?php echo base_url() . "karyawan/deleteData/" . $row->id_karyawan; ?>"> 
								<button type="button" class="btn btn-danger">Delete Data</button>
							</a>
						</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?> 

			<!-- //end of modal delete -->
		</div>
	</div>
</div>


