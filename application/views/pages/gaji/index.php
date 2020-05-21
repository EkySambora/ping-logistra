<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-8">
            <div class="border-bottom mb-3">
                <h3 class="text-center">Tabel Gaji</h3>	
            </div>
            <button type="button" class="btn btn-outline-success mb-4 mr-3" data-toggle="modal" data-target="#exampleModal_add">Tambah Gaji</button>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Salary</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no=1;
                        foreach ($gaji as $row) :
                    ?>
                        <tr>
                            <th scope="row"><?php echo $no ?></th>
                            <td><?php echo rupiah($row->salary) ?></td>

                            <td class="d-flex">
                                <button type="button" class="btn btn-warning mr-2" data-toggle="modal" data-target="#exampleModalEdit<?php echo $row->id_gaji; ?>">Edit</button>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $row->id_gaji; ?>">Delete</button>
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
        foreach ($gaji as $row) :
    ?>
        <div class="modal fade" id="exampleModal<?php echo $row->id_gaji ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda Yakin Menghapus Data ini ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="<?php echo base_url() . "gaji/deleteData/" . $row->id_gaji; ?>"> 
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
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Gaji</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- <form> -->
                <?php echo form_open('gaji/add');?>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Salary</label>
                            <input type="number" name="salary" placeholder="Isi Gaji" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
        foreach ($gaji as $row) :
    ?>
    <div class="modal fade" id="exampleModalEdit<?php echo $row->id_gaji ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Gaji</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- <form> -->
                <?php echo form_open('gaji/update');?>
                    <div class="modal-body">
                        <input type="hidden" name="id" value="<?php echo $row->id_gaji?>" />
                        <div class="form-group">
                            <label for="exampleInputEmail1">Salary</label>
                            <input type="number" name="salary" placeholder="Isi Gaji" class="form-control" id="exampleInputEmail1" value="<?php echo $row->salary ?>" aria-describedby="emailHelp">
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


