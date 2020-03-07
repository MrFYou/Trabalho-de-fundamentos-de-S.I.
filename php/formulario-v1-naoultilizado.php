<?php 
 
if (isset($_POST["enviar"])){ 
 
   $nome=$_POST["tName"];
   $cpf=$_POST["tcpf"]; 
   $email=$_POST["tEmail"];
   $telefone=$_POST["tPhone"]; 
   $Sexo=$_POST["tSex"]; 
   $nascimento=$_POST["tData"];
   $rua=$_POST["tRua"];
   $numero=$_POST["tNumero"];
   $estado=$_POST["tEst"];
   $cidade=$_POST["tCid"];
   $servico=$_POST["tService"];
   $urgencia=$_POST["tUrg"];
   $data=$_POST["tData"]; 
   $mensagem=$_POST["tMens"];
   $cartao=$_POST["tPag"];
   $nometitular=$_POST["tTitular"];
   $numerocartao=$_POST["tCartao"];
   $cvv=$_POST["tcvv"];

}  
?>