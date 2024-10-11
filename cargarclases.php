<?php
$servidor="localhost";
$usuario="root";
$password="";
$base="citas_tutorias";
$cone= new mysqli($servidor,$usuario,$password,$base);

if($cone->connect_error){
    die("ConexionExitosa".$cone->connect_error);
}
$sql= "SELECT * FROM CURSOS2";
$result =$cone->query($sql);
if($result->num_rows > 0){
    while($row = $result->Fetch_assoc()){
        echo"
        <div>
                <!--La etiqueta lazy nos ayuda a que cuando el usuario llegue a esa imagen es cuando se carga esa imagen-->
                <!--Esto viene bien por la pagina por temas de optimizacion de recursos-->
                <!--Osea que la pagina cargue mas rapido-->
                <img loading='lazy' src='{$row['imagen']}' alt='{$row['numerocurso']}'>
                <div class='cursosflex'>
                    <div>
                        <h3>{$row['nombre']}</h3>
                    </div>
                    <div class='BotonInscribirse'>
                        <button class='BotonInscribirseInput' type='button' id='BotonNotificacion'><a href='{$row['enlacecurso']}'>Ver</a></button>
                    </div>
                </div>
               
            </div>
        ";
    }
}else{
    echo"<tr><td colspan='7'>No hay usuarios</td></tr>";
}
$cone->close();
?>