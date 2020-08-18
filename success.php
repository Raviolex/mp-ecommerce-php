<?php

// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';


$access_token = 'APP_USR-6300848884069710-050717-e6e82bb1dcba9f15dc8d66459cf040ca-47398782';




$payment_id = $_POST["payment_id"];


var_dump($payment_id);
echo '<br><br>';

$cURLConnection = curl_init();
curl_setopt($cURLConnection, CURLOPT_URL, "https://api.mercadopago.com/v1/payments/$payment_id?access_token=$access_token");
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($cURLConnection);
echo $response;
curl_close($cURLConnection);

$jsonResponse = json_decode($response);
echo '<br><br>';
var_dump($jsonResponse);
echo '<br><br>';
echo $jsonResponse;


$order_id = $jsonResponse->order->id;
$payment_method_id = $jsonResponse->payment_method_id;
$transaction_amount = $jsonResponse->transaction_amount;
 

?>

<html lang="en">
<head>
</head>
<body>
  <h1>¡Enhorabuena!</h1>
  <p>El pago se ha realizado con éxito.</p>
  <p>El ID de pago de MercadoPago es: <?= $payment_id ?></p>
  <p>El número de órden del pedido es: <?= $order_id ?></p>
  <p>El payment_method_id es: <?= $payment_method_id ?></p>
  <p>El monto pagado es: <?= $transaction_amount ?></p>
  <p><a href="https://raviolex-mp-commerce-php.herokuapp.com/">Ir al inicio</a></p>
</body>
</html>
