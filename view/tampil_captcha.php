<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<br><br>
<div class="container">
    <div class="row">
     <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Register</h3>
     </div>
      <div class="panel-body">
        <form action="proses.php" method="post">
                        <div class="form-group">
                            <input class="form-control" placeholder="Name" name="name" type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Phone" name="phone" type="number">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Email" name="email" type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password">
                        </div>
                        <div class="form-group">
                            <img src="generate.php" alt="gambar" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="kode" value="" placeholder="kode captcha" maxlength="5"/>
                        </div>
                        <input class="btn btn-lg btn-success btn-block" type="submit" value="Register">
          </form>
       </div>
   </div>
  </div>
 </div>
</div>