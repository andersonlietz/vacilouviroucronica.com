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
    <title>Entrar</title>
</head>
<body>
    <h1>Vacilou, virou Crônica!</h1>
    <main><article>
    <h2>Entrar</h2>
    <?php 
 if(isset($_POST['email']))
 {
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    //confirmar se está tudo preenchido
    if(!empty($email) && !empty($senha))
{
    $u->conectar("vacilou1site_login","localhost","vacilou1site_vacilou1site","zQclIA2V5qs1");
    if($u->msgErro == "")//esta tudo ok
    {
    if($u->logar($email, $senha))
    { 
        header("location: area-privada.php");
    }
    else
    {
        ?>
        <div class="msg-erro">
        Email e/ou senha estão incorretos!
    </div>
        <?php
    }
    }
    ?>
    <div class="msg-erro">
   <?php echo "Erro:  ".$u->msgErro;
   ?>
</div>
<?php
}
else 
{
    ?>
    <div class="msg-erro">
    Preencha todos os campos!
</div>
    <?php
}
 }
?>
<form method="POST" >
<input type="e-mail" name="email" placeholder="E-mail">
<input type="password" name="senha" placeholder="Senha">
<input type="submit" value="ACESSAR">
<a href="cadastro.php">Ainda não é inscrito? <b>Cadastre-se!</b></a>
</form>
</article>
<aside>
    
</aside>
</main>
</body>
</html>