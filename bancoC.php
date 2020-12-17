    <?php
    include "funcoesC.php";
        $msg="";
        $verificar=isset($_REQUEST["nome"]);


            if($verificar){
                $nome = $_REQUEST["nome"];
                $pais = $_REQUEST["pais"];
                $estado = $_REQUEST["estado"];
                $sexo = $_REQUEST["sexo"];
                $prof = $_REQUEST["prof"];
                $receita = $_REQUEST["receita"];
                $ig = $_REQUEST["ig"];
                $prep = $_REQUEST["prep"];
                $contato = $_REQUEST["contato"];
                $id = $_REQUEST["id"];
                

                    $con = mysqli_connect("localhost","root","","cz1") or die("Erro(Conexão ao sql)");
                    $res = mysqli_query($con, "INSERT INTO cz_receita 
                    (nome,pais,estado,sexo,prof,receita,ig,prep,contato)
                    values('$nome','$pais','$estado','$sexo','$prof','$receita','$ig','$prep','$contato')");  
                
            if($res>0){ 
                $msg="Dados Inseridos com Sucesso";

            }else {
                $msg="erro ao inserir";

            
            
            }
        }
            
            print("$msg <br/><a href = 'index.php'>voltar</a>");
            lerDados();
            
    ?>  