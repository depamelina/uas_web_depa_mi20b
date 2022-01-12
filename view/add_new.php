<?php 

include '../controller/Kursus.php';
//$id = $_GET['id'];
$ctrl = new Kursus();
//$isi = $ctrl->getData($id);
$mapel = $ctrl->getMapel();
// $nmadmin = $ctrl->getAdmin();
// $jpaket = $ctrl->getJenisPaket();
$ctrl->simpanKursus();
//$tkontrak = $ctrl->getKontrak();

?>

<!DOCTYPE html>
    <html>
        <?php include "../template/head.php"?>
    <body class="g-sidenav-show  bg-gray-200">
        <?php include "../template/sidebar2.php" ?>
            <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <?php include "../template/navbar.php" ?>

    <div class="container-fluid py-1">

            <div class="section-title text-center">
                <h2>Tambah Data Anggota</h2>
                <div class="container px-3 py-4">
                <div class="px-3">
      <div class="px-3">
        <div class="px-3">
          <div class="px-3">
            <div class="px-3">
              <div class="px-3">
                <div class="px-4">

<div class="card border-primary " style="width: 45rem;">

		  <div class="card-body">
		  <form class="row g-3" method="post" action="" name="form1">
              <div class="col-6">
              
			  <div class="input-group input-group-outline col-md-6">
                    <label class="form-label">Nama</label>
                    <input type="nama" class="form-control" name="nama" onfocus="focused(this)" onfocusout="defocused(this)" required> 
                  </div>
              </div>
              <div class="col-6">
			     <div class="input-group input-group-outline col-md-6">
                    <label class="form-label">Tempat Lahir</label>
                    <input type="nama" class="form-control" name="tempat_lahir" onfocus="focused(this)" onfocusout="defocused(this)" required>
                  </div>
              </div>
             
			<div class="col-md-5">
				<label for="jenis_mapel" class="form-label">Pilihan Paket</label>
					<select name="jenis_mapel" id="jenisPaket" class="form-select">
					<option selected disabled> - Pilih Paket - </option>				
			        </select>
                    
			</div>

            <div class="col-md-1">
            <label for="jenis_mapel" class="form-label">Add</label>
                    <a href="add_new.php" data-bs-toggle="modal" data-bs-target="#tambah"><i class="fas fa-plus-circle"></i></a>
            </div>

			<div class="col-md-6">
				<label for="jk" class="form-label">Jenis Kelamin</label>
				<select name="jk" class="form-select">
					<option disabled="disabled" selected="selected">   -- </option>
					<option value="1">Laki-laki</option>
					<option value="2">Perempuan</option>
				</select>
			</div>
			<div class="col-md-6 my-4">
			 	 <label for="matkul" class="form-label">Pilihan MAPEL</label><br>
				  
			 	 <?php //query data table jenis surat

				 foreach ($mapel as $mp) {

				?>
					<div class="form-check-inline custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="<?=$mp['id_mapel']?>" value="<?=$mp['id_mapel']?>"> <span><?=$mp['nama_mapel']?></span>
				</div>
				<?php 
				  }
				?>

			</div>
			
			<div class="col-md-6">
				<label for="jenis_surat" class="form-label">Admin</label>
					<select name="admin"  class="form-select" id="jenisAdmin">
					<option selected disabled> - Pilih Admin - </option>
			
			   </select>
			</div>	
			<div class="d-grid gap-2 col-4 mx-auto">
				<input type="submit" class="btn btn-primary" value="SAVE" name="simpan">
				<a href="content.php" class="btn btn-outline-primary">CANCEL</a>
			</div>
		  </form>
		</div>
		</div>
	  </row>
	  </div>
	</div>
</div>
</div>
</div>
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

   
<?php include "../template/footer.php" ?>
	</div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
 

<?php include "../template/script.php" ?>
<script type="text/javascript">
    $(document).ready(function(){
        //alert('test');
        show_jenis(); //memanggil function yang dibawah
        show_jenis2();

        function show_jenis(){ //function untuk menampilkan data produk
            $.ajax({
                type : 'GET',
                url :'api.php', //memanggil api
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    var no;
                    for(i=0; i<data.length; i++){
                        no = i + 1;
                        html +=
                            '<option value="'+data[i].id_paket+'">'+data[i].nama_paket+'</option>';
                    }
                    $('#jenisPaket').html(html);
                }
            });
        }

        function show_jenis2(){ //function untuk menampilkan data produk
            $.ajax({
                type : 'GET',
                url :'api2.php', //memanggil api
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    var no;
                    for(i=0; i<data.length; i++){
                        no = i + 1;
                        html +=
                            '<option value="'+data[i].id_admin+'">'+data[i].nama_admin+'</option>';
                    }
                    $('#jenisAdmin').html(html);
                }
            });
        }

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

        
});


</script>

</html>