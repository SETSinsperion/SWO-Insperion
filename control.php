<?php

include './PHPMailer_5.2.2/class.phpmailer.php';
date_default_timezone_set('Mexico/General');

//error_reporting(E_ALL & ~E_NOTICE); 
//sleep(1);
    $answer = "BAD";
    $message = "";
    if ($_POST != "" && !empty($_POST)) {
        switch ($_POST['Op']) {
            case "send_email":
                if (check_email_address("contacto.insperion@gmail.com")) {
                    
                        $transmitter_name = $_POST['name'];
                        $transmitter_email = $_POST['email'];
                        $transmitter_mensaje = $_POST['message'];

                        //Insperion es quien manda correo a si mismo.
                        $insperion_email = "contacto@insperion.com.mx";
                
                        $mailer = new PHPMailer();
                        $mailer->CharSet = 'UTF-8';
                        $mailer->Mailer = "smtp";
                        $mailer->SMTPAuth = true;
                        $mailer->SMTPSecure = "tls"; 
                        $mailer->Username = $insperion_email; 	 	
                        $mailer->Host = "mail.insperion.com.mx";
                        $mailer->Port = 587;
                        $mailer->Password = "Zanahoria2040/";
                        $mailer->From = $insperion_email;		
                        $mailer->FromName = "Insperion";
                        $mailer->Timeout=30;
                        $mailer->ClearAllRecipients();
                        $mailer->ClearAttachments();
                                  
                        $mailer->AddAddress($insperion_email, "Insperion");

                        $mailer->Subject = $transmitter_name." se ha puesto en contacto con Insperion.";
                        
                        $full_message = '<h2>' . $transmitter_name . ' nos dice: </h2><br><br>' .
                                '<p><h3>"' . $transmitter_mensaje . '"</h3> <br><br>' .
                                '<h4>Su correo electrónico es: ' . $transmitter_email. '</h4>';
                        $mailer->Body = $full_message;
	                $mailer->AltBody = $full_message;

                    if (!$mailer->Send()) {
                        echo $answer = "BAD";
                        $message = "Mailer Error: " . $mail->ErrorInfo;
                    }
                    else {
                        echo $answer = "TRUE";        
                        $message = "Email Sent";
                    }
                } else {
                    $answer = "BAD";
                }
                break;
        }
    } 
    else {
        $answer = "Error 2";
        $message = "Error: POST vacio";
    }

    $jsonFactura = array("answer" => $answer, "message" => $message);
    echo json_encode($jsonFactura);

    function check_email_address($email) {
        // Primero, checamos que solo haya un símbolo @, y que los largos sean correctos
        if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email)) {
            // correo inválido por número incorrecto de caracteres en una parte, o número incorrecto de símbolos @
            return false;
        }

        // se divide en partes para hacerlo más sencillo
        $email_array = explode("@", $email);
        $local_array = explode(".", $email_array[0]);

        for ($i = 0; $i < sizeof($local_array); $i++) {
            if (!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$", $local_array[$i])) {
                return false;
            }
        }

        // se revisa si el dominio es una IP. Si no, debe ser un nombre de dominio válido
        if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) {
            $domain_array = explode(".", $email_array[1]);
            if (sizeof($domain_array) < 2) {
                return false; // No son suficientes partes o secciones para se un dominio
            }

            for ($i = 0; $i < sizeof($domain_array); $i++) {
                if (!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$", $domain_array[$i])) {
                    return false;
                }
            }
        }
        return true;
    }
