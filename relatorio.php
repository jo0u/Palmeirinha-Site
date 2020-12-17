    <?php
    include "funcoesC.php";
    


    ?>


    <!DOCTYPE html>
    <html lang="pt">
    <head>
    
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Relatório</title>

        <style>
           
            
            #tab{

                
             
            padding-bottom: 4px;
            padding-left: 5px;
            padding-right:4px;
            border:solid;
            
            overflow:hidden;
            }

           #txt{
                border:solid black;
                
                font-size:18px;
                color:black;
                
                
                padding-bottom: 4px;
            padding-left: 5px;
            padding-right:4px;
           }


            


              body{
                    background:url("imagens/rela.jpg")
                    
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
            <nav id="menu" color = 'red'>
        <ul>

            <li><a href="index.php">Incio:</a></li>
            <li><a href="cadastro.php">Cadastro:</a></li>
            <li><a href="relatorio.php">Relatório:</a></li>
            
    
            </ul>
            </nav>

            <section >
                    <div id = "tab">
                    <pre>
                    <?php
                    echo lerDados();
                            ?>
                            </pre>
                            </div>      
                     </section> 

          
                
            
        

        
            </body>
    </html>