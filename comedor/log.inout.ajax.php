<?php
session_start();
if ( !isset($_SESSION['username']) && !isset($_SESSION['userid']) ){
    if ( @$idcnx = @mysql_connect('localhost','root','') ){
             
        if ( @mysql_select_db('comedor',$idcnx) ){
                 
            $sql = 'SELECT correo,contrasena,id FROM usuarios WHERE correo="' . $_POST['login_username']. '" && contrasena="' . $_POST['login_userpass'] . '"';

            if ( @$res = @mysql_query($sql) ){
                if ( @mysql_num_rows($res)  > 0 ){
                         
                    $user = @mysql_fetch_array($res);

                    //var_dump($user); exit;
                         
                    $_SESSION['username']   = $user['correo'];
                    $_SESSION['userid'] = $user['id'];
                    echo 1;
                         
                 }
                else
                    echo 2;
            }
            else
                echo 3;
                 
                 
        }
             
        mysql_close($idcnx);
    }
    else
        echo 4;
}
else{
    echo 5;
    }
?>