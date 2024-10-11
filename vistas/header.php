
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"> </script>
</head>
<body>
<header class="HeaderPrincipal">
        <div class="HeaderPrincipal--logo">
            <div class="HeaderPrincipal--logo1 comun">
                <a href="vistaalumno.php"><center><img src="img/DATE CORP new logo.png" alt="Logo de la empresa"></center></a>
            </div>
            
        </div>
        <div class="Buscador">
            <input class="BuscadorInformacion" type="search" placeholder="Busqueda">
            <div class="botonbusqueda">
                <i class="fas fa-search"></i>
            </div>
        </div>
        <div class="HeaderPrincipal--Navegacion comun">
        <div class="boton-modal">
        <center><img class="Imagenprofile" src="img/icons8-account-64.png" alt="ImagenPerfil"></center>
        <div id="nombres23">
            
        <div id="aqui" for="btn-modal">
            
        </div>
        </div>
    </header>
    

    <!--FindelBoton-->
    <!--VentanaModal-->
    <input type="checkbox" id="btn-modal">
    <div class="container-modal">
        <div class="content-modal">
        <div class="usuario">
                    <div class="OpcionesUsuarioPerfil12">
                    <section id="Perfil12">
                        <button class="opciones">
                            <a href="./vistaperfilalum.php">Perfil</a>
                        </button>
                    </section>
                </div>
                <div class="OpcionesUsuarioAsesoriasAgendadas">
                    <section id="AsesoriasAgendadas">
                    <button class="agendadas">
                        <a href="./asesoriasagendadas.php">Asesorias Agendadas</a>
                    </button>
                    </section>
                </div>
                
                <div class="OpcionesUsuarioCerrarSesion">
                    <section id="CerrarSesion">
                    <form action="php/logout.php">
                        <button class="BotonCerrar" type="submit">Cerrar Sesion</button>
                    </form>
                    </section>
                </div>
            <div class="btn-cerrar">
                <label for="btn-modal">Cerrar</label>
                <div>
                    <label for="btn-modal" class="cerrar-modal"></label> 
                </div>
            </div>
        </div>
    </div>
    <!--FindeVentanaModal-->
    </div>
    <script src="js/opciones.js"></script>
    <script>
        $(document).ready(function(){
            $.ajax({
                url: 'vistas/cargarnombre.php',
                type: 'GET',
                success: function(response){
                    $('#nombres23 div').html(response);
                }
            });
        });
    </script>
</body>