<?php require_once "config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo URL;?>css/sweetalert2.min.css">
    <link rel="stylesheet" href="<?php echo URL;?>css/login.css">
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
                        <h2>Ingresa tus datos</h2>
                        <form action="ajax/login.php" method="post" class="form">
                            <div class="email-form">
                                <label for="email">
                                    <input type="email" placeholder="Tu email" id="email" name="email">
                                </label>
                            </div>
                            <div class="password-form">
                                <label for="pass">
                                    <input type="password" placeholder="Tu contraseña" id="pass" name="pass">
                                </label>
                            </div>
                            <label for="sesion">
                                <div class="preloader" id="preloader"></div>
                                <input type="submit" name="sesion" class="iniciar-sesion" value="Iniciar Sesión" id="enviar">
                            </label>
                            <div id="respuesta"></div>
                        </form>
                    </div>
                    <div class="registrar">
                        <p>Aun no tienes cuenta?</p>
                        <div class="registrar-div">
                            <a href="<?php echo URL;?>registro.php">
                                <button class="registrar-button">
                                    <span>Registrate</span>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </main>
    <script src="<?php echo URL;?>js/sweetalert2.min.js"></script>
    <script src="<?php echo URL;?>js/main.js"></script>
</body>
</html>