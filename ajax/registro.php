<?php
    require_once "../config.php";

    if(isset($_POST["name"]) && isset($_POST["lastname"]) && isset($_POST["age"]) && isset($_POST["date"]) && isset($_POST["country"]) && isset($_POST["email"]) && isset($_POST["pass"]) && isset($_POST["pass2"])){

        $nombre = $_POST["name"];
        $apellido = $_POST["lastname"];
        $edad = $_POST["age"];
        $fecha = $_POST["date"];
        $pais = $_POST["country"];
        $correo = $_POST["email"];
        $pass = $_POST["pass"];
        $pass2 = $_POST["pass2"];

        //Comienza la validación
        
        if($pass != $pass2){

            if(strlen($pass) < 8){

                echo "<script>
                        var pass = document.getElementById('pass');
                        pass.style.borderColor = 'red';
                        var pass2 = document.getElementById('pass2');
                        pass2.style.borderColor = 'red';
                    </script>";

                $alert = [
                    "alert"=>"simple",
                    "title"=>"Error!",
                    "text"=>"La contraseña debe tener mínimo 8 carácteres",
                    "type"=>"error"
                ];

            }else{

                echo "<script>
                        var pass = document.getElementById('pass');
                        pass.style.borderColor = 'red';
                        var pass2 = document.getElementById('pass2');
                        pass2.style.borderColor = 'red';
                    </script>";

                $alert = [
                    "alert"=>"simple",
                    "title"=>"Error!",
                    "text"=>"Las contraseñas no coinciden",
                    "type"=>"error"
                ];
            }
            
        }else{
            if($_POST["age"] < 10 || $_POST["age"] > 100){

                echo "<script>
                        var age = document.getElementById('age');
                        age.style.borderColor = 'red';
                    </script>";

                $alert = [
                    "alert"=>"simple",
                    "title"=>"Error!",
                    "text"=>"Ingresa una edad correcta. Tienes que tener más de 10 años",
                    "type"=>"error"
                ];

            }else{

                if(!preg_match("/^[a-zA-ZÀ-ÿ\s]{1,40}$/", $nombre) || !preg_match("/^[a-zA-ZÀ-ÿ\s]{1,40}$/", $apellido) || !preg_match("/^[a-zA-ZÀ-ÿ\s]{1,40}$/", $pais)){
                    
                    if(!preg_match("/^[a-zA-ZÀ-ÿ\s]{1,40}$/", $nombre)){

                        echo "<script>
                                var nombre = document.getElementById('name');
                                nombre.style.borderColor = 'red';
                            </script>";

                    }

                    if(!preg_match("/^[a-zA-ZÀ-ÿ\s]{1,40}$/", $apellido)){
                        
                        echo "<script>
                                var lastname = document.getElementById('lastname');
                                lastname.style.borderColor = 'red';
                            </script>";
                    }

                    if(!preg_match("/^[a-zA-ZÀ-ÿ\s]{1,40}$/", $pais)){

                        echo "<script>
                                var country = document.getElementById('country');
                                country.style.borderColor = 'red';
                            </script>";
                    }

                    $alert = [
                        "alert"=>"simple",
                        "title"=>"Error!",
                        "text"=>"Sólo se permiten letras en los campos de nombre, apellido y país",
                        "type"=>"error"
                    ];

                }else{

                    //Si no hay error saldrá está alerta

                    $alert = [
                        "alert"=>"clean",
                        "title"=>"Felicidades!",
                        "text"=>"Te has registrado satisfactoriamente",
                        "type"=>"success"
                    ];

                }
            }
        }

        echo sweet_alert($alert);
    }
?>