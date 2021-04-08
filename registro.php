<?php require_once "config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="<?php echo URL;?>css/sweetalert2.min.css">
    <link rel="stylesheet" href="<?php echo URL;?>css/registro.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,700,500,900">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <header>
        <figure class="logo">
            <img src="./images/lelibros.jpg" alt="">
        </figure>
    </header>
    <main>
        <section class="fondo">
            <section class="login">
                <div class="login-div">
                    <h2>Ingresa tus datos</h2>
                        <!-- <div class="redes">
                            <div class="twitter">
                                <a href="">
                                    <span>twitter</span>
                                </a>
                            </div>
                            <div class="facebook">
                                <a href="">
                                    <span>facebook</span>
                                </a>
                            </div>
                        </div> -->
                    <div class="form-div">
                        <form action="ajax/registro.php" method="post" name="registro" class="form">
                            <div class="input name-form">
                                <h3>Nombre:</h3>
                                <label for="name">
                                    <input type="text" name="name" placeholder="Tu nombre" id="name" required>
                                </label>
                            </div>
                            <div class="input lastname-form">
                                <h3>Apellido:</h3>
                                <label for="lastname">
                                    <input type="text" placeholder="Tu apellido" id="lastname" name="lastname" required>
                                </label>
                            </div>
                            <div class="input age-form">
                                <h3>Edad:</h3>
                                <label for="age">
                                    <input type="number" placeholder="00" id="age" name="age" required>
                                </label>
                            </div>
                            <div class="input date-form">
                                <h3>Fecha de nacimiento:</h3>
                                <label for="date">
                                    <input type="date" id="date" name="date" required>
                                </label>
                            </div>
                            <div class="input country-form">
                                <h3>País:</h3>
                                <label for="country">
                                        <input type="text" placeholder="Tu pais" id="country" name="country" required>
                                </label>
                            </div>
                            <div class="input email-form">
                                <h3>Correo:</h3>
                                <label for="email">
                                    <input type="email" placeholder="example@gmail.com" id="email" name="email" required>
                                </label>
                            </div>
                            <div class="input password-form">
                                <h3>Crear contraseña: </h3>
                                <label for="pass">
                                    <input type="password" placeholder="contraseña" id="pass" name="pass" required>
                                </label>
                            </div>
                            <div class="input password-form">
                                <h3>Repite contraseña: </h3>
                                <label for="pass2">
                                    <input type="password" placeholder="contraseña" id="pass2" name="pass2" required>
                                </label>
                            </div>
                            <input type="submit" value="Crear Cuenta" class="iniciar-sesion" id="enviar">
                        </form>
                        <div class="preloader" id="preloader"></div>
                        <div id="respuesta"></div>
                    </div>
                </div>
            </section>
        </section>
    </main>
    <script src="<?php echo URL;?>js/sweetalert2.min.js"></script>
    <script src="<?php echo URL;?>js/main.js"></script>
</body>
</html>