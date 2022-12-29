<?php 

    use PHPMailer\PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';

    if(isset($_POST["send"])){

        define("mail_receiver", "cminanago@gmail.com");

        $name_from = $_POST["name"];

        $email_from = $_POST["email"];

        $subject_from = $_POST["subject"];
        $new_subject= 'PERSONAL BIO: '. $subject_from;

        $message_from= $_POST["message"];
        $new_message= 'Message from: '. $name_from. ' <br> Email: ' . $email_from. ' <br> ' . $message_from;

        $mail = new \PHPMailer\PHPMailer\PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'developermkuu@gmail.com';
        $mail->Password = 'nyivrixaycdzejcb';
        $mail->SMTPSecure ='ssl'; //tls
        $mail->Port= 465; //587

        $mail->setFrom('developermkuu@gmail.com');

        $mail->addAddress(mail_receiver);

        $mail->isHTML(true);

        $mail->Subject = $new_subject;
        $mail->Body = $new_message;

        function is_connected()
{
    $connected = @fsockopen("www.example.com", 80); 
                                        //website, port  (try 80 or 443)
    if ($connected){
        $is_conn = true; //action when connected
        fclose($connected);
    }else{
        $is_conn = false; //action in connection failure
       
    }
    return $is_conn;

}
        if (is_connected() ==true){
            $mail->send();
            echo
              "
                <script>
                alert('Email Sent Successfully');
                document.location.href ='../index.php';
                </script>
                ";
        }
        else{
            echo
            "
            <script>
            alert('Failed to send: Check internet Connection');
            window.history.go(-1);
            </script>
            ";

        }

        
        

    }



?>
