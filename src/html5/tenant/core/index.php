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

    </head>

    <body>


    <header class="container bg-gray">
            <div class="content">

                <h1 class="main_logo fl-left fontzero tc-font">
                    <a class='radius' title="home" href="">Tenant CORE</a>
                </h1>


             </div>
             </header>
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



    </body>

    </html>