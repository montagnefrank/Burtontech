<?php

///////////////////////////////////////////////////////////////////////////////////////////DEBUG EN PANTALLA
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'conn.php';
//var_dump($_POST);die
// if the url field is empty
if (isset($_POST['name']) && $_POST['name'] != '') {

    // put your email address here
    $youremail = 'ventas@burtonservers.com';

    $ip = getenv("REMOTE_ADDR");
    // prepare a "pretty" version of the message
    // Important: if you added any form fields to the HTML, you will need to add them here also
    $body = "Contacto de la pagina web burtonservers.com:
	Name:  $_POST[name]
	E-Mail: $_POST[email]
	Message: $_POST[message]
	Address: $ip";
    // Use the submitters email if they supplied one
    // (and it isn't trying to hack your form).
    // Otherwise send from your email address.
    if ($_POST['email'] && !preg_match("/[\r\n]/", $_POST['email'])) {
        $headers = "From: $_POST[email]";
    } else {
        $headers = "From: $youremail";
    }

    $query_message = "INSERT INTO messages (message,email,name) VALUES ('".$_POST['message']."','".$_POST['phone']."','".$_POST['name']."')";
    $result_message = mysqli_query($link, $query_message);
    if ($result_message) {
        echo "SEND";
    } else {
        echo "No pudimos enviar tu mensaje";
    }
}
?>