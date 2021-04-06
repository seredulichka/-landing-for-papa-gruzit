<?php
    $_POST = json_decode( file_get_contents("php://input"), true );
    echo var_dump($_POST);
 
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    $to = "papagruzit@gmail.com";
    $date = date ("d.m.Y");
    $time = date ("h:i");
    $from = "alinasereda300898@gmail.com";
    $subject = "Заявка с сайта";

    $msg="
    Имя: $name /n
    Телефон: $phone";
    mail($to, $subject, $msg, "From: $from ");
?>