<?php
    include("conexao.php");

    $email = $_POST["email"];
    $set_senha = ($_POST["senha"]);

    $comando = $pdo->prepare("SELECT codUsuario, senha, perm_admin FROM usuario WHERE email = :email");
        $comando->bindValue(":email", $email);
        $comando->execute();

        if($comando->rowCount()==1)
        {
            $resultado = $comando->fetch();

            if($resultado['senha'] == MD5($set_senha)){
                header("location: home.php");

                session_start();
                $_SESSION['codUsuario'] = $resultado['codUsuario'];
                $_SESSION['perm_admin'] = $resultado['perm_admin'];
                $_SESSION['loggedin'] = true;


            }else{
                echo("Email ou senha incorretos!");
            }
            
        }else{
            echo("Email ou senha incorreto!");
        }

        unset($comando);
        unset($pdo)

?>