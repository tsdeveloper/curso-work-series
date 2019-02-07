<!DOCTYPE html>
<?php
define('BASE', 'http://work-series-html5.test:8081');
?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Curso Work Series - HTML 5 do Jeito Certo</title>

    <link rel="shortcut icon" href="<?= BASE; ?>/img/html5-logo.ico">
    <!-- start:css -->
    <link rel="stylesheet" href="styles.css">
    <!-- end:css -->
    <!-- start:bundle-time -->
    <!-- end:bundle-time -->

    <!--[if lt IE 9]>
    <script src="./bower_components/html5shiv/dist/html5shiv.min.js"></script>
    <script src="./bower_components/modernizr/modernizr.custom.js"></script>
    <![endif]-->

<link href="styles.css?dedd103549beb5513558" rel="stylesheet"></head>

<body>

    <header class="container bg-gray">
        <div class="content">

            <h1 class="main_logo fl-left fontzero">
                <a class="radius-default" title="home" href="">Curso Work Series - HTML 5 do Jeito Certo</a>
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
                    <a href="<?= BASE; ?>/sobre-curso" class="btn btn-green radius-default boxshadow" title="Sobre o Curso">Curso</a>
                </li>

            </ul>

            <div class="clear"></div>
        </div>
    </header>


    <!-- conteudo -->
    <!-- bloco de vídeo -->
    <article class="container">
        <div class="content">
            <header class="sectiontitle">
                <!-- <hgroup class="sectiontitle"> -->
                    <h1>Conheça o Curso CSS Layout</h1>
                    <p class="tagline">Aprsentação Curso
                        <mark>HTML 5 Pro</mark>
                    </p>
                <!-- </hgroup> -->

            </header>

            <!-- VIDEO -->
            <video class="vga vga-large main_vga animation animation_scale" src="<?= BASE; ?>/midias/apresentacao.mp4" width="400" controls></video>
            <aside class="al-center">
                <h1>
                    <a href="#" class="btn btn-blue radius-default" title="Buy HTML 5 Pro" target="_blank"> Buy</a> HTML 5 Pro</h1>
            </aside>
            <!-- VIDEO -->
            <div class="clear"></div>

        </div>

        <footer class="bg-green">
            <section class="content main_vgas" style="padding-bottom:10px">
                <h1>Veja algumas aulas do Curso</h1>

                <article class="box box-small">
                    <div class="thumb">
                        <div class="video_play"></div>
                        <img class="angular" alt="Angular JS" title="Framework Angular JS">

                    </div>
                    <h1 class="box_vga_title">Angular JS</h1>
                </article>

                <article class="box box-small">
                    <div class="thumb">
                        <div class="video_play"></div>
                        <img class="node" alt="Node JS" title="Framework Node JS">

                    </div>
                    <h1 class="box_vga_title">Node JS</h1>
                </article>


                <article class="box box-small">
                    <div class="thumb">
                        <div class="video_play"></div>
                        <img class="sass" alt="Sass JS" title="Framework Sass JS">

                    </div>
                    <h1 class="box_vga_title">SASS CSS</h1>
                </article>


                <article class="box box-small last">
                    <div class="thumb">
                        <div class="video_play"></div>
                        <img class="bower" alt="Bower JS" title="Framework Bower JS">

                    </div>
                    <h1 class="box_vga_title">Bower JS</h1>
                </article>


                <div class="clear"></div>
            </section>
        </footer>
    </article>

    <!-- seção relacional -->
    <section class="container bg-orange">
        <!-- container do title -->
        <div class="content sectiontitle sectiontitle-nomargin">
            <!-- <hgroup class="sectiontitle sectiontitle-nomargin"> -->
                <h1>Conheça as Tecnologias JS e CSS</h1>
                <p class="tagline">Sobre o Curso HTML5 Pro</p>
            <!-- </hgroup> -->
            <div class="clear"></div>
        </div>

        <!-- container dos artigos -->
        <div class="container bg-body">

            <div class="content" style="padding:10px">
                <article class="main_tec_item box box-small al-center animation animation_scale radius-default radius-small radius-smallradius-small">
                    <img class="angular" alt="Angular JS" title="Framework Angular JS">
                    <h1>Angular JS</h1>
                    <p class="tagline">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae saepe dolor
                        quo porro</p>
                </article>

                <article class="main_tec_item box box-small al-center animation animation_scale radius-default radius-small">
                    <img class="bower" alt="Bower JS" title="Framework Bower JS">
                    <h1>Bower JS</h1>
                    <p class="tagline">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae saepe dolor
                        quo porro</p>
                </article>

                <article class="main_tec_item box box-small al-center animation animation_scale radius-default radius-small">
                    <img class="sass" alt="Sass JS" title="Framework Sass JS">
                    <h1>Sass CSS</h1>
                    <p class="tagline">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae saepe dolor
                        quo porro</p>
                </article>

                <article class="main_tec_item box box-small al-center animation animation_scale radius-default radius-small radius-small last">
                    <img class="knockout" alt="Knockout JS" title="Framework Knockout JS">
                    <h1>Knockout JS</h1>
                    <p class="tagline">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae saepe dolor
                        quo porro</p>
                </article>

                <div class="box-line"></div>

                <article class="main_tec_item box box-small al-center animation animation_scale radius-default radius-small">
                    <img class="node" alt="Node JS" title="Framework Node JS">
                    <h1>Node JS</h1>
                    <p class="tagline">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae saepe dolor
                        quo porro</p>
                </article>

                <article class="main_tec_item box box-small al-center animation animation_scale radius-default radius-small">
                    <img class="webpack" alt="WebPack JS" title="Framework WebPack JS">
                    <h1>WebPack</h1>
                    <p class="tagline">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae saepe dolor
                        quo porro</p>
                </article>

                <article class="main_tec_item box box-small al-center animation animation_scale radius-default radius-small">
                    <img class="vue" alt="Vue JS" title="Framework Vue JS">
                    <h1>Vue JS</h1>
                    <p class="tagline">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae saepe dolor
                        quo porro</p>
                </article>

                <div class="clear"></div>
            </div>

        </div>

    </section>



    <!--  secao temática -->

    <section class="container bg-blue-light">
        <div class="content">
            <div class="sectiontitle">
                <h1 class="shorticon shorticon-config ds-inblock">Ficha Técnica</h1>
                <p class="tagline">Sabia Mais sobre o conteúdo</p>

            </div>

            <article class="main_info box box-small">
                <h1>Temo em Aula:
                    <b>23h</b>
                </h1>
            </article>
            <article class="main_info box box-small">
                <h1>Certificado de :
                    <b>230h</b>
                </h1>
            </article>
            <article class="main_info box box-small">
                <h1>Módulos:
                    <b>8</b>
                </h1>
            </article>
            <article class="main_info box box-small last">
                <h1>Vídeo Aulas:
                    <b>50</b>
                </h1>
            </article>
            <div class="clear"></div>
        </div>
    </section>

    <!-- retormada e conversão -->
    <article class="container bg-blue">
        <div class="content content-page al-center">
            <header class="sectiontitle">
                <!-- <hgroup class="sectiontitle"> -->
                    <h1>Faça parte da turma de HTML 5 Pro</h1>
                    <p class="tagline">Começe agora mesmo. O Curo é de
                        <mark>HTML Pro EAD</mark>
                    </p>
                <!-- </hgroup> -->

            </header>

            <a class="btn btn-green btn-big radius-default" href="#" title="Curso Work Series - HTML 5 do Jeito Certo" target="_blank">
                Link do curso
            </a>

            <footer>
                <div class="main_chamada">
                    Curso Work Series - HTML 5 do Jeito Certo.Estudo garantido EAD.
                </div>
            </footer>

            <div class="clear"></div>
        </div>
    </article>

    <!-- content visual -->
    <div class="container">
        <div class="content content-page al-center fontsize2 fontligth">
            CURSO HTML PRO
            <div class="clear"></div>
        </div>
    </div>

    <!-- conteudo     -->
    <footer class="container bg-light">
        <section class="main_footer content">
            <h1 class="fontzero">Sobre HTML 5 Pro Treinamentos</h1>

            <nav class="box box-medium">
                <h1 class="title font-bold"> Mais sobre HTML5</h1>
                <ul>
                    <li>
                        <a class="shorticon shorticon-section" href="#apresentacao" title="Assista o vídeo de apresentação">Assista
                            o Vídeo</a>
                    </li>
                    <li>
                        <a class="shorticon shorticon-section" href="#apresentacao" title="Assista o vídeo de apresentação">Assista
                            o Vídeo</a>
                    </li>
                    <li>
                        <a class="shorticon shorticon-section" href="#apresentacao" title="Assista o vídeo de apresentação">Assista
                            o Vídeo</a>
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


<script src="vendor/jquery/dist/jquery.min.js"></script><script src="app.24ad80e9dab1b926e4a1.js?dedd103549beb5513558"></script></body>

</html>