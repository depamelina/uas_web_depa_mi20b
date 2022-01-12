
<!DOCTYPE html>
<html lang="en">
<?php include "../template/head.php" ?>
<body class="g-sidenav-show  bg-gray-200">
<?php include "../template/sidebar5.php" ?>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
<?php include "../template/navbar4.php" ?>
	<!-- End Navbar -->
    <div class="container-fluid py-4">
	<h3 class="text-center">Laporan Data</h3>
	 <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
           
             </div>
         <div class="container py-3">
            <div class="row">
                <div class="col-12 mx-auto col-md-6 col-lg-4 pb-1">
                   <div class="p-1">
                   <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Laporan Data Anggota</h5>
                            <p class="card-text text-center"><i class="fas fa-users fa-5x" style="color:#e91e63"></i></p>
                            <a href="cetak_laporan_anggota.php" class="btn btn-primary text-center">Print Laporan</a>
                        </div>
                      </div>
                    </div>
                    </div>
                
               <div class="col-12 mx-auto col-md-6 col-lg-4 pb-1">
                   <div class="p-1">
                   <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Laporan Data Paket</h5>
                            <p class="card-text"><i class="fas fa-boxes fa-5x" style="color:#e91e63"></i></p>
                            <a href="cetak_laporan_paket.php" class="btn btn-primary">Print Laporan</a>
                        </div>
                      </div>
                   </div>
                </div>                                           
            </div>
         </div>
              
       
	<?php include "../template/footer.php" ?>
	</div>
  </main>

<?php include "../template/script.php" ?>
</body>

</html>