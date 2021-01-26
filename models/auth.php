<?php 
require_once '../controllers/connection.php';
session_start();
$email=$_POST['email'];
$pass=$_POST['pass'];


 try {
     if(connect()){
    $query="SELECT COUNT(*) AS kount FROM users WHERE email='$email' AND pass = '$pass'";
    $resulta = mysqli_query($conn, $query);
    $array = mysqli_fetch_array($resulta);
    if($array['kount']>0){
        header("location: ../views/home.php");
    }else {
        header("location: ../views/login.php");
    }
    mysqli_close($conn);
     }else {
         echo "No se puede conectar";
     }
    
 } catch (\Throwable $th) {
     echo "error".$th;
 }

?>