<!DOCTYPE html>
<style type="text/css" media="print">
    @page {
        margin: 0;
    }

    body {
        margin: 1cm;
    }
</style>
<style>
    .table1 {
        font-family: sans-serif;
        color: #232323;
        border-collapse: collapse;
    }

    .table1,
    th,
    td {
        border: 2px solid #000000;
        padding: 8px 20px;
    }

    div.a {
        text-align: center;
    }
</style>

<html lang="en">

<head>
</head>

<body>
    <div class="a">
        <h1>HASIL PREDIKSI</h1>
    </div>
    <table class="table1">
        <thead>
            <th>TAHUN</th>
            <th>Index Waktu (t)</th>
            <th>Hasil Penjualan</th>
            <th>Moving Average 3</th>
            <th>Moving Average 4</th>
            <th>Moving Average 5</th>
        </thead>
        <tbody>
            <!-- <td>Tahun</td>
            <td>Index</td>
            <td>Hasil Penjualan</td>
            <td>M3</td>
            <td>M4</td>
            <td>M5</td> -->
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
    <br>
    <br>
    <h3>Hasil Peramalan :</h3>
    <table class="table1">
        <thead>
            <?php
            $jumlahPrev = $hasilPrediksiPrev['Jumlah'] * $hasilPrediksiPrev['Harga'];
            $prediksiM3 = ($hasilPrediksi['JumlahM3'] * $hasilPrediksi['Harga']) / 3;
            $prediksiM4 = ($hasilPrediksi['JumlahM4'] * $hasilPrediksi['Harga']) / 4;
            $prediksiM5 = ($hasilPrediksi['JumlahM5'] * $hasilPrediksi['Harga']) / 5;
            $diffM3 = abs($jumlahPrev - $prediksiM3);
            $diffM4 = abs($jumlahPrev - $prediksiM4);
            $diffM5 = abs($jumlahPrev - $prediksiM5);

            if ($diffM5 < $diffM4 && $diffM5 < $diffM3) {

                $result = $prediksiM5;
            } else if ($diffM4 < $diffM3 && $diffM4 < $diffM5) {
                $result = $prediksiM4;
            } else {
                $result = $prediksiM3;
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

    <script type="text/javascript">
        window.print();
    </script>

</body>

</html>