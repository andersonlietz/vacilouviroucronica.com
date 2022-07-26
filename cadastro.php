<?php 
    require_once 'CLASSES/usuarios.php';
    $u = new Usuario;
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="shortcut icon" href="imagens/log.png" type="image x-icon">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Vacilou, virou Crônica!</h1>
    <main><article>
    <h2>Cadastro</h2>
    <?php
//confirmar se o botão foi acionado
if(isset($_POST['nome'])){
$nome = addslashes($_POST['nome']);
$telefone = addslashes($_POST['telefone']);
$email = addslashes($_POST['email']);
$senha = addslashes($_POST['senha']);
$confirmarsenha = addslashes($_POST['confsenha']);

//confirmar se está tudo preenchido
if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarsenha))
{
    $u->conectar("vacilou1site_login","localhost","vacilou1site_vacilou1site","zQclIA2V5qs1");
    if($u->msgErro == "")//esta tudo ok
    {
        if($senha == $confirmarsenha){
            if($u->cadastrar($nome, $telefone, $email, $senha))
            { ?>
                    <div id="msg-sucesso">
                        Cadastrado com sucesso! Acesse para entrar.
            </div>
                    <?php
            }else{ ?>
                <div class="msg-erro">
                    Email já Cadastrado!
            </div>
                <?php
            }
        }else{ ?>
        <div class="msg-erro">
            Senha e Confirmar senha não correspondem.
        </div>
            <?php
        }
            
    }else{ ?>
    <div class="msg-erro">
        <?php echo "Erro: ".$u->$msgErro; ?>
    </div>
        <?php
    }
}else{ ?>
    <div class="msg-erro">
        Preencha todos os campos!
</div>
    <?php
}
}
?>
<form method="POST">
<input type="text" name="nome" placeholder="Nome Completo" maxlength="30">
<input type="text" name="telefone" placeholder="Telefone" maxlength="30">
<input type="email" name="email" placeholder="E-mail" maxlength="40">
<input type="password" name="senha" placeholder="Senha" maxlength="15">
<input type="password" name="confsenha" placeholder="Verificar Senha" maxlength="15">
<input type="submit" value="Cadastrar">
<a href="entrar.php">Já tem uma conta? <b>Entre!</b></a>
</form>

</article>
<aside>
    
</aside>
</main>
</body>
</html>