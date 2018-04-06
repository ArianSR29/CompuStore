<?php
session_start();
include 'conexion_mysqli.php';
$mail = $_POST['tb-mail'];
$pass = $_POST['tb-password'];
if((!$mail) || (!$pass)){
    print "<script>alert('Usuario o Contraseña Incorrectos');</script>";
    print "<script> window.location='../index.php';</script>";
}else{
    //$password = md5($pass); 
    print "<script>alert('1')</script>";  
    $sql = mysqli_query("SELECT email, password FROM user WHERE email = '$mail' AND password = '$pass'");
    print "<script>alert('2')</script>";      
    $login_check = mysqli_num_rows($sql);
    print "<script>alert('3')</script>";      
    if($login_check > 0){
    print "<script>alert('4')</script>";          
        while($row = mysqli_fetch_array($sql)){
            foreach ($row as $key => $val){
                $$key = stripslashes( $val);
            }
  
            $_SESSION['mail'] = $mail;
            print "<script>alert('BIENVENIDO');</script>";            
            print "<script> window.location='../index.php';</script>";

        }
    }else{
        print "<script>alert('Usuario o Contraseña Incorrectos 2');</script>";
        print "<script> window.location='../index.php';</script>";
    }
}
mysqli_close($mysqli);
?>