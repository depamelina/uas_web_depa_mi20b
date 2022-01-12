<?php

  include '../Database.php';
  include '../model/Paket_model.php';

  class Paket{
    public $model;

    function __construct()
    {
        $db = new Database();
        $conn = $db->DBConnect();
        $this->model = new Paket_model($conn); 
    }

    function index2(){
            session_start();
                if(!empty($_SESSION)){
                    $kursus = $this->model->tampil_data2();
                    return $kursus;
                }else{
                    // header("Location:login.php");
                }
        }
  }

?>