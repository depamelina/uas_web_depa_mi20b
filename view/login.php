<?php 

include '../controller/Auth.php';

$ctrl = new Auth();
?>


<!doctype html>
<html lang="en">
  <head>
   	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
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

     <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Berhasil!</strong> Anda berhasil Logout
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
	  <?php 
       }else if ($pesan=='gagal' && $frm =='login') {
     ?>

     <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Gagal!</strong> Anda Gagal Login
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
	  
	  <?php 
       }else if ($pesan=='gagal' && $frm =='captcha') {
     ?>

     <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Gagal!</strong> Captcha Salah
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      
      
      <?php 
    }
      ?>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-1 text-center">
					<!--<h2 class="heading-section">Login</h2>--->
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<h2>Selamat Datang</h2>
								<p>Belum punya akun?</p>
								<a href="regis.php" class="btn btn-white btn-outline-white">Sign Up</a>
								<a href="../view/index.php" class="btn btn-white btn-outline-white">Home</a>
							</div>
			      </div>
						<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Sign In</h3>
			      		</div>
								
			      	</div>
							<form action="<?php echo $ctrl->login();?>" method="post" class="signin-form">
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Username</label>
			      			<input type="text" name="user" class="form-control" placeholder="Username" required>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>
		              <input type="password" name="pass" class="form-control" placeholder="Password" required>
		            </div>
					
					<div class="form-group">
						<label class="label" for="password">Captcha</label><br>
						<span class="center"><img src="captcha.php" alt="gambar"/></span>
                    </div>
                    <div class="form-group">
                    <input class="form-control" name="code" value="" placeholder="Kode Captcha" maxlength="5"/>
                	</div>

					<div class="form-group">
		            	<button type="submit" name="login" class="form-control btn btn-primary submit px-3">Sign In</button>
		            </div>
		    
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

