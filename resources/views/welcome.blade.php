<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Prueba Post y Get</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/mdb.min.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
            <div class="content">
                <div class="title m-b-md">
                    Prueba Post y Get
                </div>
                <div class="container">
                    <div class="row"> 
                        <div class="col-lg-6">
                            <h5>Post con Laravel</h5>
                            <form action="prueba" method="post">
                                <p>
                                    <label for="nombre">
                                        Nombre
                                        <input type="text" name="nombre">
                                    </label>
                                </p>
                                <p>
                                    <label for="mensaje">
                                        Mensaje
                                        <input type="text" name="mensaje">
                                    </label>
                                </p>
                                <input type="submit" value="Enviar">
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <h5>Get con Laravel</h5>
                            <form action="prueba" method="get">
                                <p>
                                    <label for="nombre">
                                        Nombre
                                        <input type="text" name="nombre">
                                    </label>
                                </p>
                                <p>
                                    <label for="mensaje">
                                        Mensaje
                                        <input type="text" name="mensaje">
                                    </label>
                                </p>
                                <input type="submit" value="Enviar">
                            </form>
                        </div>
                    </div>
                    <hr style="border-top: 3px solid rgba(0,0,0,.1);">
                    <div class="row">
                        <div class="col-lg-4">
                            <h5>Post con Ajax</h5>
                            <p>
                                <label for="nombre">
                                    Nombre
                                    <input id="nombre" type="text" name="nombre">
                                </label>
                            </p>
                            <p>
                                <label for="mensaje">
                                    Mensaje
                                    <input id="mensaje" type="text" name="mensaje">
                                </label>
                            </p>
                            <input type="button" onclick="enviarMensaje()" value="Enviar">
                        </div>
                        <div class="col-lg-4">
                            <h5>Get con Ajax</h5>
                            <p>
                                <label for="nombre">
                                Nombre
                                <input id="obNombre" type="text" name="nombre">
                                </label>
                            </p>
                            <p>
                                <label for="mensaje">
                                Mensaje
                                <input id="obMensaje" type="text" name="mensaje">
                                </label>
                            </p>
                            <input type="button" onclick="obtenerMensaje()" value="Enviar">
                        </div>
                        <div class="col-lg-4">
                            <h5>Respuesta</h5>
                            <div id="respuesta">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/mdb.min.js"></script>
        <script type="text/javascript" src="js/prueba.js"></script>
    </body>
</html>
