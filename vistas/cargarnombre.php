<?php
session_start();
$servidor="localhost";
$usuario="root";
$password="";
$base="citas_tutorias";
$cone= new mysqli($servidor,$usuario,$password,$base);

if($cone->connect_error){
    die("ConexionExitosa".$cone->connect_error);
}

$username=$_SESSION['Usuario'];
$id= $_SESSION['id'];

$sql= "SELECT usuario from usuarios where id='$id'";
$result =$cone->query($sql);
if($result->num_rows > 0){
    while($row = $result->Fetch_assoc()){
        echo "<label id='aqui' for='btn-modal'>
        {$row['usuario']}
        </label>";
    }
}else{
    echo"<tr><td colspan='7'>No hay usuarios</td></tr>";
}
$cone->close();
?>