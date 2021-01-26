<?php 
require_once '../controllers/connection.php';
$name=$_POST['name'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$pass=$_POST['pass'];


 try {
     if(connect()){
    $query="INSERT INTO users (name_user, lastname_user, email, pass) VALUES ('$name', '$lastname', '$email', '$pass')";
    if($conn->query($query)){
        include("../views/login.php");
        ?>
        <br>
        <h1 class="message-sussesful">Se registro EXITOSAMENTE!</h1>
        <?php
    }else {
        die("Error al insertar datos");
    }
    mysqli_close($conn);
     }else {
         echo "No se puede conectar";
     }
    
 } catch (\Throwable $th) {
     echo "error".$th;
 }

?>