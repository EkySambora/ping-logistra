<div class="container">
	<div class="row">
		<div class="col">
			<div class="border-bottom mb-3">
				<h3 class="text-center">Tabel Karyawan </h3>
			</div>
			<button type="button" class="btn btn-outline-success mb-4 mr-3" data-toggle="modal" data-target="#exampleModal_add">Tambah Karyawan</button>
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
								<?php echo $row->nama_status;?>
							</td>
							<td class="text-center">
								<?php echo $row->nama_pendidikan; ?>
							</td>
							<td><?php echo $row->no_hp ?></td>

							<td class="d-flex">
								<button class="btn btn-warning mr-2" data-toggle="modal" data-target="#exampleModalEdit<?php echo $row->id_karyawan; ?>">Edit</button>
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
								Apakah Anda Yakin Menghapus Data  <?php echo $row->nama ?> ?
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

			<!-- modal add -->
			<div class="modal fade" id="exampleModal_add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Tambah Karyawan</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<?php echo form_open('karyawan/add');?>
						<div class="modal-body">
							<div class="form-group">
								<label for="exampleInputEmail1">NIK</label>
								<input type="text" name="nik" value="00001" readOnly class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Nama</label>
								<input type="text" name="nama" placeholder="Isi Nama Lengkap" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Alamat</label>
								<textarea name="alamat" class="form-control" placeholder="Isi Alamat Lengkap" id="exampleFormControlTextarea1" rows="3" required></textarea>
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Tanggal Lahir</label>
								<input type="date" name="ttl" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Jenis Kelamin</label>
								<select name="jk" class="form-control" id="exampleFormControlSelect1" required>
									<option>-- Pilih --</option>
									<?php foreach($jk as $j){ ?>
										<option value="<?= $j->id_jk ?>"><?= $j->jk ?></option>
									<?php } ?>
								</select>
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Status</label>
								<select name="status" class="form-control" id="exampleFormControlSelect1" required>
									<option>-- Pilih --</option>
									<?php foreach($status_cat as $s){ ?>
										<option value="<?= $s->id_status ?>"><?= $s->nama_status ?></option>
									<?php } ?>
								</select>
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Pendidikan</label>
								<select name="pendidikan" class="form-control" id="exampleFormControlSelect1" required>
									<option>-- Pilih --</option>
									<?php foreach($pendidikan as $p){ ?>
										<option value="<?= $p->id_pendidikan_cat ?>"><?= $p->nama_pendidikan ?></option>
									<?php } ?>
								</select>
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Telepon</label>
								<input name="no_hp" type="number" placeholder="Isi Nomor Hp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Departemen</label>
								<select name="departemen_id" class="form-control" id="exampleFormControlSelect1" required>
									<option>-- Pilih --</option>
									<?php foreach( $departemen as $row ):?>
										<option value="<?php echo $row->id_departemen; ?>"><?php echo $row->nama_departemen ?></option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
					<?php echo form_close();?>
					</div>
				</div>
			</div>

			<?php
				foreach ($karyawan as $rowK) :
			?>
			<!-- modal edit -->
			<div class="modal fade" id="exampleModalEdit<?php echo $rowK->id_karyawan?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Edit Karyawan</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<?php echo form_open('karyawan/update');?>
						<div class="modal-body">
							<div class="form-group">
								<label for="exampleInputEmail1">NIK</label>
								<input type="text" name="nik" value="00011" readOnly class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Nama</label>
								<input type="text" value="<?= $rowK->nama ?>" name="nama" placeholder="Isi Nama Lengkap" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Alamat</label>
								<textarea name="alamat" class="form-control" placeholder="Isi Alamat Lengkap" id="exampleFormControlTextarea1" rows="3"><?= $rowK->alamat ?></textarea>
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Tanggal Lahir</label>
								<input type="date" value="<?= $rowK->ttl ?>" name="ttl" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Jenis Kelamin</label>
								<select name="jk" class="form-control" id="exampleFormControlSelect1">

									<option>-- Pilih --</option>
									<?php foreach($jk as $j){ ?>
										<option <?php echo $rowK->jk == $j->id_jk ? "selected" : ""; ?> value="<?= $j->id_jk ?>"><?= $j->jk ?></option>
									<?php } ?>
								</select>
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Status</label>
								<select name="status" class="form-control" id="exampleFormControlSelect1">
									<option>-- Pilih --</option>
									<?php foreach($status_cat as $s){ ?>
										<option <?php echo $rowK->status == $s->id_status ? "selected" : ""; ?> value="<?= $s->id_status ?>"><?= $s->nama_status ?></option>
									<?php } ?>
								</select>
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Pendidikan</label>
								<select name="pendidikan" class="form-control" id="exampleFormControlSelect1">
									<option>-- Pilih --</option>
									<?php foreach($pendidikan as $p){ ?>
										<option <?php echo $rowK->pendidikan == $p->id_pendidikan_cat ? "selected" : ""; ?> value="<?= $p->id_pendidikan_cat ?>"><?= $p->nama_pendidikan ?></option>
									<?php } ?>
								</select>
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Telepon</label>
								<input value="<?= $rowK->no_hp ?>" name="no_hp" type="number" placeholder="Isi Nomor Hp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Departemen</label>
								<select name="departemen_id" class="form-control" id="exampleFormControlSelect1">
									<option>-- Pilih --</option>
									<?php foreach( $departemen as $row ):?>
										<option <?php echo $rowK->departemen_id == $row->id_departemen ? "selected" : ""; ?> value="<?php echo $row->id_departemen; ?>"><?php echo $row->nama_departemen ?></option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>
					<div class="modal-footer">
						<input type="hidden" name="id" value="<?php echo $rowK->id_karyawan?>" />
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
					<?php echo form_close();?>
					</div>
				</div>
			</div>
			
			<?php endforeach; ?>

		</div>
	</div>
</div>


