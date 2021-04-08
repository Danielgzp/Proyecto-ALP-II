<?php
    require_once "../config.php";

    if(isset($_POST["email"]) && isset($_POST["pass"])){
        if($_POST["email"] == "admin@admin.com" && $_POST["pass"] == "12345678"){


            //Si se inicia sesión será redirigido
            echo "<script> window.location='".URL."cuenta.php'; </script>";

        }else{

            //Si no se inicia sesión saldrá error
            echo "<script>
                        var pass = document.getElementById('pass');
                        pass.style.borderColor = 'red';
                        var email = document.getElementById('email');
                        email.style.borderColor = 'red';
                    </script>";

                $alert = [
                    "alert"=>"simple",
                    "title"=>"Error!",
                    "text"=>"Tus datos son incorrectos",
                    "type"=>"error"
                ];

                echo sweet_alert($alert);
        }
    }else{
        echo "error";
    }
?>