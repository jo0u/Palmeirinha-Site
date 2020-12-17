<?php
    include "funcoesC.php";
    $msg = "";
    $verificar = isset($_REQUEST["id"]);
    
    if ($verificar){
        $id = $_REQUEST["id"];
        $con = mysqli_connect("localhost", "root" , "", 
        "cz1") or die("Mensagem");

$res = mysqli_query($con, "delete from cz_receita where id=$id"); 
   
if ($res>0){
    $msg = " Dados excluido com sucesso";
   
}else{
    $msg = " Erro ao excluir";
}

}else{
$msg = "Dados inválidos";
}

print("$msg <br/> <a href = 'relatorio.php'> voltar </a>");

?>

