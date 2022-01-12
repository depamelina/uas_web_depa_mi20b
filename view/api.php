<?php
    header("Access-Control-Allow-Origin:*");
    header("Content-Type:application/json;charset=UTF-8");
    header("Access-Control-Allow-Methods:POST,GET,PUT,DELETE");
    header("Access-Control-Max-Age:3600");
    header("Access-Control-Allow-Headers:Content-Type,Access-Control-Allow-Headers,Authorization,X-Requested-With");

    include '../controller/Kursus.php';
    $ctrl = new Kursus();
    $request = $_SERVER['REQUEST_METHOD'];
    switch($request)
    {   
        //READ
        case 'GET' :
        $ctrl->getJenisPaket();
        break;
        
        //ADD
        case 'POST' :
            $ctrl->simpanJenis();
        break;

        //UPDATE
        case 'PUT' :
        break;
        
        //DELETE
        case 'DELETE':
        break;

        default :

        http_response_code(404);
        echo "Request tidak diizinkan";
    }


?>