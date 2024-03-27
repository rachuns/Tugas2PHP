<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 PHP Rachmat Ashari</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>



    <?php
$nama = $_POST["nama"] ?? '';
$produk = $_POST["produk"] ?? '';
$jml_brg = $_POST["jml_brg"] ?? '';

if($produk == "Tv" && $jml_brg >0){
    $jml_brg;
    $hargaSatuan = 1500000;
    $totalBelanja = $hargaSatuan;
    $diskon = 0 * $totalBelanja;
    $ppn = 0.1* ($totalBelanja - $diskon);
    $hargaBersih = ($totalBelanja - $diskon) + $ppn;
    
    if($jml_brg >1){
        $totalBelanja = $jml_brg * $hargaSatuan;
        $diskon = 0.2 * $totalBelanja;
        $ppn = 0.1* ($totalBelanja - $diskon);
            $hargaBersih = ($totalBelanja - $diskon) + $ppn;
        }
    }else if($produk == "Kulkas" && $jml_brg >0){
        $jml_brg;
        $hargaSatuan = 2000000;
        $totalBelanja = $hargaSatuan;
        $diskon = 0 * $totalBelanja;
        $ppn = 0.1* ($totalBelanja - $diskon);
        $hargaBersih = ($totalBelanja - $diskon) + $ppn;
        
        if($jml_brg >1){
            $totalBelanja = $jml_brg * $hargaSatuan;
            $diskon = 0.2 * $totalBelanja;
            $ppn = 0.1* ($totalBelanja - $diskon);
            $hargaBersih = ($totalBelanja - $diskon) + $ppn;
        }
    }else if($produk == "Mesin Cuci" && $jml_brg >0){
        $jml_brg;
        $hargaSatuan = 3250000;
        $totalBelanja = $hargaSatuan;
        $diskon = 0 * $totalBelanja;
        $ppn = 0.1* ($totalBelanja - $diskon);
        $hargaBersih = ($totalBelanja - $diskon) + $ppn;
        
        if($jml_brg >1){
            $totalBelanja = $jml_brg * $hargaSatuan;
            $diskon = 0.2 * $totalBelanja;
            $ppn = 0.1* ($totalBelanja - $diskon);
            $hargaBersih = ($totalBelanja - $diskon) + $ppn;
        }
    }else if($produk == "Ac" && $jml_brg >0 ){
        $jml_brg;
        $hargaSatuan = 3500000;
        $totalBelanja = $hargaSatuan;
        $diskon = 0 * $totalBelanja;
        $ppn = 0.1* ($totalBelanja - $diskon);
    $hargaBersih = ($totalBelanja - $diskon) + $ppn;
    
        if($jml_brg >1){
            $totalBelanja = $jml_brg * $hargaSatuan;
            $diskon = 0.2 * $totalBelanja;
            $ppn = 0.1* ($totalBelanja - $diskon);
            $hargaBersih = ($totalBelanja - $diskon) + $ppn;
        }
}else{
    if($produk == ""){
        $jml_brg = 0;
        $hargaSatuan = 0;
        $totalBelanja = $hargaSatuan;
        $diskon = 0 * $totalBelanja;
        $ppn = 0.1* ($totalBelanja - $diskon);
        $hargaBersih = ($totalBelanja - $diskon) + $ppn;
    }
}

    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="margin-top:30px">
                    <div class="card-body">
                        <form action="" method="post" class="form-floating">
                            <div class="form-floating mb-3">
                                <input type="text" name="nama" class="form-control" id="floatingInput"
                                    placeholder="Nama Lengkap">
                                <label for="floatingInput">Nama Lengkap</label>
                            </div>
                            <select class="form-select" name="produk" aria-label="Disabled select example">
                                <option selected>Pilih Produk</option>
                                <option value="Tv">TV</option>
                                <option value="Kulkas">Kulkas</option>
                                <option value="Mesin Cuci">Mesin Cuci</option>
                                <option value="Ac">AC</option>
                            </select>
                            <br>
                            <div class="form-floating mb-3">
                                <input type="number" name="jml_brg" class="form-control" id="floatingInput"
                                    placeholder="Jumlah Barang">
                                <label for="floatingInput">Jumlah Barang</label>
                            </div>
                            <button type="submit" name="proses" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php if(isset($_POST["proses"])){ ?>
            <div class="col-md-4">
                <div class="card" style="margin-top:30px">
                    <div class="card-body">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <td>Nama</td>
                                    <td><?= $nama ?> </td>
                                </tr>
                                <tr>
                                    <td>Produk</td>
                                    <td><?= $produk ?> </td>
                                </tr>
                                <tr>
                                    <td>Jumlah Barang</td>
                                    <td><?= $jml_brg ?> </td>
                                </tr>
                                <tr>
                                    <td>harga satuan</td>
                                    <td>Rp <?= number_format($hargaSatuan, 0,',', '.') ?> </td>
                                </tr>
                                <tr>
                                    <td>total belanja</td>
                                    <td>Rp <?= number_format($totalBelanja, 0,',', '.') ?></td>
                                </tr>
                                <tr>
                                    <td>diskon</td>
                                    <td>Rp <?= number_format($diskon, 0,',', '.') ?></td>
                                </tr>
                                <tr>
                                    <td>ppn</td>
                                    <td>Rp <?= number_format($ppn, 0,',', '.') ?></td>
                                </tr>
                                <tr>
                                    <td>harga bersih</td>
                                    <td>Rp <?=  number_format($hargaBersih, 0,',', '.') ?></td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="col-md-4">
                <div class="card" style="margin-top:30px">
                    <div class="card-body">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><Label>Tv</Label></td>
                                    <td><Label>Rp.1.500.000</Label></td>
                                </tr>
                                <tr>
                                    <td><Label>Kulkas</Label></td>
                                    <td><Label>Rp.2.000.000</Label></td>
                                </tr>
                                <tr>
                                    <td><Label>Mesin Cuci</Label></td>
                                    <td><Label>Rp.3.250.000</Label></td>
                                </tr>
                                <tr>
                                    <td><Label>Tv</Label></td>
                                    <td><Label>Rp.3.500.000</Label></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>