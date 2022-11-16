<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
class Mailer{  
    public function dathangmail($tieude,$noidung1,$noidung2,$noidung3,$maildathang){
        $mail = new PHPMailer(true);
        $mail->CharSet = 'UTF-8';
        try {
            $mail->SMTPDebug = 0;                                   
            $mail->isSMTP();                                            
            $mail->Host  = 'smtp.gmail.com';                  
            $mail->SMTPAuth = true;                         
            $mail->Username = 'ronhoangdn1970@gmail.com';               
            $mail->Password = 'oufzkbonifvczzkw';                       
            $mail->SMTPSecure = 'tls';                          
            $mail->Port  = 587;

            $mail->setFrom('ronhoangdn1970@gmail.com', "Rôn Hoàng");     
            /*    $mail->addAddress('recipient1@example.com');*/
            $mail->addAddress($maildathang);
            $mail->addCC('ronhoangdn1970@gmail.com');

            $mail->isHTML(true);                                
            $mail->Subject = $tieude;  
            $mail->Body = $noidung1.$noidung2.$noidung3;
            $mail->AltBody = 'Body in plain text for non-HTML mail clients';
            $mail->send();
            echo "Mail has been sent successfully!";
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }        
    }
    
}



?>