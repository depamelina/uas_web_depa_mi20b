<?php

include '../controller/Kursus.php';
$ctrl = new Kursus();
$hasil = $ctrl->laporan_anggota();
$ctrl->hapusData();
//$query = $ctrl->getQty();

?>

<!DOCTYPE html>
<html>

<head>
    <?php include '../template/head.php' ?>
    <link rel="stylesheet" href="../assets/css/paper.css">
    <style>
      table tr td, table tr th{
        font-size:12px!important;
        padding: 5px!important;
      }
    </style>
</head>

<body class="A4">
  <div class="sheet p-5">
      <div style="width: 100%; text-align: center;">
          <h4>Laporan Data Anggota</h4>
          <hr noshade size="3" width="100%" />
          <br>
      </div>
      <div style="width: 100%;" class="text-center">
          <table class="table table-bordered">
                      <thead class="bg-light">
                            <th scope="col">No</th>
                            <th scope="col">ID Anggota</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Paket</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Jml Mapel</th>
                            <th scope="col">Total Bayar</th>
                            <!-- <th scope="col">Admin</th>  -->

                        </thead>

                        <?php
                        $no = 1;
                        foreach ($hasil as $isi) {

                        $gn= "Perempuan";
                        if($isi['jenis_kelamin']=="1"){
                        $gn = "Laki-Laki";
                        }


                        ?>
                            <tr class="table-striped">
                            <td class="text-center"><?= $no++ ?>.</td>
                            <td><?= $isi['id_anggota'];?></td>
                            <td><?php echo $isi['nama'];?></td>
                            <td><?php echo $gn;?></td>
                            <td><?php echo $isi['nama_paket'];?></td>
                            <td><?php echo number_format($isi['harga']);?></td>
                            <td><?php echo $isi['jumlah_mapel'];?></td>
                            <td><?php echo number_format($isi['harga']*$isi['jumlah_mapel']);?></td>
                            <!-- <td><?php echo $isi['nama_admin'];?></td> -->
                            </tr>
                            <?php
                }
                ?>
                </tbody>
 </table>

        </div>
    </div>
</body>

</html>
