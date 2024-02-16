                                                                                                       <?php
                                                                                                                 require_once('~/Downloads/PHPMailer-master/src/PHPMailer.php');
                                                                                                                 $mail = new PHPMAiler(true);
                                                                                                                 $mail->isSMTP();
                                                                                                                 $mail->SMTPAuth = true;
                                                                                                                 $mail->SMTPSecure = 'ssl';
                                                                                                                 $mail->Host = 'smtp.gmail.com';
                                                                                                                 $mail->Port = '465';
                                                                                                                 $mail->isHTML();
                                                                                                                 $mail->Username = '';
                                                                                                                 $mail->Password = '';
                                                                                                                 $mail->SetForm('no-reply@gmail.com');
                                                                                                                 $mail->Subject = 'Hello World';
                                                                                                                 $mail->Body = 'A test email!';
                                                                                                                 $mail->AddAddress('mounjanah@gmail.com');
                                                                                                                 $mail->Send();
       
                                                                                                          ?>
