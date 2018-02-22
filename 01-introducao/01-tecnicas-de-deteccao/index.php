<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Curso Web Responsivo</title>

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

    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Work Series HTML5 do jeito Certo</h4>
        <hr>
        <p class="mb-0"></p>
    </div>

    <!-- inject:js -->

    <script src="public/assets/js/modernizr/modernizr.custom.js"></script>

    <script src="public/assets/js/html5shiv/dist/html5shiv.min.js"></script>

    <script src="public/assets/js/jquery/dist/jquery.min.js"></script>

    <script src="public/assets/js/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- endinject -->

    <script>
        $(function () {
            function teste(texto) {
                $('.mb-0').append(texto);

            }
            if (Modernizr.localstorage)
                teste('Active local storage offline<br/>')

            if (Modernizr.geolocation)
                teste('Active geolocation<br/>')

            if (Modernizr.input.placeholder)
                teste('Active placeholder<br/>')

            if (Modernizr.inputtypes.date)
                teste('Active inputtypes date<br/>')
            else
                teste('No Active inputtypes date<br/>')

        })
    </script>
</body>

</html>