<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2><?= strtoupper($judul) ?> </h2>
            </div>

            <div class="header">

                <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#defaultModal">
                    <i class="material-icons">add</i><span>Tambah</span>
                </button>

            </div>

            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NAMA</th>
                                <th>USERNAME</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($user_view as $row) { ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $row->Nama ?></td>
                                    <td><?= $row->Username ?></td>


                                    <td>
                                        <a href="<?= site_url('users/user_edit/' . $row->Id); ?>" class="btn btn-warning waves-effect btn-xs">
                                            <i class="material-icons">edit</i></a>
                                        <a href="<?php echo base_url() . 'users/user_delete/' . $row->Id; ?>" class="btn btn-danger waves-effect btn-xs" onclick="return confirm('Apakah Anda Yakin Menghapus user <?= $row->Nama ?> ?')">
                                            <i class="material-icons">close</i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">TAMBAH <?= strtoupper($judul) ?> BARU</h4>
            </div>
            <div class="modal-body">

                <?php echo form_open_multipart('users/user_add'); ?>



                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" name="Nama" id="Nama" required="required" class="form-control">
                        <label class="form-label">NAMA</label>
                    </div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" name="Username" id="Username" required="required" class="form-control">
                        <label class="form-label">USERNAME</label>
                    </div>
                </div>

                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" name="Password" id="Password" required="required" class="form-control">
                        <label class="form-label">PASSWORD</label>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary waves-effect">Simpan</button>
                <button type="reset" class="btn btn-danger waves-effect">Reset</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Batal</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>