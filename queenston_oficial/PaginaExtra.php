<!DOCTYPE html>

<html>
    <head>
      <?php
      include_once './head.php';
        ?> 
    </head>
    <body>
    <?php
        include_once './topo.php';
        ?> 
          <div id="texto">
            <p> <b>A empresa Queenston está disponibilizando uma série de cursos
                básicos onlines da área da informática,confira abaixo a lista de cursos
                disponíveis.</b>
            </p>
         </div>
        <div class="imagens2">
            <img id="basica"src="imagem/informatica4.jpg"/>  
            </div>
       
            <div id="texto1">
                <p> <b> Cursos Disponíveis:</b></p> </div>
                <div id="texto2">
                      <p>  Montagem e manutençao de computadores</p>
                <p> Introdução a redes de computadores</p>
                <p> Introdução à linguagem de programação</p>
                <p> Fundamentos de sistemas operacionais</p>
               <p> Fundamentos de internet</p>
                <p> Editores de apresentação eletrônica</p>
                <p> Edição de textos</p>
            <p>   Desenvolvimento de páginas da internet</p>
               <p>  Conceitos de programação</p>
               <p> Conceito de banco de dados</p>
                </div>   
              
            
        
        <center>  
            <link href=" http://localhost/Queenston/ContatoConosco.php" rel="stylesheet"> 
            <button class="botao" type="submit" name="submit" onclick="alert('Produto encomendado com sucesso')">Acesso gratuito</button>
        </center>
         <?php
        include_once './rodape.php';
        ?>
    </body>
</html>
