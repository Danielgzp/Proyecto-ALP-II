<?php 
    //ESTE SERÍA EL PANEL DEL ADMINISTRADOR, MÁS O MENOS

    require_once "config.php"; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo NAME;?> | Administrador</title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,700,500,900">
    <link rel="stylesheet" href="<?php echo URL;?>css/sweetalert2.min.css">
    <link rel="stylesheet" href="<?php echo URL;?>css/semantic.min.css">
    <link rel="stylesheet" href="<?php echo URL;?>css/datatables.semantic.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,700,500,900">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        *{
            font-family: 'Roboto',sans-serif;
        }
        #add{
            margin: 20px;
            font-family: 'Roboto',sans-serif;
        }
    </style>
</head>
<body>
    <div class="ui center aligned container">
        <div id="titulo">
            <h3 class="ui attached header">
                Bienvenido a la biblioteca administrador
            </h3>
            <button class="ui orange basic button" id="add">Agregar registro</button>
        </div>
        <div class="ui small modal">
            <i class="close icon"></i>
            <div class="header center aligned">Agregar registro</div>
            <div class="content">
                <form class="ui form" id="form" name="agregar" method="post" action="ajax/agregar.php">
                    <div class="two fields">
                        <div class="field">
                            <label>Autor:</label>
                            <input type="text" placeholder="Autor del libro, documento, revista, etc" name="autor" required>
                        </div>
                        <div class="field">
                            <label>Nombre:</label>
                            <input type="text" placeholder="Nombre del libro, documento, revista, etc" name="nombre" required>
                        </div>   
                    </div>
                    <div class="field">
                        <label>Descripción:</label>
                        <textarea name="descripcion" required></textarea>
                    </div>
                    <div class="two fields">
                        <div class="field">
                            <label>Género</label>
                                <select class="ui fluid dropdown" name="genero" required>
                                    <option value="Genero">Género:</option>
                                    <option value="Opcion1">Opción1</option>
                                    <option value="Opcion2">Opción2</option>
                                    <option value="Opcion3">Opción3</option>
                                    <option value="Opcion4">Opción4</option>
                                </select>
                        </div>
                        <div class="field">
                            <label>Fecha de publicación:</label>
                            <input type="date" placeholder="Fecha de publicación" name="date" required>
                        </div>   
                    </div>
                    <div class="field">
                        <label>Link para la imagen de portada:</label>
                        <input type="text" placeholder="imagen" name="imagen">
                    </div>
                    <div class="field">
                        <label>Link para leer online:</label>
                        <input type="text" placeholder="Leer online" name="leer">
                    </div>
                    <div class="field">
                        <label>Link para descargar:</label>
                        <input type="text" placeholder="Descargar" name="descargar">
                    </div>
                    <div id=""></div>             
                    <button type="submit" class="ui orange button" >Agregar</button>
                    <div id="respuesta"></div>
                </form>
            </div>
        </div>

        <table class="ui orange celled table" id="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Autor</th>
                <th>Nombre</th>
                <th>Género</th>
                <th>Fecha</th>
                <th>Descripción</th>
                <th>Imagen</th>
                <th>Leer</th>
                <th>Descargar</th>
                <th>Actualizar</th> 
                <th>Eliminar</th>                    
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Prueba</td>
                <td>Algo</td>
                <td>Algo</td>
                <td>02/02/2010</td>
                <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
                <td>Prueba</td>
                <td><a href="http://localhost/Proyecto-ALP-II">http://localhost/Proyecto-ALP-II</a></td>
                <td><a href="http://localhost/Proyecto-ALP-II">http://localhost/Proyecto-ALP-II</a></td>
                <td><a href="<?php echo URL;?>update/" class="ui orange button"> <i class="pencil alternate icon"></i></a></td>
                <td><a href="<?php echo URL;?>delete/>" class="delete ui red button"> <i class="close icon"></i></a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Prueba</td>
                <td>Algo</td>
                <td>Algo</td>
                <td>02/02/2010</td>
                <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
                <td>Prueba</td>
                <td><a href="http://localhost/Proyecto-ALP-II">http://localhost/Proyecto-ALP-II</a></td>
                <td><a href="http://localhost/Proyecto-ALP-II">http://localhost/Proyecto-ALP-II</a></td>
                <td><a href="<?php echo URL;?>update/" class="ui orange button"> <i class="pencil alternate icon"></i></a></td>
                <td><a href="<?php echo URL;?>delete/>" class="delete ui red button"> <i class="close icon"></i></a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Prueba</td>
                <td>Algo</td>
                <td>Algo</td>
                <td>02/02/2010</td>
                <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
                <td>Prueba</td>
                <td><a href="http://localhost/Proyecto-ALP-II">http://localhost/Proyecto-ALP-II</a></td>
                <td><a href="http://localhost/Proyecto-ALP-II">http://localhost/Proyecto-ALP-II</a></td>
                <td><a href="<?php echo URL;?>update/" class="ui orange button"> <i class="pencil alternate icon"></i></a></td>
                <td><a href="<?php echo URL;?>delete/>" class="delete ui red button"> <i class="close icon"></i></a></td>
            </tr>
        </tbody>

    </div>

    <script src="<?php echo URL;?>js/semantic.min.js"></script>
    <script src="<?php echo URL;?>js/datatables.min.js"></script>
    <script src="<?php echo URL;?>js/datatables.semantic.min.js"></script>
    <script src="<?php echo URL;?>js/sweetalert2.min.js"></script>
    <script src="<?php echo URL;?>js/main.js"></script>
    <script>
        $("#add").on('click', function(){
            
            $('.ui.small.modal').modal('show');
        });
        $(".dropdown").dropdown();
        $("#table").DataTable();
    </script>
</body>
</html>