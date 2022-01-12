<?php 

include '../controller/Kursus.php';
$ctrl = new Kursus();
$hasil = $ctrl->index2();

?>

<!DOCTYPE html>
<html>

<head>
    <?php include '../template/head.php' ?>
    <link rel="stylesheet" href="../assets/css/paper.css">
</head>

<body class="A4">
  <div class="sheet p-5">
      <div style="width: 100%; text-align: center;">
          <h4>Laporan Data Paket</h4>
          <hr noshade size="3" width="100%" />
          <br>
      </div>
      <div style="width: 100%;">
          <table class="table table-bordered">
          <thead class="bg-light text-center">
                    <th scope="col">No</th>
                    <th scope="col">Nama Paket</th>
                    <th scope="col">Harga</th>
                  </thead>

        <?php
          $no = 1;
        foreach ($hasil as $isi) {
        ?> 
            <tr class="table-striped">
            <td class="text-center"><?= $no++ ?>.</td>
            <td><?php echo $isi['nama_paket'];?></td>
            <td><?php echo number_format($isi['harga']);?></td>
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
