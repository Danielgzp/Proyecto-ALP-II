<?php
    //Para que todos los estilos css y los archivos javascript sean llamados correctamente
    const URL = "http://localhost/Proyecto-ALP-II/"; // Tiene que llevar la URL de dónde está el proyecto
    const NAME = "Nombre del sitio";


    //Ignoren, esto es para que salga la alerta
    function sweet_alert($data){
        if($data['alert'] == "simple"){
            $alert = " 
                <script>
                    swal({
                        type: '".$data['type']."',
                        title: '".$data['title']."',
                        text: '".$data['text']."'
                    });
                </script>
            ";
        }elseif($data['alert'] == "reload") {
            $alert = " 
                <script>
                    swal({
                        type: '".$data['type']."',
                        title: '".$data['title']."',
                        text: '".$data['text']."',
                        confirmButtonText: 'OK'
                        }).then(function(){
                                location.reload();
                        });
                </script>
            ";
        }elseif($data['alert'] == "clean") {
            $alert = " 
                <script>
                    swal({
                        type: '".$data['type']."',
                        title: '".$data['title']."',
                        text: '".$data['text']."',
                        confirmButtonText: 'OK'
                        }).then(function(){
                                $('.form')[0].reset();
                        });
                </script>
            ";
        }
        return $alert;
    }
?>