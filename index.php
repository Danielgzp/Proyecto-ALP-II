<?php require_once "config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <link rel="stylesheet" href="<?php echo URL;?>css/style.css">
    <link rel="stylesheet" href="<?php echo URL;?>css/tablet.css" media="screen and (min-width: 500px)">
    <link rel="stylesheet" href="<?php echo URL;?>css/desktop.css" media="screen and (min-width: 800px)">
    <link rel="stylesheet" href="<?php echo URL;?>css/biggerDesktop.css" media="screen and (min-width: 1000px)" >
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,700,500,900">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
</head>
<body>
    <header>
        <section class="header-section">
            <div class="wrapper">

                <div class="logo">
                    <figure class="header-figure">
                        <img id="logo" src="<?php echo URL;?>images/logo.png">
                    </figure>
                </div>
        
                <div class="search-container">
                    <form class="search" action="/cuenta.html">
                        <div class="search-div">
                            <label for="search">
                                <input type="search" name="search" class="search-input" placeholder="Busca entre los muchos libros disponibles..."> 
                                <input class="input-button" type="submit" name="search-button">
                            </label>
                        </div>
                    </form>
                </div>

                <div class="menu">
                    <h2 class="title-menu">MENÚ<a href="#" id="btn-togle--menu"><span></span></a></h2>
                        <nav class="header-nav">
                            <ul class="header-nav--ul">
                                <a href="<?php echo URL;?>">
                                    <li>
                                    <P>Todos los libros</P>
                                    </li>
                                </a>
                                <a href="#">
                                    <li>
                                        <p>Hacer una contribucion</p>
                                    </li>
                                </a>
                                <a href="<?php echo URL;?>login.php">
                                    <li>
                                        <p>Iniciar Sesión</p>
                                    </li>
                                </a>
                            </ul>
                        </nav>
                </div>
            </div>
        </section>
    </header>


    <main>
        <section class="main-section1">
            <div class="categorias">
                <h2 class="title-categoria"><a href="#" id="btn-togle"><span></span></a>Categorias</h2>
            </div>
            <aside class="main-aside">
                <div class="main-div--aside">
                    <ul class="main-aside--lista">
                        <h2 class="title-list">Literatura y Ficción</h2>
                            <ol>
                                <li class="lista-elemento"><a href=""><span></span>Aventura</a></li>
                                <li class="lista-elemento"><a href=""><span></span>Algo</a></li> 
                                <li class="lista-elemento"><a href=""><span></span>Algo</a></li> 
                                <li class="lista-elemento"><a href=""><span></span>Algo</a></li> 
                                <li class="lista-elemento"><a href=""><span></span>Algo</a></li> 
                                <li class="lista-elemento"><a href=""><span></span>Algo</a></li> 
                                <li class="lista-elemento"><a href=""><span></span>Algo</a></li> 
                                <li class="lista-elemento"><a href=""><span></span>Algo</a></li> 
                                <li class="lista-elemento"><a href=""><span></span>Algo</a></li> 
                                <li class="lista-elemento"><a href=""><span></span>Algo</a></li> 

                            </ol>
                        <h2 class="title-list">Técnico y Académicos</h2>
                            <ol>
                                <li class="lista-elemento"><a href=""><span></span>Algo 3</a></li> 
                                <li class="lista-elemento"><a href=""><span></span>Algo</a></li> 
                                <li class="lista-elemento"><a href=""><span></span>Algo</a></li>
                                <li class="lista-elemento"><a href=""><span></span>Algo</a></li>  
                            </ol>
                        <h2 class="title-list">Vida Práctica y Otros</h2>
                            <ol>
                                <li class="lista-elemento"><a href=""><span></span>Algo</a></li> 
                                <li class="lista-elemento"><a href=""><span></span>Algo</a></li> 
                                <li class="lista-elemento"><a href=""><span></span>Algo</a></li> 
                                <li class="lista-elemento"><a href=""><span></span>Algo</a></li> 
                                <li class="lista-elemento"><a href=""><span></span>Algo</a></li> 

                            </ol>
                    </ul>
                </div>
             </aside>
            <article class="main-content">
                    <h2 class="title-books">Publicaciones recientes</h3>
                    <div class="books-container">
                        <ul class="list-books--ul">
                            <li>
                            <figure class="books-container--portada">
                                <a href="">
                                    <img src="./images/libros/descargar-libro-la-escapada.jpg" alt="">
                                </a>
                                <figcaption>La Escapada</figcaption>
                            </figure>
                            <div class="autor">
                                <a href="">William Faulkner</a>
                            </div>
                            <div class="descargar">
                                <a href="">DESCARGAR O LEER ONLINE</a>
                            </div>
                            </li>

                            <li>
                                <figure class="books-container--portada">
                                    <a href="">
                                        <img src="./images/libros/descargar-libro-el-experimento.jpg" alt="">
                                    </a>
                                    <figcaption>El Experimento</figcaption>
                                </figure>
                                <div class="autor">
                                    <a href="">Sebastian Fitzek</a>
                                </div>
                                <div class="descargar">
                                    <a href="">DESCARGAR O LEER ONLINE</a>
                                </div>
                            </li>

                            <li>
                                <figure class="books-container--portada">
                                    <a href="">
                                        <img src="./images/libros/descargar-libro-el-vizconde-de-bragelonne.jpg" alt="">
                                    </a>
                                    <figcaption>El Vizconde de Bragelonne</figcaption>
                                </figure>
                                <div class="autor">
                                    <a href="">Alexandre Dumas</a>
                                </div>
                                <div class="descargar">
                                    <a href="">DESCARGAR O LEER ONLINE</a>
                                </div>
                            </li>

                            <li>
                                <figure class="books-container--portada">
                                    <a href="">
                                        <img src="./images/libros/descargar-libro-los-perros-de-la-guerra.jpg" alt="">
                                    </a>
                                    <figcaption>Los Perros de la Guerra</figcaption>
                                </figure>
                                <div class="autor">
                                    <a href="">Frederick Forsyth</a>
                                </div>
                                <div class="descargar">
                                    <a href="">DESCARGAR O LEER ONLINE</a>
                                </div>
                            </li>


                            <!-- Segunda fila de libros -->

                            <li>
                                <figure class="books-container--portada">
                                    <a href="">
                                        <img src="./images/libros/descargar-libro-el-uso-de-los-placeres.jpg" alt="">
                                    </a>
                                    <figcaption>El uso de los Placeres</figcaption>
                                </figure>
                                <div class="autor">
                                    <a href="">Michel Foucault</a>
                                </div>
                                <div class="descargar">
                                    <a href="">DESCARGAR O LEER ONLINE</a>
                                </div>
                            </li>
    
                                <li>
                                    <figure class="books-container--portada">
                                        <a href="">
                                            <img src="./images/libros/descargar-libro-cadena-de-fuego.jpg" alt="">
                                         </a>
                                        <figcaption>Cadena de Fuego</figcaption>
                                        <div class="autor">
                                            <a href="">Terry Goodkind</a>
                                        </div>
                                        <div class="descargar">
                                            <a href="">DESCARGAR O LEER ONLINE</a>
                                        </div>
                                    </figure>
                                </li>
    
                                <li>
                                    <figure class="books-container--portada">
                                        <a href="">
                                            <img src="./images/libros/descargar-libro-el-rio-del-eden.jpg" alt="">
                                        </a>
                                        <figcaption>El Río del Edén</figcaption>
                                    </figure>
                                    <div class="autor">
                                        <a href="">Richas Dawkins</a>
                                    </div>
                                    <div class="descargar">
                                        <a href="">DESCARGAR O LEER ONLINE</a>
                                    </div>
                                </li>
    
                                <li>
                                    <figure class="books-container--portada">
                                        <a href="">
                                            <img src="./images/libros/descargar-libro-cronicas-de-bustos-domecq-h-bustos-domecq.jpg" alt="">
                                        </a>
                                        <figcaption>Crónicas de Bustos Domecq</figcaption>
                                    </figure>
                                    <div class="autor">
                                        <a href="">Jorge Luis Borges</a>
                                    </div>
                                    <div class="descargar">
                                        <a href="">DESCARGAR O LEER ONLINE</a>
                                    </div>
                                </li>
                                <!-- sfmasopmxcsafas -->
                                <li>
                                    <figure class="books-container--portada">
                                        <a href="">
                                            <img src="./images/libros/descargar-libro-cronicas-de-bustos-domecq-h-bustos-domecq.jpg" alt="">
                                        </a>
                                        <figcaption>Crónicas de Bustos Domecq</figcaption>
                                    </figure>
                                    <div class="autor">
                                        <a href="">Jorge Luis Borges</a>
                                    </div>
                                    <div class="descargar">
                                        <a href="">DESCARGAR O LEER ONLINE</a>
                                    </div>
                                </li>
                            

                        </ul>
                    </div>
                    <div class="pagination">
                        <div class="number-pages">
                            <ul>
                                <li>
                                    <a href="">1</a>
                                    <a href="">2</a>
                                    <a href="">3</a>
                                    <a href="">4</a>
                                    <a href="">5</a>
                                    <a href="">6</a>
                                    <a href="">></a>
                                    <a href="">ÚLTIMO</a>
                                </li>
                            </ul>
                        </div>
                        <div class="counter-pages">
                            <p>Pagina 1 de 216</p>
                        </div>
                    </div>
                </div>
            </article>
        </section>
        <section class="main-section2">
            <div class="publicidad">
                <div class="publi1">
                    <a href="">
                    <figure>
                        <img src="./images/publicidad-coca-cola.jpg" alt="">
                        <figcaption>Publicidad</figcaption>
                    </figure>
                    </a>
                </div>
                <div class="publi2">
                    <a href="">
                        <figure>
                            <img src="./images/publicidad/nike.png" alt="">
                            <figcaption>Publicidad</figcaption>
                        </figure>
                    </a>
                </div>
                <div class="publi3">
                    <a href="">
                        <figure>
                            <img src="./images/publicidad/mcdonalds.png" alt="">
                            <figcaption>Publicidad</figcaption>
                        </figure>
                    </a>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <section class="footer-left">
            <p>Echo por los panas © 2016 LeLibros. Todos los derechos reservados a sus respectivos</p>
        </section>
        <section class="footer-right">
            <p>El mejor lugar para descargar o leer en línea los mejores libros en PDF, Epub y mobi.</p>
        </section>
    </footer>
    <script src="/js/seccion.js"></script>
</body>
</html>