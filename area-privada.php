<?php
ob_start();
session_start();
if(!isset($_SESSION['id_usuario']))
{
header("location: entrar.php");
exit;
}?>

<head>
    <link rel="shortcut icon" href="imagens/log.png" type="image x-icon">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"content="Em uma manhã do ano passado, por essa  mesma época, um cronista que ainda não escrevia semanalmente acordou. 
      As visitas da família rondavam pelo terreiro, estavam hospedadas em uma casa vizinha.">
    <meta name="author" content="Anderson Lietz">
    <meta name="robots" content="index,follow">
    <meta property="og:type" content="article" />
    <link rel="canonical" href="https://vacilouviroucronica.com/meus-pesames.php" />
    <meta property="og:site_name" content="Vacilou, virou Crônica! | O que vacila, vira Crônica!" />
    <meta property="og:url" content="https://vacilouviroucronica.com/meus-pesames.php" />

<title> Biblioteca | Vacilou, virou Crônica!</title>
</head>
<body>
<header>
<?php
include "header.php";
?>
</header>

              <main>
                  
              <article>


<h2>Seja bem vindo(a) há Biblioteca!<h2>
    <a href="sair.php"><h3>Sair</h3></a>




    
  </article><!--fim da div class crônica-->
  <aside>
  <?php 
  include "asidecronica.php";
  ?>
</aside>
  </main><!--fim da div geral-->
<?php
include "footer.php";
?>
</body>
</html>