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
                                <th>NAMA BARANG</th>
                                <th>JUMLAH</th>
                                <th>BULAN</th>
                                <td>TAHUN</td>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($penjualan_view as $row) { ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= strtoupper($row->NamaBarang) ?></td>
                                    <td><?= strtoupper($row->Jumlah) ?></td>
                                    <td><?= strtoupper($row->Bulan) ?></td>
                                    <td><?= strtoupper($row->Tahun) ?></td>


                                    <td>
                                        <a href="<?= site_url('penjualan/penjualan_edit/' . $row->PenjualanId); ?>" class="btn btn-warning waves-effect btn-xs">
                                            <i class="material-icons">edit</i></a>
                                        <a href="<?php echo base_url() . 'penjualan/penjualan_delete/' . $row->PenjualanId; ?>" class="btn btn-danger waves-effect btn-xs" onclick="return confirm('Apakah Anda Yakin Menghapus barang <?= $row->NamaBarang ?> ?')">
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

                <?php echo form_open_multipart('penjualan/penjualan_add'); ?>






                <label>Barang</label>
                <div class="form-group form-float">
                    <div class="form-line">
                        <select name="BarangId" id="BarangId" class="form-control show-tick" required oninvalid="this.setCustomValidity('Mohon Diisi Terlebih Dahulu')">
                            <option value="">-- Barang --</option>
                            <?php foreach ($barang_view as $row) {  ?>
                                <option value="<?= $row->Id ?>"><?= strtoupper($row->NamaBarang) ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" name="Jumlah" id="Jumlah" required="required" class="form-control">
                        <label class="form-label">Jumlah</label>
                    </div>
                </div>



                <label>Bulan</label>
                <div class="form-group form-float">
                    <div class="form-line">
                        <select name="Bulan" id="Bulan" class="form-control show-tick" required oninvalid="this.setCustomValidity('Mohon Diisi Terlebih Dahulu')">
                            <option value="">-- Bulan --</option>

                            <?php foreach ($bulan_view as $row) {  ?>
                                <option value="<?= $row->NamaBulan ?>"><?= strtoupper($row->NamaBulan) ?></option>
                            <?php } ?>

                        </select>
                    </div>
                </div>

                <label>Tahun</label>
                <div class="form-group form-float">
                    <div class="form-line">
                        <select name="Tahun" id="Tahun" class="form-control show-tick" required oninvalid="this.setCustomValidity('Mohon Diisi Terlebih Dahulu')">
                            <option value="">-- Tahun --</option>
                            <?php
                            for ($i = date('Y'); $i >= date('Y') - 10; $i -= 1) {
                                echo "<option value='$i'> $i </option>";
                            }
                            ?>
                        </select>
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