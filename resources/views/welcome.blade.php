<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: white;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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

            .top-left {

                position: absolute;
                top: 10px;
                left: 200px;

            }

            .content {
                text-align: center;
                font-size: 50px;
                color: black;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 25px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }



            *{

                margin: 0;
                padding: 0;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }

           header {
               width: 100%;
           }
           .navegacion{
               width: 1500px;
               margin: 30px auto;
               background: purple;
           }

           .navegacion ul{
               list-style: none;
           }
           .menu > li {

               position: relative;
               display: inline-block;
           }
           .menu > li > a{
               display: block;
               padding: 15px 20px;
               color: black;
               font-family: 'Open sans';
               text-decoration: none;
           }

           .menu li a:hover{
               color: yellow;
               transition: all .3s;

           }

        </style>
    </head>
    <body>
            
            <header>
                <nav class="navegacion">
                    <ul class="menu">
                        <li><a href="{{ url('/') }}">Inicio</a></li>
                        <li><a href="{{ url('/about') }}">A cerca de </a></li>
                        <li><a href="{{ url('/contact') }}">Contacto</a></li>
                    </ul>
            </header>


           <div class="content">
                

               
           
           </div>


           
    </body>
</html>