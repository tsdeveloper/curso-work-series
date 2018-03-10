<!DOCTYPE html>
<?php
define('BASE', 'http://upinside.test:8080');
?>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Curso Work Series - HTML 5 do Jeito Certo</title>

        <!-- inject:css -->
        <link rel="stylesheet" href="public/assets/css/style.min.css">
        <link rel="stylesheet" href="public/assets/css/bootstrap/dist/css/bootstrap-reboot.min.css">
        <!-- <link rel="stylesheet" href="public/assets/css/bootstrap/dist/css/bootstrap.min.css"> -->
        <!-- endinject -->
        <link rel="shortcut icon" href="resources/assets/img/html5-logo.ico" />
        <!--[if lt IE 9]>
    <script src="./bower_components/html5shiv/dist/html5shiv.min.js"></script>
    <script src="./bower_components/modernizr/modernizr.custom.js"></script>
    <![endif]-->

    </head>

    <body>

        <header class="container bg-gray">
            <div class="content">

                <h1 class="main_logo">
                    <a title="home" href="">Curso Work Series - HTML 5 do Jeito Certo</a>
                </h1>

                <ul class="main_nav">
                    <li>
                        <a href="<?=BASE;?>/htm5-semnatico" title="Html5 semântico">Semântica</a>

                    </li>

                    <li>
                        <a href="<?=BASE;?>/estilo-com-oocss" title="Estilo Produtivo com OOCSS">OOCSS</a>
                    </li>
                    <li>
                        <a href="<?=BASE;?>/formularios-com-html5" title="Formulários com HTML5">Forms</a>
                    </li>
                    <li>
                        <a href="<?=BASE;?>/audio-e-video" title="Áudio e Vídeo na Web">Mídia</a>
                    </li>
                    <li>
                        <a href="<?=BASE;?>/gelocation-e-storage" title="Geolocation e HTML Storage">API's</a>
                    </li>
                    <li>
                        <a href="<?=BASE;?>/micro-dados" title="Distribuição com Micro Dados">Micro Dados</a>
                    </li>
                    <li>
                        <a href="<?=BASE;?>/sobre-curso" class="btn btn-green radius boxshadow" title="Sobre o Curso">Curso</a>
                    </li>
                </ul>

                <div class="clear"></div>
            </div>
        </header>


        <!-- CONTEUDO -->
        <!-- BLOCO DE VÍDEO -->
        <article class="container">
            <div class="content">
                <header>
                    <hgroup>
                        <h1>Conheça o Curso CSS Layout</h1>
                        <h2>Aprsentação Curso
                            <mark>HTML 5 Pro</mark>
                        </h2>
                    </hgroup>

                </header>

                <!-- VIDEO -->
                <video src="resources/assets/midias/apresentacao.mp4" width="400" controls></video>
                <aside>
                    <h1>
                        <a href="#" title="Buy HTML 5 Pro" target="_blank"> Buy</a> HTML 5 Pro</h1>
                </aside>
                <!-- VIDEO -->
                <div class="clear"></div>

            </div>
            <footer class="bg-gray">
                <section class="content">
                    <h1>Veja algumas aulas do Curso</h1>
                    <article>
                        <div class="thumb">
                            <div class="video_play"></div>
                            <img src="resources/assets/img/angularjs.png" alt="Angular JS" title="Framework Angular JS">
                      
                        </div>
                        <h1>Angular JS</h1>
                    </article>

                   <article>
                        <div class="thumb">
                            <div class="video_play"></div>
                            <img src="resources/assets/img/nodejs.png" alt="Node JS" title="Framework Node JS">
                      
                        </div>
                        <h1>Node JS</h1>
                    </article>


                    <article>
                        <div class="thumb">
                            <div class="video_play"></div>
                            <img src="resources/assets/img/sass-logo.png" alt="Sass JS" title="Framework Sass JS">
                      
                        </div>
                        <h1>SASS CSS</h1>
                    </article>


                    <article>
                        <div class="thumb">
                            <div class="video_play"></div>
                            <img src="resources/assets/img/bower-logo.png" alt="Bower JS" title="Framework Bower JS">
                      
                        </div>
                        <h1>Bower JS</h1>
                    </article>
                    <div class="clear"></div>
                </section>
            </footer>
        </article>

        <!-- SEÇÃO RELACIONAL -->
        <section class="container">
            <!-- container do title -->
            <div class="content">
                <hgroup>
                    <h1>Conheça as Tecnologias JS e CSS</h1>
                    <h2>Sobre o Curso HTML5 Pro</h2>
                </hgroup>
                <div class="clear"></div>
            </div>

            <!-- container dos artigos -->
            <div class="container bg-gray">

                <div class="content">
                    <article>
                        <img src="resources/assets/img/angularjs.png" alt="Angular JS" title="Framework Angular JS">
                        <h1>Angular JS</h1>
                        <p class="tagline">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae saepe dolor quo porro</p>
                    </article>
                    <article>
                        <img src="resources/assets/img/bower-logo.png" alt="Bower JS" title="Framework Bower JS">
                        <h1>Bower JS</h1>
                        <p class="tagline">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae saepe dolor quo porro</p>
                    </article>

                     <article>
                        <img src="resources/assets/img/sass-logo.png" alt="Sass JS" title="Framework Sass JS">
                        <h1>Sass CSS</h1>
                        <p class="tagline">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae saepe dolor quo porro</p>
                    </article>

                     <article>
                        <img src="resources/assets/img/knockoutjs.png" alt="Knockout JS" title="Framework Knockout JS">
                        <h1>Knockout JS</h1>
                        <p class="tagline">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae saepe dolor quo porro</p>
                    </article>

                     <article>
                        <img src="resources/assets/img/nodejs.png" alt="Node JS" title="Framework Node JS">
                        <h1>Node JS</h1>
                        <p class="tagline">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae saepe dolor quo porro</p>
                    </article>

                     <article>
                        <img src="resources/assets/img/webpack-javascript-logo.png" alt="WebPack JS" title="Framework WebPack JS">
                        <h1>WebPack</h1>
                        <p class="tagline">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae saepe dolor quo porro</p>
                    </article>

                     <article>
                        <img src="resources/assets/img/vuejs.png" alt="Vue JS" title="Framework Vue JS">
                        <h1>Vue JS</h1>
                        <p class="tagline">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae saepe dolor quo porro</p>
                    </article>

                </div>
            </div>
        </section>



        <!-- -------- SECAO TEMÁTICA ---------->

        <section class="container">
            <div class="content">
                <div class="ses_title">
                    <h1>Ficha Técnica</h1>
                    <p class="tagline">Sabia Mais sobre o conteúdo</p>

                </div>

                <article>
                    <h1>Temo em Aula:
                        <b>23h</b>
                    </h1>
                </article>
                <article>
                    <h1>Certificado de :
                        <b>230h</b>
                    </h1>
                </article>
                <article>
                    <h1>Módulos:
                        <b>8</b>
                    </h1>
                </article>
                <article>
                    <h1>Vídeo Aulas:
                        <b>50</b>
                    </h1>
                </article>
                <div class="clear"></div>
            </div>
        </section>

        <!-- retormada e conversão -->
        <article class="container bg-gray">
            <div class="content">
                <header>
                    <h1>Faça parte da turma de HTML 5 Pro</h1>
                    <h2>Começe agora mesmo. O Curo é de
                        <mark>HTML Pro EAD</mark>
                    </h2>
                </header>

                <a href="#" title="Curso Work Series - HTML 5 do Jeito Certo" target="_blank">Curso Work Series - HTML 5 do Jeito Certo</a>
                <footer></footer>
                <div>Estudo garantido EAD</div>
                </footer>

                <div class="clear"></div>
            </div>
        </article>

    <!-- content visual -->
