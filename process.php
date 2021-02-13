<?php
// echo "page seen";
// go to your email security settings and turn on 'Less secure app access'
    // echo '<h1 style="font-size:20rem;">reached</h1>';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    // echo 'arrived';
    // error_reporting(1);
    require_once 'vendor/phpmailer/phpmailer/src/Exception.php';
    require_once 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
    // vendor\phpmailer\phpmailer\src\Exception.php
    require_once 'vendor/phpmailer/phpmailer/src/SMTP.php';
    
    $mail = new PHPMailer(true);

    $alert = '<div class="noAlert"></div>';
    if(isset($_POST['submit']))
    {
        // echo "submitted";
        // echo '<h1 style="font-size:20rem;">reached</h1>';
        // echo "gotten";
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $cmp_email = 'hi5africa.ng@gmail.com';
        $email_pass = 'Koladedamilare#1';

        if(empty($name)||empty($email)||empty($message)){
            $alert = '<div class="alert"><span style="color:red;">All fields are required:</span>'/*.$e->getMessage().*/.' Try again <span style="cursor:pointer; padding: 5px;" class="cancel"> x</span></div>';
        return;
        }
        // Load Composer's autoloader
        require 'vendor/autoload.php';
        $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
            );
        try {
            // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = $cmp_email;                     // SMTP username
        $mail->Password   = $email_pass;                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;

        //Recipients
        $mail->setFrom($cmp_email);
        $mail->addAddress($cmp_email);     // Add a recipient
        // $mail->addAddress('ellen@example.com');               // Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        // Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = '<h3>Name : ' . $name . '<br > Email: ' . $email . '<br >Message : ' . $message . '</h3>';
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->send();
        $alert = '<div class="alert apos"> <i style="color:rgb(39, 245, 49);">Message sent! </i> Thank you for contacting us. <span style="cursor:pointer;" class="cancel">
        <svg viewBox="0 0 16 16"><path fill-rule="evenodd" fill="#fff" d="M6.663 8.01l-3.362 3.362a.955.955 0 0 0-.005 1.352.953.953 0 0 0 1.352-.005L8.01 9.357l3.362 3.362a.955.955 0 0 0 1.352.005.953.953 0 0 0-.005-1.352L9.357 8.01l3.362-3.362a.955.955 0 0 0 .005-1.352.953.953 0 0 0-1.352.005L8.01 6.663 4.648 3.301a.955.955 0 0 0-1.352-.005.953.953 0 0 0 .005 1.352L6.663 8.01z"></path></svg>
        </span></div>';
        
            // $status = "failed";
            // $response = "Something went wrong: <br >" . $mail->ErrorInfo;
            // echo"not sent";

        // echo 'Message has been sent';
        } 
        catch (Exception $e) {
            $alert = '<div class="alert aneg"><span><i style="color:red;">oops!</i> Something went wrong: </span>'/*.$e->getMessage().*/.' Try again <span style="cursor:pointer;" class="cancel"> 
            <svg viewBox="0 0 16 16"><path fill-rule="evenodd" fill="#fff" d="M6.663 8.01l-3.362 3.362a.955.955 0 0 0-.005 1.352.953.953 0 0 0 1.352-.005L8.01 9.357l3.362 3.362a.955.955 0 0 0 1.352.005.953.953 0 0 0-.005-1.352L9.357 8.01l3.362-3.362a.955.955 0 0 0 .005-1.352.953.953 0 0 0-1.352.005L8.01 6.663 4.648 3.301a.955.955 0 0 0-1.352-.005.953.953 0 0 0 .005 1.352L6.663 8.01z"></path></svg>
            </span></div>
            ';
        //     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        // Instantiation and passing `true` enables exceptions
        

        
        
        echo $alert;
    }
    

?>