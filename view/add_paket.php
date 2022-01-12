<?php

include '../controller/Kursus.php';
$ctrl = new Kursus();
$hasil = $ctrl->index2();
$ctrl->hapusPaket();
$ctrl->updatePaket();

?>

<!DOCTYPE html>
    <html>
        <?php include "../template/head.php"?>
    <body class="g-sidenav-show  bg-gray-200">

    <div class="example-modal">
            <div id="logout" class="modal fade" role="dialog" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
						<form class="row g-3" method="post" action="<?php $ctrl->logout()?>" name="form1">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Log Out</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">


								<h5 align="center">Apakah Anda yakin ingin keluar?<strong><span class="grt"></span></strong></h5>

							</div>
							<div class="modal-footer">
								<button type="submit" class="btn btn-danger" name="logout">Log Out</button>
								<button id="nodelete" type="button" class="btn btn-secondary pull-left" data-bs-dismiss="modal">Cancel</button>
							</div>
						</form>
						</div>
					</div>
				</div>
		</div>

        <div class="example-modal">
            <div id="tambah" class="modal fade" role="dialog" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
						<form class="row g-3" id="formJenisPaket">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Tambah Jenis Paket</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
                                <!-- <span class="input-group input-group-outline my-3">
                                    <label class="form-label">ID Paket</label>
                                    <input type="text" class="form-control" name="id_paket" onfocus="focused(this)" onfocusout="defocused(this)" required>
                                </span> -->
                                <span class="input-group input-group-outline my-3">
                                    <label class="form-label">Nama Paket</label>
                                    <input type="text" class="form-control" name="nama_paket" onfocus="focused(this)" onfocusout="defocused(this)" required>
                                </span>
								<span class="input-group input-group-outline my-3">
                                    <label class="form-label">Harga</label>
                                    <input type="text" class="form-control" name="harga" onfocus="focused(this)" onfocusout="defocused(this)" required>
                                </span>
                           </div>
							<div class="modal-footer">
								<button type="submit" class="btn btn-primary" id="btnSimpan">Simpan</button>
								<button id="nodelete" type="button" class="btn btn-secondary pull-left" data-bs-dismiss="modal">Cancel</button>
							</div>
						</form>
						</div>
					</div>
			</div>
		</div>

    <div class="example-modal">
            <div id="ubah" class="modal fade" role="dialog" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
						<form class="row g-3" id="formJenisPaket" method="POST">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Ubah Jenis Paket</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<input type="hidden" name="id_paket_ubah" value="">
                                <span class="input-group input-group-outline my-3 is-filled">
                                    <label class="form-label">Nama Paket</label>
                                    <input type="text" class="form-control" name="nama_paket_ubah" value="" onfocus="focused(this)" onfocusout="defocused(this)" required>
                                </span>
								<span class="input-group input-group-outline my-3 is-filled">
                                    <label class="form-label">Harga</label>
                                    <input type="text" class="form-control" name="harga_paket_ubah" value="" onfocus="focused(this)" onfocusout="defocused(this)" required>
                                </span>
                           </div>
							<div class="modal-footer">
								<button type="submit" class="btn btn-primary" name="btnUbah">Simpan</button>
								<button id="nodelete" type="button" class="btn btn-secondary pull-left" data-bs-dismiss="modal">Cancel</button>
							</div>
						</form>
						</div>
					</div>
			</div>
		</div>

        <?php include "../template/sidebar4.php" ?>
            <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <?php include "../template/navbar3.php" ?>

 <?php
		$pesan="";
		$frm="";
		if(isset($_GET['pesan'])){
			$pesan = $_GET['pesan'];
		}
          if(isset($_GET['frm'])){
          $frm = $_GET['frm'];
		  }
          //echo $pesan;

          if ($pesan=='success' && $frm =='del') {
        ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Berhasil!</strong> Anda berhasil menghapus.
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php
       }else if ($pesan=='success' && $frm =='add') {
     ?>
      <div class="alert alert-info alert-dismissible fade show" role="alert">
        <strong>Berhasil!</strong> Anda berhasil menambahkan.
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        <?php
       }else if ($pesan=='success' && $frm =='edit') {
     ?>

     <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Berhasil!</strong> Anda berhasil mengubah.
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <?php
       }else if ($pesan=='success' && $frm =='login') {
     ?>

     <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Berhasil!</strong> Anda berhasil Login
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <?php
       }else if ($pesan=='success' && $frm =='logout') {
     ?>

     <div class="alert alert-info alert-dismissible fade show" role="alert">
        <strong>Berhasil!</strong> Anda berhasil Logout
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

      <?php
    }
      ?>

    <div class="container-fluid py-1">
    <a href="#" role="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#logout">Logout</a>


            <div class="section-title text-center">
                <h3>Data Jenis Paket</h3>
                <p></p>
                </div>
            <div class="container text-center">

        <div class="container-fluid">

          <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#tambah">Tambah</a>
           <div class="table-responsive p-0">
            <table class="table table-striped table-bordered table-hover small text-center">
                 <thead class="thead-dark">
                    <!-- <th scope="col">ID</th> -->
                    <th scope="col">Nama Paket</th>
                    <th scope="col">Harga</th>
                    <th colspan="2">ACTION</th>
                  </thead>

        <?php
        foreach ($hasil as $isi) {
        ?>
            <tr class="table-striped">
            <!-- <td><?php echo $isi['id_paket'];?></td> -->
            <td><?php echo $isi['nama_paket'];?></td>
            <td><?php echo number_format($isi['harga']);?></td>
            <td><a href="#" onclick="return ubah_paket(`<?= $isi['id_paket'];?>`,`<?= $isi['nama_paket'];?>`,`<?= $isi['harga'];?>`)"><i class="fas fa-edit"></i></a></td>
            <td><a href="#" onclick="return hapus(`<?= $isi['id_paket'];?>`,`<?= $isi['nama_paket'];?>`)"><i class="fas fa-trash-alt"></i></a></td>
            </tr>
            <?php
            }
