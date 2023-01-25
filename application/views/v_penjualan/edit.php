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
                <?php echo form_open('penjualan/penjualan_update/' . $penjualan['Id']); ?>
                <label class="form-label">Bulan</label>
                <div class="form-group form-float">
                    <div class="form-line">
                        <select name="Bulan" id="Bulan" required="required" class="form-control show-tick">
                            <option value="">-- PILIH Bulan --</option>
                            <?php
                            foreach ($bulan_view as $row) {
                                $selected = "";
                                if ($row->NamaBulan == $penjualan['Bulan'])
                                    $selected = 'selected="selected"';

                                echo "<option value='" . $row->NamaBulan . "' $selected>" . $row->NamaBulan . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="body">
                    <?php echo form_open('penjualan/penjualan_update/' . $penjualan['Id']); ?>
                    <label class="form-label">Nama Barang</label>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <select name="BarangId" id="BarangId" required="required" class="form-control show-tick">
                                <option value="">-- PILIH Barang --</option>
                                <?php
                                foreach ($barang_view as $row) {
                                    $selected = "";
                                    if ($row->Id == $penjualan['BarangId'])
                                        $selected = 'selected="selected"';

                                    echo "<option value='" . $row->Id . "' $selected>" . $row->NamaBarang . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="Jumlah" required="required" value="<?php echo $penjualan['Jumlah'];  ?>">

                            <label class="form-label">Jumlah</label>
                        </div>
                    </div>

                    <label>Tahun</label>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <select name="Tahun" id="Tahun" class="form-control show-tick" required="required">
                                <option value="" selected="selected"><?php echo $penjualan['Tahun'];  ?></option>
                                <?php
                                for ($i = date('Y'); $i >= date('Y') - 12; $i -= 1) {
                                    echo "<option value='$i'> $i </option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <button class="btn btn-primary waves-effect" type="submit">Update</button>
                    <a href="<?= site_url('penjualan'); ?>" class="btn btn-danger waves-effect btn-xs">
                        <i class="material-icons">close</i></a>

                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>