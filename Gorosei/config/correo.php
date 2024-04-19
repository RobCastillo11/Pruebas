<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $destinatario = filter_var($_POST['destinatario'], FILTER_SANITIZE_EMAIL);
    $asunto = $_POST['asunto'];
    $descripcion = $_POST['descripcion'];

    // Validación de campos
    if (!filter_var($destinatario, FILTER_VALIDATE_EMAIL)) {
        echo "Dirección de correo electrónico no válida";
        exit;
    }

    // Configuración del remitente
    $de = 'pruebacorreos465@gmail.com'; // Reemplaza con tu dirección de correo

    // Headers para enviar como HTML
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

    // dirección del remitente
    $headers .= "From: $de\r\n";

    // ruta del mensaje desde origen a destino
    $headers .= "Return-path: $de\r\n";

    // Enviar correo
    if (mail($destinatario, $asunto, $descripcion, $headers)) {
        echo "Correo enviado satisfactoriamente";
    } else {
        echo "Error al enviar el correo";
    }
} else {
    echo "Acceso no permitido";
}
?>
