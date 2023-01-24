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




            <div class="body table-responsive">
                <table class="table table-bordered">
                    <thead align="center">
                        <tr>
                            <th>TAHUN</th>
                            <th>Index Waktu (t)</th>
                            <th>Hasil Penjualan</th>
                            <th>Moving Average 3</th>
                            <th>Moving Average 4</th>
                            <th>Moving Average 5</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php
                        $tahunAwal = $tahun['Tahun'];
                        $lastYear = $tahunAkhir['Tahun'];
                        ?>
                        <?php foreach ($prediksi_view as $row) {

                            $selisih = ($row->Tahun) - $tahunAwal;
                            $penjualan = number_format($row->Jumlah * $row->Harga);
                            if ($selisih < 2) {
                                $prediksi3 = 0;
                            } else {
                                $prediksi3 = number_format(($row->JumlahM3 * $row->Harga) / 3);
                            }

                            if ($selisih < 3) {
                                $prediksi4 = 0;
                            } else {
                                $prediksi4 = number_format(($row->JumlahM4 * $row->Harga) / 4);
                            }

                            if ($selisih < 4) {
                                $prediksi5 = 0;
                            } else {
                                $prediksi5 = number_format(($row->JumlahM5 * $row->Harga) / 5);
                            }

                            if ($row->Tahun == $lastYear) {
                                $penjualan = "?";
                            } else {
                                $penjualan = $penjualan;
                            }

                            // $jumlah = $row->Jumlah * $row->Harga;



                        ?>
                            <tr>
                                <td><?= $row->Tahun ?></td>
                                <td><?= $no++; ?></td>
                                <td><?= $penjualan ?></td>
                                <td><?= $prediksi3 ?></td>
                                <td><?= $prediksi4; ?></td>
                                <td><?= $prediksi5; ?></td>


                            </tr>

                        <?php } ?>
                    </tbody>
                </table>

                <table class="table table-bordered">
                    <thead>
                        <?php
                        $jumlahPrev = $hasilPrediksiPrev['Jumlah'] * $hasilPrediksiPrev['Harga'];
                        $prediksiM3 = ($hasilPrediksi['JumlahM3'] * $hasilPrediksi['Harga']) / 3;
                        $prediksiM4 = ($hasilPrediksi['JumlahM4'] * $hasilPrediksi['Harga']) / 4;
                        $prediksiM5 = ($hasilPrediksi['JumlahM5'] * $hasilPrediksi['Harga']) / 5;
                        if ($selisih < 2) {
                            $diffM3 = 0;
                        } else {
                            $diffM3 = abs($jumlahPrev - $prediksiM3);
                        }
                        if ($selisih < 3) {
                            $diffM4 = 0;
                        } else {
                            $diffM4 = abs($jumlahPrev - $prediksiM4);
                        }

                        if ($selisih < 4) {
                            $diffM5 = 0;
                        } else {
                            $diffM5 = abs($jumlahPrev - $prediksiM5);
                        }

                        if ($selisih < 4) {

                            $result  = 0;
                        } else {
                            if ($diffM5 < $diffM4 && $diffM5 < $diffM3) {

                                $result = $prediksiM5;
                            } else if ($diffM4 < $diffM3 && $diffM4 < $diffM5) {
                                $result = $prediksiM4;
                            } else {
                                $result = $prediksiM3;
                            }
                        }


                        ?>
                        <tr>
                            <th>Selisih Moving Average 3 Dengan Tahun Sebelumnya</th>
                            <th><?= number_format($diffM3) ?></th>
                        </tr>
                        <tr>
                            <th>Selisih Moving Average 4 Dengan Tahun Sebelumnya</th>
                            <th><?= number_format($diffM4) ?></th>
                        </tr>
                        <tr>
                            <th>Selisih Moving Average 5 Dengan Tahun Sebelumnya</th>
                            <th><?= number_format($diffM5) ?></th>
                        </tr>
                        <tr>

                            <th>Hasil Peramalan Untuk <?= $hasilPrediksi['Tahun'] ?></th>
                            <th><?= number_format($result) ?></th>
                        </tr>
                    </thead>
                </table>


                <a href="<?php echo base_url() . 'prediksi/print/' . $BarangId; ?>" target="_blank" class="btn btn-danger waves-effect btn-xs">
                    <i class="material-icons">print</i> CETAK</a>

            </div>
        </div>
    </div>
</div>