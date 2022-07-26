<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rodapé</title>
</head>
<body>
<hr>
<a href="index.php"><div class="btopo">Página Inicial</div></a>
<hr>

<div class="contato">
                      <div id="contato"></div>
                   
                      <section id="footer">
            <h2>Contato</h2>
              
                        <div id="links">
                                  <div class="blocos">
                                    <img src="imagens/email1.png" class="imagem">
                                    <a href="mailto:contato@vacilouviroucronica.com">
                                      <p>@e-mail</p></a>
                                    </div>
                          
                                      <div class="blocos">
                                      
                                      
                                        <img src="imagens/insta2.png" class="imagem">
                                        <a href="https://www.instagram.com/vacilouviroucronica">
                                          <p>@vacilouviroucronica</p></a>
                                      </div>
                          </div>
          </section>
                     </div>
                     <a href="index.php"><div class="btopo">Página Inicial</div></a>
                     <nav class="linksrodape">
                       <ul>
                         <li>
                            <a href="#">Política de Privacidade</a>
                        </li>
                        <li>
                            <a href="#">Termos de Uso</a>
                        </li>
                        <li>
                        <a rel="dofollow" href="desenvolvimento.php">Desenvolvimento</a>
                </li>
                      </ul>
                    </nav>
                    <div class="copy">&copy; 2021-2022 Vacilou, Virou Crônica! - Todos os direitos reservados. </div>
                    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
                    <script type="text/javascript" charset="utf-8">
var $z = jQuery.noConflict();
$z(document).ready(function(){
$z("#aumentar-fonte").click(function () {
var size = $z("#content p").css('font-size');

size = size.replace('px', '');
size = parseInt(size) + 2;

$z("#content p").animate({'font-size' : size + 'px'});
return false;
});

$z("#diminuir-fonte").click(function () {
var size = $z("#content p").css('font-size');

size = size.replace('px', '');
size = parseInt(size) - 2;

$z("#content p").animate({'font-size' : size + 'px'});
return false;
});
});

<script src="js/scripts.js"></script>
</body>
</html>