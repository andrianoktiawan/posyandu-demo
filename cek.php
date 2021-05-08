<?php
session_start();

if(isset($_SESSION['log'])){

}else{
    header('location:login.php');
}

?>