<?php

    include '../Database.php';
    include '../model/Kursus_model.php';
    include '../model/Paket_model.php';

    class Kursus{
        public $model;

        function __construct()
        {
            $db = new Database();
            $conn = $db->DBConnect();
            $this->model = new Kursus_model($conn);
        }

        function index(){
            session_start();
                if(!empty($_SESSION)){
                    $kursus = $this->model->tampil_data();
                    return $kursus;
                }else{
                    header("Location:login.php");
                }
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
        function laporan_anggota(){
            session_start();
                if(!empty($_SESSION)){
                    $kursus = $this->model->tampil_data_laporan_anggota();
                    return $kursus;
                }else{
                    header("Location:login.php");
                }
        }
        function getData($id){
             $kursus = $this->model->getData($id);
             return $kursus;
        }

    //     function getDataPaket($id){
    //         $paket = $this->model->getDataPaket($id);
    //         return $paket;
    //    }

            function getJenisPaket(){
             $jenis_paket = $this->model->getJenisPaket();
             echo json_encode($jenis_paket);
             return $jenis_paket;
        }

            function getMapel(){
             $jenis_mapel = $this->model->getMapel();
             return $jenis_mapel;
        }

             function getAdmin(){
            $admin = $this->model->getAdmin();
            echo json_encode($admin);
            return $admin;
       }

            function getKontrak(){
            $kontrak = $this->model->getKontrak();
            return $kontrak;
       }

            function simpanKursus(){

            if(isset($_POST['simpan'])){
                $id=date('YmdHis');
                $nama=$_POST['nama'];
                $tempat_lahir=$_POST['tempat_lahir'];
                $jk=$_POST['jk'];
                $jenis_mapel=$_POST['jenis_mapel'];
                $admin=$_POST['admin'];

                $data[] = array(
                'id_anggota' =>$id ,
                'nama' => $nama,
                'tempat_lahir' => $tempat_lahir,
                'jenis_kelamin' => $jk,
                'id_admin' =>  $admin
                );



                $mpz = $this->model->getPaketId($jenis_mapel);
					$harga = $mpz[0]['harga'];

					$mapel = $this->model->getMapel();
					foreach ($mapel as $mp) {
						if(isset($_POST[$mp['id_mapel']])){
							$id_mapel = $mp['id_mapel'];
							$data2[] = array(
							'id_mapel' => $id_mapel ,
							'id_anggota' => $id,
							'id_jenis_paket' => $jenis_mapel,
							'harga' => $harga
						   );
						   $result2 = $this->model->simpanDataMatkul($data2);
						}

					}



                   $result = $this->model->simpanData($data);
                       if($result){
                           header("Location:content.php?pesan=success&frm=add");
                        }else{
                            header("Location:content.php?pesan=gagal&frm=add");
                       }
                    }
                 }


            function hapusData(){
                if(isset($_POST['delete'])) {
                    $id = $_POST['id_anggota'];

                    $result = $this->model->hapusData($id);

                    if($result){
                        header("Location:content.php?pesan=success&frm=del");
                        }else{
                            header("Location:content.php?pesan=gagal&frm=del");
                       }
                    }
                }


            function updateKursus(){

                if(isset($_POST['update'])){

                    $id=$_POST['id'];
                    $nama=$_POST['nama'];
                    $tempat_lahir=$_POST['tempat_lahir'];
                    $jk=$_POST['jk'];
                    $jenis_mapel=$_POST['jenis_mapel'];
                    $admin=$_POST['admin'];

                    $data[] = array(
                        'nama' => $nama,
                        'tempat_lahir' => $tempat_lahir,
                        'jenis_kelamin' => $jk,
                        'id_admin' =>  $admin
                    );

                    $result = $this->model->updateData($data,$id);

					$mpz = $this->model->getPaketId($jenis_mapel);
					$harga = $mpz[0]['harga'];

					$mapel = $this->model->getMapel();
					foreach ($mapel as $mp) {
						if(isset($_POST[$mp['id_mapel']])){
							$id_mapel = $mp['id_mapel'];
							$data2[] = array(
							'id_mapel' => $id_mapel ,
							'id_anggota' => $id,
							'id_jenis_paket' => $jenis_mapel,
							'harga' => $harga
						   );
						   $result2 = $this->model->simpanDataMatkul($data2);
						}

					}

                    if($result){
                        header("Location:content.php?pesan=success&frm=edit");
                     }else{
                         header("Location:content.php?pesan=gagal&frm=edit");
                    }
                }
          }

          function logout(){
            if(isset($_POST['logout'])) {
                session_start();
                session_destroy();
                header("Location:login.php?pesan=success&frm=logout");
            }
        }

        function simpanJenis(){
            $nama_paket = $_POST['nama_paket'];
            $harga = $_POST['harga'];
            $data[] = array(
                'nama_paket' => $nama_paket,
                'harga' => $harga,
                );

            $result = $this->model->simpanDataPaket($data);
                if($result){
                    echo '200';
                }else{
                    echo '200';
                }

        }

        function hapusPaket(){
            if(isset($_POST['delete'])) {
                $id = $_POST['id_paket'];

                $result = $this->model->hapusPaket($id);

                if($result){
                    header("Location:add_paket.php?pesan=success&frm=del");
                    }else{
                        header("Location:add_paket.php?pesan=gagal&frm=del");
                   }
                }
            }

            function updatePaket(){

                if(isset($_POST['btnUbah'])){

                    $id=$_POST['id_paket_ubah'];
                    $nama=$_POST['nama_paket_ubah'];
                    $harga=$_POST['harga_paket_ubah'];

                    $data[] = array(
                        'nama_paket' => $nama,
                        'harga' => $harga,
                    );

                    $result = $this->model->updatePaket($data,$id);

                    if($result){
                        header("Location:add_paket.php?pesan=success&frm=edit");
                     }else{
                         header("Location:add_paket.php?pesan=gagal&frm=edit");
                    }
                }
          }


     }
?>
