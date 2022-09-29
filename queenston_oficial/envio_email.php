<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
           require_once "./Email/SMTP.php";
           require_once "./Email/PHPMailer.php";
           require_once "./Email/Exception.php";
           
           $nome = $_POST["nome"];
           $snome = $_POST["snome"];
           $Email = $_POST["Email"];
           $Fone = $_POST["Fone"];
           $assunto = $_POST["assunto"];
           $msag = $_POST["msag"];
           
           $mail = new \PHPMailer\PHPMailer\PHPMailer();
           //Defini o conjunto de caracteres
           $mail->CharSet = "UTF-8";
           //È o IP do servidor (localhost é 127.0.0.1)
           $mail->Host = "localhost";
           //Nome dado no mercury para real address
           $mail->Username = "Queenston";
           //Sua senha cadastrada no Mercury
           $mail->Password = "queenston";
           // Porta do servidor de email (tá no XAMPP)
           $mail->Port = "25";
           //Não temos um servidor autenticando
          $mail->SMTPAuth = False;
          // Exibe o passo a passo do envio do e-mail
          $mail->SMTPDebug = false;
          // Define que queremos utilizar o SMTP
          $mail->isSMTP();
          //Defini quem mandou o email
          $mail->From = $Email;
          //DEfine o nome de quem mandou o email
          $mail->FromName = $nome." ".$snome;
          // Email de destino, para onde vai
          // (Destinatário)          
          $mail->addAddress("queenston@localhost.com","Queenston");
          // Subject é o assunto do email
          $mail->Subject = $assunto;
          // Body é o corpo do e-mail
          $mail->Body = $msag." ".$Fone;
          // Se conseguir mandar o email
          // sendo() tenta mandar o email
          if ($mail->send())
          {
              print("Olá,agradecemos pelo envio de seu e-mail."
                      . "Estaremos retornando em breve, tenha um bom dia!");
          }   
        else
        {
            print("Desculpe pelo incomodo, seu e-mail não foi enviado"
                    . "Tente novamente daqui uma hora");   
 }
                   
                 
                     
         
        ?>
    </body>
</html>
