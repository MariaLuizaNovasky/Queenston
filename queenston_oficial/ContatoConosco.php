<!DOCTYPE html>
<html>
    <head>
        <?php
        include_once './head.php';
        ?>
    </head>
    <body>
    <head>
        <?php
        include_once './topo.php';
        ?>
    </head>
    <form action="envio_email.php" method="post" id="fC">
            <fieldset class="grupo">
                <div class="campo">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" style="width: 300px;
                           "/>                    
                </div> 
                <div class="campo">
                    <label for="snome">Sobrenome:</label>
                    <input type="text" id="snome" name="snome" style="width: 300px;
                           "/>
                </div> 
            </fieldset>
            <fieldset class="grupo">               
                <div class="campo">
                    <label for="Email">E-mail:</label>
                    <input type="text" id="Email" name="Email" 
                           style="width: 600px;"/>
                </div>
                <div class="campo">
                    <label for="fone">Telefone:</label>
                    <input type="text" id="Fone" name="Fone" 
                           style="width: 256;"/>
                </div>      
            </fieldset>
           <fieldset class="grupo">            
                <div class="campo">
                    <label for="assunto">Assunto: </label>                   
                    <select name="assunto" id="assunto">
                        <option value="">Sem Assunto</option>
                        <option value="">Elogios</option>
                        <option value="">Criticas</option>
                        <option value="">Trabalhe Conosco</option>
                        <option value="">Sugestão</option>
                        <option value="">Dúvidas</option>
                        <option value="">Pedido Extra</option>
                        <option value="">Encomendar</option>
                    </select>
                </div> 
    
          
                <div class="campo">
                    <label for="msag">Mensagem:</label>                     
                    <textarea rows="6" name="msag" id="msag"
                              style="width:650px;"></textarea>
                </div>
                <div class="campo">
                    <label>NewsLetter</label>
                    <label class="checkbox">
                        <input type="checkbox" name="Newsletter"
                               value="1"/>Gostaria de receber a Newsletter da 
                        empresa?                   
                    </label>
                </div>
            </fieldset>
            <button class="botao" type="submint" name="submint"
                    onclick="alerta('E-mail Enviado')">
                Enviar </button>                       
        </form> 
        <div>
            <div class="mapa">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3571.0749361168755!2d-49.084670685025046!3d-26.485531983313432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94de94fdedba401f%3A0x4b880a175426c1ea!2sR.%20Jo%C3%A3o%20Marcato%2C%2028%20-%20Centro%2C%20Jaragu%C3%A1%20do%20Sul%20-%20SC%2C%2089251-670!5e0!3m2!1spt-BR!2sbr!4v1573124066055!5m2!1spt-BR!2sbr"
                       width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>   
        </div>
    <head>
        <?php
        include_once './rodape.php';
        ?>
    </head>
    </body>
</html>
