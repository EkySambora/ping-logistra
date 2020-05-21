<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-8">
            <div class="border-bottom mb-3">
                <h3 class="text-center">Tabel Departemen</h3>	
            </div>
            <button type="button" class="btn btn-outline-success mb-4 mr-3" data-toggle="modal" data-target="#exampleModal_add">Tambah Departemen</button>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Departemen <?php echo $this->uri->segment('2') ?></th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no=1;
                        foreach ($departemen as $row) :
                    ?>
                        <tr>
                            <th scope="row"><?php echo $no ?></th>
                            <td><?php echo $row->nama_departemen ?></td>

                            <td class="d-flex">
                                <button type="button" class="btn btn-warning mr-2" data-toggle="modal" data-target="#exampleModalEdit<?php echo $row->id_departemen; ?>">Edit</button>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $row->id_departemen; ?>">Delete</button>
                            </td>
                        </tr>
                    <?php $no++; endforeach; ?>
                    
                </tbody>
            </table>

        </div>
        <div class="col"></div>
    </div>
    <!-- Modal  Delete-->
    <?php
        foreach ($departemen as $row) :
    ?>
        <div class="modal fade" id="exampleModal<?php echo $row->id_departemen ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda Yakin Menghapus Data <?php echo $row->nama_departemen ?> ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="<?php echo base_url() . "departemen/delete/" . $row->id_departemen; ?>"> 
                        <button type="button" class="btn btn-danger">Delete Data</button>
                    </a>
                </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?> 
    <!-- modal tambah -->
    <div class="modal fade" id="exampleModal_add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Departemen</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- <form> -->
                <?php echo form_open('departemen/add');?>
                    <div class="modal-body">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Salary</label>
                                <input type="text" name="nama_departemen" placeholder="Isi Departemen" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <input type="hidden" name="id_gaji_karyawan" value="0">
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Tambah</button>
                    </div>
                <!-- </form> -->
                <?php echo form_close();?>
            </div>
        </div>
    </div>
    <!-- end modal tambah -->

    <!-- modal Edit -->
    <?php
        foreach ($departemen as $row) :
    ?>
    <div class="modal fade" id="exampleModalEdit<?php echo $row->id_departemen ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Gaji</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- <form> -->
                <?php echo form_open('departemen/update');?>
                    <div class="modal-body">
                        <input type="hidden" name="id" value="<?php echo $row->id_departemen?>" />
                        <div class="form-group">
                            <label for="exampleInputEmail1">Departemen</label>
                            <input type="text" name="nama_departemen" placeholder="Isi Nama Departemen" class="form-control" id="exampleInputEmail1" value="<?php echo $row->nama_departemen ?>" aria-describedby="emailHelp">
                            <input type="hidden" name="nilai" value="0">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Edit</button>
                    </div>
                <!-- </form> -->
                <?php echo form_close();?>
            </div>
        </div>
    </div>
    <? endforeach;?>
    <!-- end modal Edit -->

</div>


