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
                font-size: 30px;
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

            .formulario{

                color: black;
                font-size: 35px;  
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

           /* para el fromulario */



                /* Importación de fuentes de google fonts */ 
                @import url(https://fonts.googleapis.com/css?family=Noto+Sans);


                body{
                height: 100%; 
                font-family: 'Noto Sans', sans-serif;
                background-color: white; 
                }


                .contact_form{  
                width: 460px; 
                height: auto;
                margin: 80px auto;
                border-radius: 10px;  
                padding-top: 30px;
                padding-bottom: 20px;  
                background-color: purple; 
                padding-left: 30px; 
                }


                input{
                background-color: #fbfbfb; 
                width: 408px; 
                height: 40px; 
                border-radius: 5px;  
                border-style: solid; 
                border-width: 1px; 
                border-color: #ab4493; 
                margin-top: 10px;  
                padding-left: 10px;
                margin-bottom: 20px; 
                }


                textarea{
                background-color: #fbfbfb; 
                width: 405px; 
                height: 150px; 
                border-radius: 5px;  
                border-style: solid; 
                border-width: 1px; 
                border-color: #ab4493; 
                margin-top: 10px;  
                padding-left: 10px;
                margin-bottom: 20px; 
                padding-top: 15px; 
                }


                label{
                display: block; 
                float: center;  
                }


                button{
                height: 45px; 
                padding-left: 5px;
                padding-right: 5px;   
                margin-bottom: 20px; 
                margin-top: 10px;   
                text-transform: uppercase;
                background-color: #ab4493; 
                border-color: #ab4493; 
                border-style: solid; 
                border-radius: 10px;  
                width: 420px;   
                cursor: pointer;
                }


                button p{
                color: #fff; 
                }


                span{
                color: #ab4493; 
                }


                .aviso{
                font-size: 13px;  
                color: #0e0e0e;  
                }


                h1{
                font-size: 39px;  
                text-align: letf; 
                padding-bottom: 20px; 
                color: white;
                }


                h3{
                font-size: 16px; 
                padding-bottom: 30px;
                color: #0e0e0e;   
                }


                p{
                font-size: 14px; 
                color: #0e0e0e; 
                }


                ::-webkit-input-placeholder {
                color: #a8a8a8;
                }


                ::-webkit-textarea-placeholder {
                color: #a8a8a8;
                }


                .formulario input:focus{
                outline:0;
                border: 1px solid #97d848;
                }


                .formulario textarea:focus{
                outline:0;
                border: 1px solid #97d848;
                }            


           /* Para el formulario */
        </style>
    </head>
    <body>
            
            <header>
                <nav class="navegacion">
                    <ul class="menu">
                        <li><a href="{{ url('/') }}">Inicio</a></li>
                        <li><a href="{{ url('/about') }}">A cerca de </a></li>
                        <li><a href="{{ url('/contact') }}">Contacto</a></li>
                        <li><a href="{{ url('/viviendas/create') }}"> Añadir viviendas</a></li>
                    </ul>
            </header>
            
            <div class="contact_form">

<div class="formulario">      
  <h1>Formulario de contacto</h1>
    <h3>Escríbenos y en breve los pondremos en contacto contigo</h3>


      <form action="submeter-formulario.php" method="post">       

        
            <p>
              <label for="nombre" class="colocar_nombre">Nombre
                <span class="obligatorio">*</span>
              </label>
                <input type="text" name="introducir_nombre" id="nombre" required="obligatorio" placeholder="Escribe tu nombre">
            </p>
          
            <p>
              <label for="email" class="colocar_email">Email
                <span class="obligatorio">*</span>
              </label>
                <input type="email" name="introducir_email" id="email" required="obligatorio" placeholder="Escribe tu Email">
            </p>
        
            <p>
              <label for="telefone" class="colocar_telefono">Teléfono
              </label>
                <input type="tel" name="introducir_telefono" id="telefono" placeholder="Escribe tu teléfono">
            </p>      
          
            <p>
              <label for="asunto" class="colocar_asunto">Asunto
                <span class="obligatorio">*</span>
              </label>
                <input type="text" name="introducir_asunto" id="assunto" required="obligatorio" placeholder="Escribe un asunto">
            </p>    
          
            <p>
              <label for="mensaje" class="colocar_mensaje">Mensaje
                <span class="obligatorio">*</span>
              </label>                     
                                <textarea name="introducir_mensaje" class="texto_mensaje" id="mensaje" required="obligatorio" placeholder="Deja aquí tu comentario..."></textarea> 
                            </p>                    
          
            <button type="submit" name="enviar_formulario" id="enviar"><p>Enviar</p></button>

            <p class="aviso">
              <span class="obligatorio"> * </span>los campos son obligatorios.
            </p>          
        
      </form>
</div>  
</div>

    </body>
</html>