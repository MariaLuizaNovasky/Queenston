<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Trabalhe Conosco</title>

        <?php
        include_once './head.php';
        ?>
    </head>  
    <?php
    include_once './topo.php';
    ?>
    <body> 
        <div class="beneficios">
                <p>Nossa empresa tem vários beneficios para você trabalhador</p>
                <img src="imagem/iconfinder_7_hospital_2774753.png" alt="Plano de saúde">
                <p>Plano de saúde</p>

                <img src="imagem/cesta.png" alt="Cesta Básica">
                <p>Cesta Básica ao final do mês</p>

                <img src="imagem/alimentacao.png" alt="Vale alimentação ou refeição">
                <p>Vale alimentação ou refeição</p>

                <img src="imagem/transporte.png" alt="Transporte da empresa">
                <p>Transporte da Empresa</p>
            </div>
        <form action="salvar_curriculo.php" method="post" id="fT">
           

            <fieldset class="grupo" >   
                <div class="campo">
                    <label for="nome">Nome Completo: </label>
                    <input type="text" id="nome" name="nome" style="width: 560px"/>            
                </div>
                <div class="campo">
                    <label for="cpf">CPF: </label>
                    <p> <input type="number" id="cpf" name="cpf" style="width: 320px"/><p/>

                </div>
                <div class="campo">
                    <label for="telefone">Telefone: </label>
                    <input type="number" id="telefone" name="telefone" style="width: 350px"/>                
                </div>


                <div class="campo">
                    <label for="email">E-mail: </label>
                    <input type="text" id="email" name="email" style="width: 656px"/>
                </div>             
            </fieldset>

            <fieldset class="grupo">
                <div class="campo">               
                    <label for="dia">Dia de Nascimento: </label>
                    <select name="dia" id="dia">
                        <option value="">--</option>
                        <option value="0">01</option>
                        <option value="1">02</option>
                        <option value="1">03</option>
                        <option value="1">04</option>
                        <option value="1">05</option>
                        <option value="1">06</option>
                        <option value="1">07</option>
                        <option value="1">08</option>
                        <option value="1">09</option>
                        <option value="1">10</option>
                        <option value="1">11</option>
                        <option value="1">12</option>
                        <option value="1">13</option>
                        <option value="1">14</option>
                        <option value="1">15</option>
                        <option value="1">16</option>
                        <option value="1">17</option>
                        <option value="1">18</option>
                        <option value="1">19</option>
                        <option value="1">20</option>
                        <option value="1">21</option>
                        <option value="1">22</option>
                        <option value="1">23</option>
                        <option value="1">24</option>
                        <option value="1">25</option>
                        <option value="1">26</option>
                        <option value="1">27</option>
                        <option value="1">28</option>
                        <option value="1">29</option>
                        <option value="1">30</option>
                        <option value="1">31</option>                
                    </select>
                </div> 

                <div class="campo">
                    <label for="Mes">Mês  de nascimento: </label>
                    <select name="Mes" id="Mes">
                        <option value="">--</option>
                        <option value="0">Janeiro</option>
                        <option value="1">Fevereiro</option> 
                        <option value="2">Março</option>
                        <option value="3">Abril</option>
                        <option value="4">Maio</option>
                        <option value="4">Junho</option>
                        <option value="4">Julho</option>
                        <option value="4">Agosto</option>
                        <option value="4">Setembro</option>
                        <option value="4">Outubro</option>
                        <option value="4">Novembro</option>
                        <option value="4">Dezembro</option>
                    </select>
                </div>

                <div class="campo">
                    <label for="Ano">Ano de Nascimento: </label>
                    <select name="Ano" id=Ano>
                        <option value="">--</option>
                        <option value="0">1979</option>
                        <option value="1">1980</option> 
                        <option value="2">1881</option>
                        <option value="3">1982</option>
                        <option value="4">1983</option>
                        <option value="4">1984</option>
                        <option value="4">1985</option>
                        <option value="4">1986</option>
                        <option value="4">1987</option>
                        <option value="4">1988</option>
                        <option value="4">1989</option>
                        <option value="4">1990</option>
                        <option value="4">1991</option>
                        <option value="4">1992</option>
                        <option value="4">1993</option>
                        <option value="4">1994</option>
                        <option value="4">1995</option>
                        <option value="4">1996</option>
                        <option value="4">1997</option>
                        <option value="4">1998</option>
                        <option value="4">1999</option>
                        <option value="4">2000</option>
                        <option value="4">2001</option>
                        <option value="4">2002</option>
                        <option value="4">2003</option>
                        <option value="4">2004</option>
                        <option value="4">2005</option>
                    </select>
                </div>
            </fieldset>
            <fieldset class="grupo">
                <div class="campo">
                    <label for="genero">Genêro</label>
                    <select name="genero" id="genero">
                        <option value="">--</option>
                        <option value="0">Feminino</option>
                        <option value="1">Masculino</option>
                    </select>
                </div>               


                <div class="campo">
                    <label for="estado">Estado</label>   
                    <input type="text" id="estado" name="estado" style="width: 656px"/>
                </div>

                <div class="campo">
                    <label for="cidade">Cidade</label>  
                    <input type="text" id="cidade" name="cidade" style="width: 656px"/>                               
                </div>
            </fieldset>
            <fieldset class="grupo">
                <div class="campo">
                    <label for="escolaridade">Escolaridade: </label>            
                    <select name="escolaridade" id=escola>
                        <option value="">--</option>
                        <option value="0">Ensino Fundamental Incompleto</option>
                        <option value="1">Ensino Fundamental Completo</option> 
                        <option value="2">Ensino Médio Incompleto</option>
                        <option value="3">Ensino Médio Completo</option>
                        <option value="4">Graduação Incompleta</option>
                        <option value="4">Graduação Completa</option>
                    </select>
                </div>
            </fieldset>
            <fieldset class="grupo">
                <div class="campo">
                    <label for="prestacao">Prestação Empresarial: </label>
                    <input type="number" id="prestacao" name="prestacao" style="width: 656px"/>
                </div>

                <div class="campo">
                    <label for="objetivos">Objetivos: </label>
                    <input type="text" id="objetivos" name="objetivos" style="width: 656px"/>
                </div>

                <div class="campo">
                    <label for="expprofissional">Experiência Profissional: </label>
                    <input type="text" id="expprofissional" name="expprofissional" style="width: 656px"/>
                </div>
            </fieldset>

        

       

    </form>  
   <center>   <button class='botao' type='submit' name="submit"
                onclick="alert('Curriculo Enviado com Sucesso')">
            Enviar</button></center>
    <?php
    include_once './rodape.php';
    ?>
</body>
