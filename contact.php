<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

//  if the user skip to  enter the  values in any of the three properties ,name Or , email Or, message, It gives the instruction
    // to enter to fill the form without missing any.
    if ($name == "" OR $email == "" OR $message == "") {
        echo "You must specify a value for name, email address, and message.";
        exit;
    }

    foreach( $_POST as $value ){
        if( stripos($value,'Content-Type:') !== FALSE ){
            echo "There was a problem with the information you entered.";    
            exit;
        }
    }

    if ($_POST["address"] != "") {
        echo "Your form submission has an error.";
        exit;
    }
// using the third party library for email handling .
    require_once("inc/phpmailer/class.phpmailer.php");
    $mail = new PHPMailer();

//Validating the email , If the user entered incorrect email address, it throws warning !!!
    if (!$mail->ValidateAddress($email)){
        echo "You must specify a valid email address.";
        exit;
    }

    $email_body = "";
    $email_body = $email_body . "Name: " . $name . "<br>";
    $email_body = $email_body . "Email: " . $email . "<br>";
    $email_body = $email_body . "Message: " . $message;

   /* $mail->SetFrom($email, $name);
    $address = "orders@shirts4mike.com";
    $mail->AddAddress($address, "Shirts 4 Mike");
    $mail->Subject    = "Shirts 4 Mike Contact Form Submission | " . $name;
    $mail->MsgHTML($email_body);

    if(!$mail->Send()) {
      echo "There was a problem sending the email: " . $mail->ErrorInfo;
      exit;
    }
*/
// the $email => customer email address,  and  $name=> customer name.
    $mail->SetFrom($email, $name);
    $address = "orders@shirts4mike.com";
    $mail->AddAddress($address, "Shirt 4 Mike");

    $mail->Subject    = "Shirts 4 Mike Contact Form Submissoin | " . $name;

    $mail->MsgHTML($body);

// Checking the email Error report.
    // If the mail sent successfully , Its fine, Otherwise it throws an Error message.
    if(!$mail->Send()) {
      echo "There was a problem sending the mail: " . $mail->ErrorInfo;
    } 
    
// If the mail sent successfully, it returns the customer to thank you page.
    header("Location: contact.php?status=thanks");
    exit;
}
?><?php 
$pageTitle = "Contact Mike";
$section = "contact";
include('inc/header.php'); ?>

    <div class="section page">

        <div class="wrapper">

            <h1>Contact</h1>

            <?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
                <p>Thanks for the email! I&rsquo;ll be in touch shortly!</p>
            <?php } else { ?>

                <p>I&rsquo;d love to hear from you! Complete the form to send me an email.</p>

                <form method="post" action="contact.php">

                    <table>
                        <tr>
                            <th>
                                <label for="name">Name</label>
                            </th>
                            <td>
                                <input type="text" name="name" id="name">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="email">Email</label>
                            </th>
                            <td>
                                <input type="text" name="email" id="email">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="message">Message</label>
                            </th>
                            <td>
                                <textarea name="message" id="message"></textarea>
                            </td>
                        </tr> 
                        <tr style="display: none;">
                            <th>
                                <label for="address">Address</label>
                            </th>
                            <td>
                                <input type="text" name="address" id="address">
                                <p>Humans (and frogs): please leave this field blank.</p>
                            </td>
                        </tr>                   
                    </table>
                    <input type="submit" value="Send">

                </form>

            <?php } ?>

        </div>

    </div>

<?php include('inc/footer.php') ?>