<?php
    require_once "../config.php";

    if(isset($_POST["autor"]) && isset($_POST["nombre"]) && isset($_POST["descripcion"]) && isset($_POST["genero"])){

        $autor = $_POST["autor"];
        $nombre = $_POST["nombre"];
        $descripcion = $_POST["descripcion"];
        $genero = $_POST["genero"];
        $fecha = $_POST["date"];
        $imagen = $_POST["imagen"];
        $leer = $_POST["leer"];
        $descargar = $_POST["descargar"];

        //Comienza la validación

        if($genero == "Genero"){
            $alert = [
                "alert"=>"simple",
                "title"=>"Error!",
                "text"=>"Tienes que seleccionar un género",
                "type"=>"error"
            ];
        }else{
            if(strlen($descripcion) > 1000 ){
                $alert = [
                    "alert"=>"simple",
                    "title"=>"Error!",
                    "text"=>"La descripción no puede pasar de 1000 carácteres",
                    "type"=>"error"
                ];
            }else{
                if(!preg_match("/^[a-zA-ZÀ-ÿ\s]{1,40}$/", $autor) || !preg_match("/^[a-zA-ZÀ-ÿ\s]{1,40}$/", $nombre)){
                    $alert = [
                        "alert"=>"simple",
                        "title"=>"Error!",
                        "text"=>"Los campos de autor y nombre sólo pueden llevar letras",
                        "type"=>"error"
                    ];
                }else{

                    //Si no hay error saldrá está alerta
                    $alert = [
                        "alert"=>"clean",
                        "title"=>"Felicidades!",
                        "text"=>"Tu registro se ha guardado satisfactoriamente",
                        "type"=>"success"
                    ];

                }
            }
        }
    }

    echo sweet_alert($alert);
?>