<?php
    $code=sprintf('%6d', rand(1, 1000000));
    $_SESSION['success_forget']=['code'=>$code];
    $to = "alisamtia1@gmail.com";
    $subject = "Verification code from notes!";
    $message = "Hello! This is a your verification code:$code <br><b>Never share it with anyone</b>";

    $headers = [ "MIME-Version:1.0",
            "Content-type: text/plain; charset=utf-8",
            "From: hello@yahoobaba.net",
            "Cc: findjquery@gmail.com",
            "Bcc: abc@gmail.com"
        ];

$headers = implode("\r\n",$headers);
if(mail($to ,$subject,$message,$headers)){
    echo "Email Sent.";
}else{
    echo "Email Failed.";
}