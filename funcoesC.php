<?php
$excluir = "Excluir Receita";
function lerDados(){
    $con = mysqli_connect("localhost","root","","cz1") or die("Erro(Conexão ao sql)");
    $res = mysqli_query($con,"select * from cz_receita");
        $total="";
        if($res){
            
            while($row= mysqli_fetch_array($res)){
               

                $nome = $row["nome"];
                $pais = $row["pais"];
                $estado =$row["estado"];
                $sexo = $row["sexo"];
                $prof = $row["prof"];
                $receita = $row["receita"];
                $ig = $row["ig"];
                $prep = $row["prep"];
                $contato = $row["contato"];
                $id = $row["id"];
                $excluir = "Excluir Receita";
                
                if($prof = 0){
                    $prof="Sim";
                }else{
                    $prof = "Não";
                }


                
               $total.="<section>".
                "<div id = 'txt'><label >Nome do Cozinheiro: $nome </label><br>" .
                     "<br><label >País: $pais </label><br>".
                     "<br><label >Estado:$estado </label><br>".
                     "<br><label >sexo: $sexo </label><br>".
                     "<br><label  >Cozinheiro Profissional: $prof </label><br>".
                     "<br><label  >Nome da Receita: $receita </label><br>".
                     "<br><label >Ingredientes necessário: $ig </label><br>".
                     "<br><label  >Modo de Preparo:<br> $prep </label><br>".
                     "<br><label >Numero de contato: $contato </label><br>".
                    "<div id ='aquin'><br><a href='excluir.php?id=$id'>$excluir</a></div></div></section>";
                     
                   
            }
                 
              
        }
        return $total;
    }

?>