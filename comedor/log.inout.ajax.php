<?php
session_start();
if ( !isset($_SESSION['username']) && !isset($_SESSION['userid']) ){
    if ( @$idcnx = @mysql_connect('localhost','root','') ){
             
        if ( @mysql_select_db('presupuesto',$idcnx) ){
                 
            $sql = 'SELECT user,passwd,id FROM ajaxusers WHERE email="' . $_POST['login_username']. '" && passwd="' . $_POST['login_userpass'] . '"';

            if ( @$res = @mysql_query($sql) ){
                if ( @mysql_num_rows($res)  > 0 ){
                         
                    $user = @mysql_fetch_array($res);

                    //var_dump($user); exit;
                         
                    $_SESSION['username']   = $user['user'];
                    $_SESSION['userid'] = $user['id'];
                    echo 1;
                         
                 }
                else
                    echo 0;
            }
            else
                echo 0;
                 
                 
        }
             
        mysql_close($idcnx);
    }
    else
        echo 0;
}
else{
    echo 0;
    }
?>