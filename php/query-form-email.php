<?php


$message = '<html><body>';
$message .= '<img src="https://bansaj.com/test/images/resources/logo.png" style="margin-bottom:10px;" height="60px" alt="Arise O Tech" />';
$message .= '<table border="0" rules="all" width="700" style="width:700px;border:1px solid #666; border-collapse: collapse;" cellpadding="10" cellspacing="0">';
$message .= "<tr><td width='35%' style='border:1px solid #666;'><strong>Name:</strong> </td><td style='border:1px solid #666;'>" . strip_tags($_POST['form_name']) . "</td></tr>";
$message .= "<tr><td width='35%' style='border:1px solid #666;'><strong>Email:</strong> </td><td style='border:1px solid #666;'>" . strip_tags($_POST['form_email']) . "</td></tr>";
$message .= "<tr><td width='35%' style='border:1px solid #666;'><strong>Phone:</strong> </td><td style='border:1px solid #666;'>" . strip_tags($_POST['form_phone']) . "</td></tr>";
$message .= "<tr><td width='35%' style='border:1px solid #666;'><strong>Service:</strong> </td><td style='border:1px solid #666;'>" . strip_tags($_POST['form_service']) . "</td></tr>";
            $curText = htmlentities($_POST['comments']);           
            if (($curText) != '') {
                $message .= "<tr><td style='border:1px solid #666;'><strong>Comment:</strong> </td><td style='border:1px solid #666;'>" . $curText . "</td></tr>";
            }
            $message .= "</table>";
            $message .= "</body></html>";

// Always set content-type when sending HTML email
$to = 'contact@ariseotechelectronics.com';
            
$subject = 'Arise o Tech - Query';
            
$headers .= 'From: <contact@ariseotechelectronics.com>' . "\r\n";
$headers .= "Reply-To: ". strip_tags($_POST['contact@ariseotechelectronics.com']) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

//mail($to,$subject,$message,$headers);

if(mail($to,$subject,$message,$headers))
     {
    // header('Location: index.html');
    echo "<p class='ajax_success'>Your message has been sent successfully.</p>";
     }
     else
     {
     echo "<p class='ajax_failure'>Sorry, Try again Later.</p>";
     }
?>