<?php 
 
if (isset($_POST['enviar']) && !empty($_POST['enviar'])){ 

   $nome=addslashes($_POST['tName']);
   $cpf=addslashes($_POST['tcpf']); 
   $email=addslashes($_POST['tEmail']);
   $telefone=addslashes($_POST['tPhone']); 
   $Sexo=addslashes($_POST['tSex']); 
   $nascimento=addslashes($_POST['tData']);
   $rua=addslashes($_POST['tRua']);
   $numero=addslashes($_POST['tNumero']);
   $estado=addslashes($_POST['tEst']);
   $cidade=addslashes($_POST['tCid']);
   $servico=addslashes($_POST['tService']);
   $urgencia=addslashes($_POST['tUrg']);
   $data=addslashes($_POST['tData']); 
   $mensagem=addslashes($_POST['tMens']);
   $cartao=addslashes($_POST['tPag']);
   $nometitular=addslashes($_POST['tTitular']);
   $numerocartao=addslashes($_POST['tCartao']);
   $cvv=addslashes($_POST['tcvv']);


   $to="contato@webservice.com";
   $subject="Formulario WebService";
   $body="Nome: ".$nome. "/r/n".
         "CPF: ".$cpf. "/r/n".
         "Email: ".$email. "/r/n".
         "Telefone: ".$telefone. "/r/n".
         "Sexo: ".$Sexo. "/r/n".
         "Nascimento: ".$nascimento. "/r/n".
         "Rua: ".$rua. "/r/n".
         "Número: ".$numero. "/r/n".
         "Estado: ".$estado. "/r/n".
         "Cidade: ".$cidade. "/r/n".
         "Serviço: ".$servico. "/r/n".
         "Grau de urgência: ".$urgencia; "/r/n".
         "Data: ".$data. "/r/n".
         "Mensagem: ".$mensagem. "/r/n".
         "Cartão: ".$cartao. "/r/n".
         "Titular do cartão: ".$nometitular. "/r/n".
         "Número cartão: ".$numerocartao. "/r/n".
         "CVV: ".$cvv;
   $header= "From:contato@webservice.com"."/r/n".
            "Reply-To:".$email."/r/n".
            "X=Mailer:PHP/".phpversion();
   
   if(mail($to,$subject,$body,$header)){
      echo("Email enviado com sucesso!");
   }else{
      echo("O Email não foi enviado");
   }

}  

?>