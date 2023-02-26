<!DOCTYPE html> 
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv= "X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- incluimos bootsatrap en css y java-->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" >
    <link rel="stylesheet" href="css.css" type="text/css">
    <script type="text/javascript" src="perfil.js" ></script>
    <title>Bienvenido</title>    
</head>

<body>


    <header class="titulo">
        <h1 > Has encontrado una mascota?</h1>
    </header>

    <?php 
 include "crearUsuario.php";
include "nav.php";
?>   

    
     <!--FORM CREAR USUARIO BOOTSTRAP
        LO MANDAMOS A LOGIN DONDE HACEMOS LAS OPERACIONES,
        ASI LOS DATOS DE LAS VARIABLES NO DAN ERRORES -->
      
        <main>
            <?php
            if(empty($_COOKIE['datos'])){
?>
            
            <div class="formUsuario">
                <p class="cuadro">Estás accediendo como visitante.<br> Para publicar pulsa <a class="link" href="encontrado.php">Loggin </a>  o crea una cuenta</p>

            <form action="index.php" method="post">
                <p class="text-black " >Crea un usuario:</p>
                <div class="input-group mb-2 bs-dark">
                    <input type="text" name="crearNombre" placeholder="Nombre" class="form-control  "
                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-2">
                    <input type="text" name="crearApellido" placeholder="Apellido" class="form-control"
                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-2">
                    <input require type="text" name="crearCorreo" placeholder="Introduce Email" class="form-control  "
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-2">
                    <input type="text" name="crearPw" placeholder="Contraseña" class="form-control"
                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-2">
                    <label>Eres una Protectora? <select name="protectora"></label>
                    <option value="si">Si</option>
                    <option selected value="no">No</option>
                    </select>
                </div>
                <div class="input-group mb-2">
                    <input type="text" name="nombreP" placeholder="Nombre de la protectora" class="form-control"
                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <button type="submit" name="submitCrear" class="btn btn-primary">Crear Usuario</button>
            </form>
            </div>    
            <?php
            }
        ?>
       
        <!--CREAR IMAGENES RANDOM??
        PONER FOTOS MAS ANTIGUAS, HREF A PERFIL ANIMAL o persona??-->
        <div class="imagenes">
           
            <p> Si estás buscando a tu mascota perdida, o quieres ayudar, aquí podrás contactar con Asociaciones y personas
                que también quieren colaborar.<br>               
            <b>A continuación verás imágenes de las mascotas que más tiempo llevan esperando familia en nuestra web</b></p>

            <div class="imagen">
                <div class="card" style="width: 13rem;">
                    <img src="#" class="card-img-top" alt="...">
        
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go </a>
                    </div>
                </div>        
            </div>
            <div class="imagen">
                <div class="card" style="width: 13rem;">
                    <img src="#" class="card-img-top" alt="...">
        
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go</a>
                    </div>
                </div>                
            </div>
                <div class="imagen">
                    <div class="card" style="width: 13rem;">
                        <img src="#" class="card-img-top" alt="...">
            
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go</a>
                        </div>
                    </div>            
                </div>
                <div class="imagen">
                    <div class="card" style="width: 13rem;">
                        <img src="#" class="card-img-top" alt="...">
            
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go</a>
                        </div>
                    </div>            
                </div>
                <div class="imagen">
                    <div class="card" style="width: 13rem;">
                        <img src="#" class="card-img-top" alt="...">
            
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go</a>
                        </div>
                      </div>
                    </div>
                    <div class="imagen">
                    <div class="card" style="width: 13rem;">
                        <img src="#" class="card-img-top" alt="...">
            
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go</a>
                        </div>
                    </div>            
                </div>
                <div class="imagen">
                    <div class="card" style="width: 13rem;">
                        <img src="#" class="card-img-top" alt="...">
            
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go</a>
                        </div>
                    </div>
                </div> 
                <div class="imagen">
                    <div class="card" style="width: 13rem;">
                        <img src="#" class="card-img-top" alt="...">
            
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go</a>
                        </div>
                    </div>            
                </div>
                <div class="imagen">
                    <div class="card" style="width: 13rem;">
                        <img src="#" class="card-img-top" alt="...">
            
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go</a>
                        </div>
                    </div>            
                </div>
            
        </div>
    </main>

   
    

    <script src="js/bootstrap.min.js"></script>
    
</body>
 <!--FOOTER BOOTSTRAP (en linea)-->
<footer id="footer" class="bg-body-tertiary"  >    
    <div class="container-fluid">    
        <a href="#"> Contacto </a>    
        <a href="#"> Somos</a>
    </div>   
</footer>




</html>