?>
</tbody>

</table>
</div>
</div>
<div class="text-center">



</div>
<?php include "../template/footer.php" ?>
	</div>
  </main>

<?php include "../template/script.php" ?>
</body>
<script>
	function hapus(id_paket,nama_paket){
		$('[name="id_paket"]').val(id_paket);
		$("#nama_paket").html(nama_paket);
		$("#deletesurat").modal('show');
	}
  function ubah_paket(id_paket,nama_paket,harga){
    $('[name="id_paket_ubah"]').val(id_paket);
    $('[name="nama_paket_ubah"]').val(nama_paket);
  	$('[name="harga_paket_ubah"]').val(harga);
  	$("#ubah").modal('show');
  }
</script>
			<div class="example-modal">
                <div id="deletesurat" class="modal fade" role="dialog" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
						<form class="row g-3" method="post" action="" name="form1">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus Data</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">

								<input type="hidden" name="id_paket" value="">
								<h5 align="center">Apakah anda yakin ingin menghapus Nama Paket <span id="nama_paket"></span>?<strong><span class="grt"></span></strong></h5>

							</div>
							<div class="modal-footer">
								<button type="submit" class="btn btn-danger" name="delete" value="hapus">Delete</button>
								<button id="nodelete" type="button" class="btn btn-secondary pull-left" data-bs-dismiss="modal">Cancel</button>
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>




  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>


<script type="text/javascript">
      $('#btnSimpan').click(function(){
    // alert('button');
    	$('#ModalJenis').modal('hide');
		var dataForm = $('#formJenisPaket').serialize();
		$.ajax({
		type  : 'POST',
		url   : 'api.php',//Memanggil Controller/Function
		async : false,
		dataType : 'json',
		data : dataForm,
		success:function(response){
		        if (response == 200) {
					Swal.fire({
					type: 'success',
					title: 'Berhasil di simpan!',
					text: 'Tunggu sejenak',
					timer: 20000,
					showCancelButton: false,
					showConfirmButton: false
					})
					.then (function() {
						show_jenis();
					});

		        } else {

		          	Swal.fire({
		            type: 'error',
		            title: 'Gagal menyimpan',
		            text: 'silahkan coba lagi!'
		          });

		        }

		        console.log(response);

		      },

		      error:function(response){

		          Swal.fire({
		            type: 'error',
		            title: 'Opps!',
		            text: 'server error!'
		          });

		          console.log(response);

		      }
		});

	});

  </script>

</html>
