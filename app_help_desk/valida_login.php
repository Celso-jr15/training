<?php
    $usuario_autenticado = false;

    $usuarios_app = array(
        array('email' => '1@gmail.com', 'password' => '123'),
        array('email' => '2@gmail.com', 'password' => '456'),
        array('email' => '3@gmail.com', 'password' => '789'),
    );


    foreach($usuarios_app as $user) {
        if($user['email'] == $_POST['email'] && $user['password'] == $_POST['password'] ){
            $usuario_autenticado = true;
        }   
    }

    if($usuario_autenticado){
        echo 'Usuário Autenticado';
    }else {
       header('location: index.php?login=erro_login');
       // echo "Usuário NÃO Autenticado";
    }

    //print_r($_POST);




?>