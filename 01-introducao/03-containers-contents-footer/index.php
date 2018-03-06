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

        <link rel="stylesheet" href="public/assets/css/bootstrap/dist/css/bootstrap.min.css">

        <!-- endinject -->

        <!--[if lt IE 9]>
    <script src="./bower_components/html5shiv/dist/html5shiv.min.js"></script>
    <script src="./bower_components/modernizr/modernizr.custom.js"></script>
    <![endif]-->

    </head>

    <body>

        <header class="header">
            <h1 class="main_logo">
                <a title="home" href="">Curso Work Series - HTML 5 do Jeito Certo</a>
            </h1>

            <ul class="main_nav">
                <li>
                    <a href="<?=BASE;?>/htm5-semnatico" title="Html5 semântico">Semântica</a>
                    
                </li>

                <li><a href="<?=BASE;?>/estilo-com-oocss" title="Estilo Produtivo com OOCSS">OOCSS</a></li>
                <li><a href="<?=BASE;?>/formularios-com-html5" title="Formulários com HTML5">Forms</a></li>
                <li><a href="<?=BASE;?>/audio-e-video" title="Áudio e Vídeo na Web">Mídia</a></li>
                <li><a href="<?=BASE;?>/gelocation-e-storage" title="Geolocation e HTML Storage">API's</a></li>
                <li><a href="<?=BASE;?>/micro-dados" title="Distribuição com Micro Dados">Micro Dados</a></li>
                <li><a href="<?=BASE;?>" title="Estilo Produtivo com OOCSS">Curso</a></li> 
            </ul>
        </header>


        <!-- CONTEUDO -->
        <footer class="main_footer">
            <section>
                <h1>Upsinde Treinamentos</h1>
            </section>
        </footer>

        <!-- inject:js -->
        <script src="public/assets/js/modernizr/modernizr.custom.js"></script>
        <script src="public/assets/js/html5shiv/dist/html5shiv.min.js"></script>
        <script src="public/assets/js/jquery/dist/jquery.mask.min.js"></script>
        <script src="public/assets/js/jquery/dist/jquery.min.js"></script>
        <script src="public/assets/js/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- endinject -->

        <script>
            $(function () {



            })
        </script>
    </body>

    </html>