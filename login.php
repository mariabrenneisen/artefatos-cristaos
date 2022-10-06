<?php
    include("conexao.php");

    $email = $_POST["email"];
    $set_senha = ($_POST["senha"]);

    $comando = $pdo->prepare("SELECT codUsuario, senha, tipo_cadastro FROM usuario WHERE email = :email");
        $comando->bindValue(":email", $email);
        $comando->execute();

        if($comando->rowCount()==1)
        {
            $resultado = $comando->fetch();

            if($resultado['senha'] == MD5($set_senha)){
                session_start();
                $_SESSION['codUsuario'] = $resultado['codUsuario'];
                $_SESSION['tipo_cadastro'] = $resultado['tipo_cadastro'];
                $_SESSION['loggedin'] = true;

                if ($resultado['tipo_cadastro'] == 1) {

                    header("location: Admin.html");
                    }
                    else
                    {
                        header("location: home.php");
                    }


            }else{
                echo("Email ou senha incorretos! - aquiii");
            }
            
        }else{
            echo("Email ou senha incorreto!");
        }

        unset($comando);
        unset($pdo)
?>
