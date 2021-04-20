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
    <title><?php echo NAME;?> </title>
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
                Bienvenido a la biblioteca
            </h3>

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