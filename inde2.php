<?php
include("conexionbd.php");
$user = "SELECT * from contacto ";




?>



<!DOCTYPE html>
<html lang="es">
<head>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CV Luis</title>
        <link rel="shortcut icon" href="cu.png" type="image/x-icon">
        <link rel="stylesheet" href="Estilo.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
        
       </head> 
    </head>
<header>
<body>

    <nav>
        <a href="#perfil">Perfil</a>
        <a href="#formación">Formación educativa </a>
        <a href="#experiencia">Experiencia laboral</a>
        <a href="#skills">Skills</a>
        <a href="#contacto">Area de contacto</a>
    </nav>
    <h1 class="titulo1">Perfil</h1> 
    <a name="perfil"></a>
    <section class="principal">



        <div>
            <img src="ima/luis.jpg"  alt=""  class="imagen-perfil">
        </div>
        
        <div class="personal">
       
            <p> <h3>Nombre:</h3>Luis Angel Barrientos Perez<br>
                <h3>Email</h3>Bpluis348@gmail.com<br>
                <h3>Número de contacto</h3>9212666044<br>
                <h3>Dirección</h3>Italia 201 B<br>
                Col. Benito Juárez sur 96580<br> 
                <h3>Municipío</h3>Coatzacoalcos<br>
                <h3>Perfil personal</h3>Me considero una persona entusiasta, proactiva y con capacidad de 
               resolver problemas de manera crítica y profesional.<br> Acostumbrado 
               a trabajar bajo presión y en la dirección de una microempresa.

            </p>
        </div>
        
        
         
        
      
        
   
    </section>
    


















    <div class="wave" style="height: 150px; overflow: hidden;">
        
        <svg viewBox="0 0 500 150" preserveAspectRatio="none"
            style="height: 100%; width: 100%;">
            <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                style="stroke: none; fill: #fff;">
            </path>
            
        </svg>        
    </div>

     
</header>
<main>





    <section>
    <a name="formación"></a>
    <h2 class="titulo">Formación educativa</h2>
            <div class="contenedor-información-educativa">
                <img src="ima/libro.png" alt="" class="imagen-conocimiento">
                <div class="contenido-textos">
                    <h3><span>1</span>Agosto 2015-Agosto 2018</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt veniam eius aspernatur ad
                        consequuntur aperiam minima sed dicta odit numquam sapiente quam eum, architecto animi pariatur,
                        velit doloribus laboriosam ut.</p>
                    <h3><span>2</span>Agosto 2018-Presente</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt veniam eius aspernatur ad
                        consequuntur aperiam minima sed dicta odit numquam sapiente quam eum, architecto animi pariatur,
                        velit doloribus laboriosam ut.</p>

                </div>
</section>



    
<section class="laboral">
<a name="experiencia"></a>
    <div class="contenedor">
        <h2 class="titulo">Experiencia laboral</h2>
       
        
    </div>
  
   <div class="linea-tiempo">
        <div class="momento">
          <h3>Marzo 2018 – mayo 2019</h3>
          <div class="descripcion">
            Administrador general 
            Jorge Barrientos Poixtan 
            Administración de los servicios de 
            transportes.
          </div>
        </div>
        <div class="momento">
          <h3>Agosto 2019- Presente </h3>
          <div class="descripcion">
            
            CEO
                    Luis Angel Barrientos Perez 
                     Dirección y administración de la 
                    prestación de los servicios de 
                    transportes.
          </div>
        
        </div>
      </div>
    </section>



    <section class="skills">
    <a name="skills"></a>
        <div class="contenedor">
            <h2 class="titulo">Skills</h2>
            <div class="servicio-cont">
                <div class="servicio-ind">
                    <img src="ima/java.png" alt="">
                    <h3>Uso de lenguaje java</h3>


                    <label for="file"> Nivel:</label>

                <progress id="file" max="100" value="70"> 70% </progress>

                   
                </div>
                <div class="servicio-ind">
                    <img src="ima/visual-studio.png" alt="">
                    <h3>Visual studio code</h3>
                    <label for="file"> Nivel:</label>

                <progress id="file" max="100" value="60"> 70% </progress>
                </div>



                <div class="servicio-ind">
                    <img src="ima/office.png" alt="">
                    <h3>Paquetría de office</h3>
                    <label for="file"> Nivel:</label>

                <progress id="file" max="100" value="60"> 70% </progress>
                </div>

                <div class="servicio-ind">
                    <img src="ima/uml.png" alt="">
                    <h3>Modelado UML</h3>
                    <label for="file"> Nivel:</label>

                <progress id="file" max="100" value="60"> 70% </progress>
                </div>

                <div class="servicio-ind">
                    <img src="ima/adobe.png" alt="">
                    <h3>Paquetría adobe</h3>
                    <label for="file"> Nivel:</label>

                <progress id="file" max="100" value="60"> 70% </progress>
                </div>


            </div>
        </div>
    </section>








 <section class="area">


    <h1 class="titu">Área de contacto</h1>

    <a name="contacto"></a>








    <form action="alta.php" method="post">	
        <input name="nombre" type="text" placeholder="Nombre" maxlength="30" pattern="[a-zA-Z0-9]+" required autofocus/>
        <input name="email" type="email" placeholder="Correo electrónico" required />	
        <input name="asunto" type="asunto" placeholder="asunto" required />	
        <input name="mensaje" type="mensaje" placeholder="mensaje" required />	
<button><type="submit" >Enviar</button>
</form>	


</section>







</main>

<footer>

  
	<strong>
        	COPPYRIGHT © 2021- LUIS ANGEL BARRIENTOS PEREZ	  
</strong>


</body>

</html> 