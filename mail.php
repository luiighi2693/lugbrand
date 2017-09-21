<?php
/**
 * Created by PhpStorm.
 * User: luisc
 * Date: 25/7/2016
 * Time: 8:58 PM
 */

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];

$headers = 'From: '.$email . "\r\n" .
    'Reply-To: info@lugbrand.com.ve' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail('info@lugbrand.com.ve', $subject, $name."\n\n".$message, $headers);
//$fp = fopen("envio.txt", "w");
//fputs($fp, "s");
//fclose($fp);
header("Location: index.php");
die();