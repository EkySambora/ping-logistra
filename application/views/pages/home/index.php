<div class="container">
	<div class="row">
		<div class="col">
			<div class="border-bottom mb-3">
				<h3 class="text-center">Laporan</h3>
			</div>

			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th scope="col">No</th>
						<th scope="col">NIK</th>
						<th scope="col">Departemen</th>
						<th scope="col">Nama</th>
						<th style="text-center" scope="col">JK</th>
						<th scope="col">Alamat</th>
						<th class="text-center" scope="col">Tanggal Lahir</th>
						<th scope="col">Status</th>
						<th scope="col">Pendidikan</th>
						<th scope="col">No HP</th>
						<th scope="col">Nilai</th>
						<th scope="col">Gaji</th>
						<th scope="col">Bonus</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$no=1;
                        foreach ($laporan as $row) :
                        if($row->nilai){
					?>

						<tr>
							<th scope="row"><?php echo $no ?></th>
							<td><?php echo $row->id_karyawan ?></td>
							<td><?php echo $row->nama_departemen ?></td>

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
							<td><?php echo $row->nilai ?></td>
                            <td>
                                <?php 
                                    echo rupiah(bonus($row->nilai,$row->salary));
                                ?>
                            
                            </td>
                            <td><?php echo rupiah($row->salary) ?></td>

						</tr>
                    <?php } $no++; endforeach; ?>
					
				</tbody>
			</table>


		</div>
	</div>
</div>