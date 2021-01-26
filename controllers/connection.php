<?php 

$conn = new mysqli("localhost", "root", "", "loginphp");


function connect(){
    if ($conn->connect_errno) {
        return false;
    }else {
        return true;
    }
}

?>