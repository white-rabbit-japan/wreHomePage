<?php

if(isset($_POST['company'], $_POST['name'], $_POST['email'])){
    $company = $_POST['company'];
    $name = $_POST['name'];
    $furigana = $_POST['furigana']; 
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $url = $_POST['url'];
    $message = $_POST['cf_field_5'];

    $to = 'tomoko@whiterabbitjapan.com';
    $subject = "[Important: seller contact form]";
    $body = "A new contact form entry has been received from seller.whiterabbitjapan.com. Details are as follows.\r\n\r\n";
    $body .= "Company: ".$company."\r\n";
    $body .= "Name: ".$name."\r\n";
    $body .= "Furigana: ".$furigana."\r\n";
    $body .= "Email: ".$email."\r\n";
    $body .= "Phone: ".$tel."\r\n";
    $body .= "Website: ".$url."\r\n";
    $body .= "Message: ".$message."\r\n";
    if(mail($to, $subject, $body, 'From: help@whiterabbitexpress.com'))
        echo '<p>お問い合わせいただきまして、大変ありがとうございます。担当者より２営業日以内にご連絡申し上げます。</p>';
    else
        echo 'error';
}
else die("You cannot directly access this page");
?>