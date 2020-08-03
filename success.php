<?php

// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';

//$access_token = 'APP_USR-2767046342004813-042418-0949c0cfe52c3dffb8b0ec2e3b59a68c-469485398';
//$access_token = 'APP_USR-5989266223361037-073121-014a414870f0e63bd698e86037af6fdd-75765143';
$access_token = 'TEST-6300848884069710-050717-cbb71b23e134fccd94ffef68216160a5-47398782';



//  MercadoPago\SDK::setAccessToken("APP_USR-5989266223361037-073121-014a414870f0e63bd698e86037af6fdd-75765143");



$payment_id = $_POST["payment_id"];
var_dump($payment_id);
$cURLConnection = curl_init();
curl_setopt($cURLConnection, CURLOPT_URL, "https://api.mercadopago.com/v1/payments/$payment_id?access_token=$access_token");
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($cURLConnection);
echo $response;
curl_close($cURLConnection);

$jsonResponse = json_decode($response);

$order_id = $jsonResponse->order->id;
$payment_method_id = $jsonResponse->payment_method_id;
$transaction_amount = $jsonResponse->transaction_amount;
var_dump($payment_method_id);

echo 'separador';

var_dump($transaction_amount);

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
