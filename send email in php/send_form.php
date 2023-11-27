
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"></form>
    Email: <input name="email" type="text"><br><br>
    Subject: <input name="subject" type="text"><br><br>
    Message: <br><br>
    <textarea name="message" id="" cols="40" rows="15"></textarea>
    <button name="esubmit" type="submit">Submit</button>


<?php



if(isset($_POST['esubmit'])){
  // Dont add this command in real time server
  ini_set("SMTP", "localhost");
  ini_set("smtp_port", 1025); // Port used by MailHog
    $to = "qadrisahb679@gmail.com";
    $subject = $_POST['subjects'];
    $message = $_POST['message'];
    $from = $_POST['email'];
    $headers = "From: $from";

    mail($to ,$subject,$message,$headers);
    echo "Mail Sent.";
  echo "Mail Sent.";
}




 ?>
