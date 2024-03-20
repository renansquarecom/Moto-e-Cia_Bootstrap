 
 <?php
  //1 – Definimos Para quem vai ser enviado o email

  $para = "vendasonline@motoeciahonda.com.br";
  $para = "gerenciacomercial@motoeciahonda.com.br";
  //2 - resgatar o nome digitado no formulário e  grava na variavel $nome
  $name = $_POST['name'];
    $email = $_POST['email'];
     $telephone = $_POST['telephone'];
      $cidade = $_POST['cidade'];
       $moto = $_POST['moto'];
  // 3 - resgatar o assunto digitado no formulário e  grava na variavel //$assunto
  $assunto = $_POST['assunto'];
   //4 – Agora definimos a  mensagem que vai ser enviado no e-mail
  $mensagem = "<strong>\n\n Nome:  </strong>".$name;
  $mensagem .= "<strong>\n \n Email:  </strong>".$email;
  $mensagem .= "<strong>\n\n Fone:  </strong>".$telephone;
  $mensagem .= "<strong>\n\n cidade:  </strong>".$cidade;
  $mensagem .= "<strong>\n\n modelo:  </strong>".$moto;
  $mensagem .= "<br>  <strong>\n\nMensagem: </strong>".$_POST['mensagem'];
 
//5 – agora inserimos as codificações corretas e  tudo mais.
  $headers =  "Content-Type:text/html; charset=UTF-8\n";
  $headers .= "From:  dominio.com.br<motoecia.com.br>\n"; //Vai ser //mostrado que  o email partiu deste email e seguido do nome
  $headers .= "X-Sender:  <motoecia@honda.com.br>\n"; //email do servidor //que enviou
  $headers .= "X-Mailer: PHP  v".phpversion()."\n";
  $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
  $headers .= "Return-Path:  <sistema@dominio.com.br>\n"; //caso a msg //seja respondida vai para  este email.
  $headers .= "MIME-Version: 1.0\n"; 
mail($para, $assunto, $mensagem, $headers);  //função que faz o envio do email.


  ?>
  

<html>
<head>
<meta http-equiv="refresh" content="0;url=http://www.motoeciahonda.com.br" />
</head>
</html>