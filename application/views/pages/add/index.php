<div class="container">
    <div class="row">
        <div class="col"></div>
        
        <div class="col-7">
            <div class="border-bottom mb-3">
				<h3 class="text-center">Tambah Karyawan</h3>	
			</div>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">NIK</label>
                    <input type="text" placeholder="89897" disabled class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" placeholder="Isi Nama Lengkap" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <textarea class="form-control" placeholder="Isi Alamat Lengkap" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Lahir</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>-- Pilih --</option>
                        <option>Kawin</option>
                        <option>Belum Kawin</option>
                        <option>Duda / Janda</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Pendidikan</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>-- Pilih --</option>
                        <option>SMA</option>
                        <option>Stara Satu</option>
                        <option>Stara Dua</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Telepon</label>
                    <input type="number" placeholder="Isi Nomor Hp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Departemen</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>-- Pilih --</option>
                        <?php foreach( $departemen as $row ):?>
                            <option value="<?php echo $row->id; ?>"><?php echo $row->nama_departemen ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col"></div>
    </div>
</div>