<div class="container"></div>
    <div class="content">
        <div class="clear"></div>
    </div>
</div>


/**
 *
 * Block comment
 *
 */


        <!-- CONTEUDO     -->
        <footer class="container bg-light">
            <section class="main_footer content">
                <h1 class="fontzero">Sobre HTML 5 Pro Treinamentos</h1>

                <nav class="main_nav">
                    <h1 class="title"> Mas sobre HTML5</h1>
                    <ul>
                        <li>
                            <a href="#apresentacao" title="Assista o vídeo de apresentação">Assista o Vídeo</a>
                        </li>
                        <li>
                            <a href="#apresentacao" title="Assista o vídeo de apresentação">Assista o Vídeo</a>
                        </li>
                        <li>
                            <a href="#apresentacao" title="Assista o vídeo de apresentação">Assista o Vídeo</a>
                        </li>

                    </ul>
                </nav>

                <article class="main_social">
                    <h1 class="title">HTML 5</h1>

                    <ul>
                        <li>
                            <a target="_blank" rel="nofollow" href="http://facebook.com" title="Assista o vídeo de apresentação">Facebook</a>
                        </li>
                        <li>
                            <a target="_blank" rel="nofollow" href="http://twitter.com" title="Assista o vídeo de apresentação">Twitter</a>
                        </li>
                        <li>
                            <a target="_blank" rel="nofollow" href="http://youtube.com.br" title="Assista o vídeo de apresentação">Youtube</a>
                        </li>

                    </ul>
                </article>

                <article class="main_copy">
                    <h1 class="fontzero">HTML 5 Pro</h1>

                    <p>
                        <b>Plataform EAD:</b>
                        <a href="" title="Plataforma EAD HTML 5 Pro">Plataforma EAD HTML 5 Pro</a>
                    </p>
                    <p>
                        <b>E-mail:</b>
                        <a href="mailto:email@email.com" title="Envie um email">email@email.com</a>
                    </p>
                    <hr>
                    <p>&copy;
                        <?= date('Y');?> - Web Developer</p>
                </article>

                <div class="clear"></div>

            </section>

        </footer>

        <!-- inject:js -->
        <script src="public/assets/js/Modernizr/modernizr.custom.js"></script>
        <script src="public/assets/js/jquery/dist/jquery.mask.min.js"></script>
        <script src="public/assets/js/jquery/dist/jquery.min.js"></script>
        <script src="public/assets/js/html5shiv/dist/html5shiv.min.js"></script>
        <script src="public/assets/js/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- endinject -->

        <script>
            $(function () {



            })
        </script>
    </body>

    </html>