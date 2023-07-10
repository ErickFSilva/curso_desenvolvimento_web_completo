<?php

    // Scripts do PHPMailer
    require "bibliotecas/PHPMailer/Exception.php";
    require "bibliotecas/PHPMailer/OAuth.php";
    require "bibliotecas/PHPMailer/PHPMailer.php";
    require "bibliotecas/PHPMailer/POP3.php";
    require "bibliotecas/PHPMailer/SMTP.php";

    // 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    class Mensagem {

        // Atributos
        private $para = null;
        private $assunto = null;
        private $mensagem = null;

        // Métodos Getter e Setter
        public function __get($atributo) {
            return $this->$atributo;
        }

        public function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        // Métodos comuns
        public function mensagemValida() {
            
            if (empty($this->para) || empty($this->assunto) || empty($this->mensagem)) {
                return false;
            }

            return true;

        }

    }

    // 
    $mensagem = new Mensagem();

    $mensagem->__set('para', $_POST['para']);
    $mensagem->__set('assunto', $_POST['assunto']);
    $mensagem->__set('mensagem', $_POST['mensagem']);

    // 
    if (!$mensagem->mensagemValida()) {
        echo 'Mensagem não é válida';
        die(); // mata a excução do script aqui
    }

    //Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 2; //SMTP::DEBUG_SERVER;              //Enable verbose debug output
        $mail->isSMTP();                                         //Send using SMTP
        $mail->Host       = 'smtp.gmail.com'; //smtp-relay.gmail.com //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                //Enable SMTP authentication
        $mail->Username   = 'erick.ferreira.prog@gmail.com';     //SMTP username
        $mail->Password   = 'sboiuldjsyskobtl';                  //SMTP password
        $mail->SMTPSecure = 'tls';                               //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                 //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('erick.ferreira.prog@gmail.com', 'Erick Ferreira Prog');
        $mail->addAddress($mensagem->__get('para'));     //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('erick.ferreira.prog@gmail.com', 'Erick Ferreira Prog');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $mensagem->__get('assunto');
        $mail->Body    = $mensagem->__get('mensagem');
        $mail->AltBody = 'É necessário utilizar um client que suporte o conteúdo HTML dessa mensagem.';

        $mail->send();
        echo 'E-mail enviado com sucesso!';
    } 
    catch (Exception $e) {
        echo 'Não foi possível enviar este e-mail! Por favor tente novamente mais tarde!<br>';
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

?>