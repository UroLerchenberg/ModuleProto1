<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $module = $_POST['module'];

    $to = "urologielerchenberg@gmail.com";
    $subject = "Modul Auswahl";
    $body = "Name: $name\nModul: $module";
    $headers = "From: webmaster@example.com";

    if (mail($to, $subject, $body, $headers)) {
        echo "Die E-Mail wurde erfolgreich gesendet.";
    } else {
        echo "Die E-Mail konnte nicht gesendet werden.";
    }
}
?>