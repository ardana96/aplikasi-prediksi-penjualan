<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">

            <div class="header">
                <h2>
                    <?= $judul ?>
                </h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="body">
                <form action="<?php echo base_url(); ?>prediksi/cari/" class="signin-form" method="post">
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

                    <button class="btn btn-primary waves-effect" type="submit">Hitung</button>


                </form>
            </div>
        </div>
    </div>
</div>