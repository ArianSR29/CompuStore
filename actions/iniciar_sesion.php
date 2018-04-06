<?php
session_start();

include 'conexion_mysqli.php';
$mail = $_POST['tb-mail'];
$pass = $_POST['tb-password'];

if($sql = mysqli_query($mysqli, "SELECT email, password FROM user WHERE email = '$mail' AND password = '$pass' ")){     
    $login_check = mysqli_num_rows($sql);    
        if($login_check >=  1){        
            while($row = mysqli_fetch_array($sql)){
                foreach ($row as $key => $val){
                    $$key = stripslashes( $val);
                }
                $_SESSION['mail'] = $mail;
                print "<script>alert('BIENVENIDO');</script>";                       
                print "<script> window.location='../index2.php';</script>";
            }
        }else{
            print "<script>alert('Usuario o Contraseña Incorrectos 2');</script>";
            print "<script> window.location='../index.php';</script>";
        }
}
mysqli_close($mysqli);
?>