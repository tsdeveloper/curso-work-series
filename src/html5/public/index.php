<!DOCTYPE html>
<?php
define('BASE', 'http://work-series-html5.test:8081');
?>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Curso Work Series - HTML 5 do Jeito Certo</title>

        <link rel="shortcut icon" href="<?= BASE; ?>/img/html5-logo.ico" />


        <!--[if lt IE 9]>
    <script src="./bower_components/html5shiv/dist/html5shiv.min.js"></script>
    <script src="./bower_components/modernizr/modernizr.custom.js"></script>
    <![endif]-->

    <link href="styles.css" rel="stylesheet"></head>

    <body>


    <header class="container bg-gray">
            <div class="content">

                <h1 class="main_logo fl-left fontzero">
                    <a class='radius' title="home" href="">Curso Work Series - HTML 5 do Jeito Certo</a>
                </h1>

                <ul class="main_nav fl-right">
                    <li>
                        <a href="<?= BASE; ?>/htm5-semnatico" title="Html5 semântico">Semântica</a>

                    </li>

                    <li>
                        <a href="<?= BASE; ?>/estilo-com-oocss" title="Estilo Produtivo com OOCSS">OOCSS</a>
                    </li>
                    <li>
                        <a href="<?= BASE; ?>/formularios-com-html5" title="Formulários com HTML5">Forms</a>
                    </li>
                    <li>
                        <a href="<?= BASE; ?>/audio-e-video" title="Áudio e Vídeo na Web">Mídia</a>
                    </li>
                    <li>
                        <a href="<?= BASE; ?>/gelocation-e-storage" title="Geolocation e HTML Storage">API's</a>
                    </li>
                    <li>
                        <a href="<?= BASE; ?>/micro-dados" title="Distribuição com Micro Dados">Micro Dados</a>
                    </li>
                    <li>
                        <a href="<?= BASE; ?>/sobre-curso" class="btn btn-green radius boxshadow" title="Sobre o Curso">Curso</a>
                    </li>

                </ul>

                <div class="clear"></div>
            </div>
        </header>


        <!-- conteudo -->
        <!-- bloco de vídeo -->
        <article class="container">
            <div class="content">
                <header>
                    <hgroup class="sectiontitle">
                        <h1>Conheça o Curso CSS Layout</h1>
                        <h2>Aprsentação Curso
                            <mark>HTML 5 Pro</mark>
                        </h2>
                    </hgroup>

                </header>

                <!-- VIDEO -->
                <video class="video video-large main_video video-shadow" src="<?= BASE; ?>/midias/apresentacao.mp4" width="400" controls></video>
                <aside class="al-center">
                    <h1>
                        <a href="#" class="btn btn-blue radius" title="Buy HTML 5 Pro" target="_blank"> Buy</a> HTML 5 Pro</h1>
                </aside>
                <!-- VIDEO -->
                <div class="clear"></div>

            </div>

            <footer class="bg-green">
                <section class="content">
                    <h1>Veja alguMais aulas do Curso</h1>

                    <article >
                        <div class="thumb">
                            <div class="video_play"></div>
                            <img class="angular" alt="Angular JS" title="Framework Angular JS">

                        </div>
                        <h1>Angular JS</h1>
                    </article>

                    <article>
                        <div class="thumb">
                            <div class="video_play"></div>
                            <img class="node"  alt="Node JS" title="Framework Node JS">

                        </div>
                        <h1>Node JS</h1>
                    </article>


                    <article>
                        <div class="thumb">
                            <div class="video_play"></div>
                            <img class="sass"  alt="Sass JS" title="Framework Sass JS">

                        </div>
                        <h1>SASS CSS</h1>
                    </article>


                    <article>
                        <div class="thumb">
                            <div class="video_play"></div>
                            <img class="bower" alt="Bower JS" title="Framework Bower JS">

                        </div>
                        <h1>Bower JS</h1>
                    </article>
                    <div class="clear"></div>
                </section>
            </footer>
        </article>

        <!-- seção relacional -->
        <section class="container bg-orange">
            <!-- container do title -->
            <div class="content">
                <hgroup>
                    <h1>Conheça as Tecnologias JS e CSS</h1>
                    <h2>Sobre o Curso HTML5 Pro</h2>
                </hgroup>
                <div class="clear"></div>
            </div>

            <!-- container dos artigos -->
            <div class="container bg-body">

                <div class="content">
                    <article>
                        <img class="angular"  alt="Angular JS" title="Framework Angular JS">
                        <h1>Angular JS</h1>
                        <p class="tagline">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae saepe dolor quo porro</p>
                    </article>
                    <article>
                        <img class="bower" alt="Bower JS" title="Framework Bower JS">
                        <h1>Bower JS</h1>
                        <p class="tagline">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae saepe dolor quo porro</p>
                    </article>

                    <article>
                        <img class="sass" alt="Sass JS" title="Framework Sass JS">
                        <h1>Sass CSS</h1>
                        <p class="tagline">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae saepe dolor quo porro</p>
                    </article>

                    <article>
                        <img class="knockout" alt="Knockout JS" title="Framework Knockout JS">
                        <h1>Knockout JS</h1>
                        <p class="tagline">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae saepe dolor quo porro</p>
                    </article>

                    <article>
                        <img class="node" alt="Node JS" title="Framework Node JS">
                        <h1>Node JS</h1>
                        <p class="tagline">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae saepe dolor quo porro</p>
                    </article>

                    <article>
                        <img class="webpack" alt="WebPack JS" title="Framework WebPack JS">
                        <h1>WebPack</h1>
                        <p class="tagline">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae saepe dolor quo porro</p>
                    </article>

                    <article>
                        <img class="vue" alt="Vue JS" title="Framework Vue JS">
                        <h1>Vue JS</h1>
                        <p class="tagline">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae saepe dolor quo porro</p>
                    </article>

                </div>
            </div>
        </section>



        <!--  secao temática -->

        <section class="container bg-blue-light">
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
        <article class="container bg-orange">
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
        <div class="container">
            <div class="content">
                CURSO HTML PRO
                <div class="clear"></div>
            </div>
        </div>

        <!-- conteudo     -->
        <footer class="container bg-light">
            <section class="main_footer content">
                <h1 class="fontzero ">Sobre HTML 5 Pro Treinamentos</h1>

                <nav class="box box-medium">
                    <h1 class="title font-bold"> Mais sobre HTML5</h1>
                    <ul>
                        <li>
                            <a class="shorticon shorticon-section" href="#apresentacao" title="Assista o vídeo de apresentação">Assista o Vídeo</a>
                        </li>
                        <li>
                            <a class="shorticon shorticon-section" href="#apresentacao" title="Assista o vídeo de apresentação">Assista o Vídeo</a>
                        </li>
                        <li>
                            <a class="shorticon shorticon-section" href="#apresentacao" title="Assista o vídeo de apresentação">Assista o Vídeo</a>
                        </li>

                    </ul>
                </nav>

                <article class="box box-medium">
                    <h1 class="title font-bold">HTML 5</h1>
                    <ul>
                        <li>
                            <a class="shorticon shorticon-facebook" target="_blank" rel="nofollow" href="http://facebook.com" title="Assista o vídeo de apresentação">Facebook</a>
                        </li>
                        <li>
                            <a class="shorticon shorticon-twitter" target="_blank" rel="nofollow" href="http://twitter.com" title="Assista o vídeo de apresentação">Twitter</a>
                        </li>
                        <li>
                            <a class="shorticon shorticon-google-plus" target="_blank" rel="nofollow" href="http://youtube.com.br" title="Assista o vídeo de apresentação">Youtube</a>
                        </li>


                    </ul>
                </article>

                <article class="main_ead box box-medium last">
                    <h1 class="fontzero">HTML 5 Pro</h1>

                    <p class="shorticon shorticon-config">
                        <b>Plataform EAD:</b>
                        <a href="" title="Plataforma EAD HTML 5 Pro">Plataforma EAD HTML 5 Pro</a>
                    </p>
                    <p class="shorticon shorticon-email">
                        <b>E-mail:</b>
                        <a href="mailto:email@email.com" title="Envie um email">email@email.com</a>
                    </p>
                    <hr>
                    <p class="plast">
                        &copy;
                        <?= date('Y'); ?> - Web Developer
                    </p>
                </article>

                <div class="clear"></div>

            </section>

        </footer>



    <script type="text/javascript" src="main.bundle.js"></script></body>

    </html>