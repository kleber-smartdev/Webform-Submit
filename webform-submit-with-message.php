<?php 
if(isset($_POST['submit'])){
    $to = "email@email.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $full_name = $_POST['fname'];
    //$last_name = $_POST['last_name'];
    $subject = "Webform submission";
    $subject2 = "Copy of your Webform submission";
    $message = $fname . " " . $email . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $fname . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $fname . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
<!DOCTYPE html>
<head>
<title>Form submission</title>
</head>
<body>

<form action="" method="post">
Full Name: <input type="text" name="fname"><br>
<!--Last Name: <input type="text" name="last_name"><br>-->
Email: <input type="text" name="email"><br>
Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
<input type="submit" name="submit" value="Submit">
</form>

</body>
</html>