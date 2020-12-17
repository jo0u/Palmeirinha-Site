<?php
include "funcoesC.php";



?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastre-se</title>
    
    <style>

        label{
            
            color:#2E2A4D;
            background:#F7F5AD;
        }

div{	
        width:140px;
	padding:3px;
		margin:10px;
		border-radius:10px;
		}
		input[type="text"]{
		
		
		border-bottom: 1px solid blue;
		color:green;
		
		}

                body{
                    background:url("imagens/homeBack.jpg");
                    color:white;
                    
                }

            
                #menu ul {
                margin-left:10px;
                padding:5px;
              
                background-color:#EDEDED;
                
        }
        #menu ul li { 
            display: inline;
            margin-left:10px;
        
        }

        #menu ul li a {
    padding: 2px 10px;
    display: inline-block;

    /* visual do link */
    background-color:#EDEDED;
    color: #333;
    text-decoration: none;
    border-bottom:3px solid #EDEDED;
}

#menu ul li a:hover {
    background-color:#D6D6D6;
    color: #6D6D6D;
    border-bottom:3px so
    
}
    
    
    
    </style>

</head>
    <body>
    <!--Menu de Opções-->
        <nav id="menu" color = 'red'>
        <ul>

            <li><a href="index.php">Incio:</a></li>
            <li><a href="cadastro.php">Cadastro:</a></li>
            <li><a href="relatorio.php">Relatório:</a></li>
            
    
            </ul>
            </nav>

        <!--Campos de Cadastro-->
        <form action ="bancoC.php" method="get">
                    <input type="hidden" name="id" required >

                <div>
                    <label >Cozinheiro:</label>
                    <input type="text" name="nome" required>
                </div>

                <div>
                    <label >País:</label>
                    <input type="text" name="pais"required>
                </div>
                
                <div>
                    <label >Estado:</label>
                    <input type="text" name="estado"required>
                </div>
                
                <div>
                <br><label>Sexo</label></br>
                <select name="sexo" id="sex">
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
                </select>
                </div>

                
                
                <div>
               <br> <label class = "dif">Já Trabalhou Profissinalmente?</label></br>
                <input type="radio" value="0" name = "prof"required>Sim
                <input type="radio" value ="1" name = "prof"required>Não 
                
                </div>
                <div><label >Receita:</label>
                <input type="text" name="receita" required>
                </div>

                <div>
                <label >Ingredientes</label>
                <textarea name="ig" id="ig" cols="30" rows="10" placeholder ="Descreva os ingredientes usados para receita"required></textarea>
                </div>
               
                <div>
                <label >Modo de Preparo</label>
                <textarea name="prep" id="preparo" cols="30" rows="10" placeholder ="Escreva o modo de preparo do prato"required></textarea>
                </div>
                <div>
                <br><label>Contato:</label></br>
                <input type="number" name="contato" id="contato" placeholder="apenas o numero de contato" required>
                </div>
                



               
         
                    <!--Enviar ao banco-->
                    <div>
                    <input type="submit" value="Salvar Receita">
                    
                    </div>
         </from>       
        </body>
</html>