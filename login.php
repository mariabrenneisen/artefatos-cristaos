<?php
    include("conexao.php");

    $login_usuario = $_POST["login_usuario"];
    $set_senha = $_POST["senha"];

    $comando = $pdo->prepare("SELECT pk_usuario, senha_usuario, is_adm_usuario FROM usuario WHERE login_usuario = :login_usuario");
        $comando->bindValue(":login_usuario", $login_usuario);
        $comando->execute();

        if($comando->rowCount()==1)
        {
            $resultado = $comando->fetch();

            if($resultado['senha'] == MD5($set_senha)){
                header("location:home.php");

                session_start();
                $_SESSION['pk_usuario'] = $resultado['pk_usuario'];
                $_SESSION['is_adm_usuario'] = $resultado['is_adm_usuario'];
                $_SESSION['loggedin'] = true;


            }else{
                echo("Login ou senha incorretos!");
            }
            
        }else{
            echo("Login ou senha incorreto!");
        }

        unset($comando);
        unset($pdo)

?>