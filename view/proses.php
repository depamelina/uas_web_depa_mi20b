<?php
session_start();

if($_SESSION["code"] != $_POST["kode"]){
    //jika code captcha salah mmaka akan kembali ke halaman sebelumnya
    echo "<script>alert('captcha yang anda masukkan salah');window.history.go(-1);</script>";
}else{ ?>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <br>Kode Benar<br>
<?php } ?>