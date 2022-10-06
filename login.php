<?php
    include("conexao.php");

    $email = $_POST["email"];
    $set_senha = password_hash( $_POST['senha'], PASSWORD_DEFAULT );

    $comando = $pdo->prepare("SELECT codUsuario, senha, tipo_cadastro FROM usuario WHERE email = :email");
        $comando->bindValue(":email", $email);
        $comando->execute();

        if($comando->rowCount()==1)
        {
            $resultado = $comando->fetch();

            if (password_verify( $_POST['senha'], $set_senha ) ){


                session_start();
                $_SESSION['codUsuario'] = $resultado['codUsuario'];
                $_SESSION['tipo_cadastro'] = $resultado['tipo_cadastro'];
                $_SESSION['loggedin'] = true;

                header("location: home.php");


            }else{
                echo("Login ou senha incorretos!");
            }
            
        }else{
            echo("Login ou senha incorreto!");
        }

        unset($comando);
        unset($pdo)

?>