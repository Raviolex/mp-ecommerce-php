<?php
$result = $_POST;
if (!isset($result['back_url'])) {
    header("Location: result.php?s=error&ref=");
    exit();
}

require __DIR__ .  '/vendor/autoload.php';

MercadoPago\SDK::setAccessToken('TEST-5989266223361037-073121-a531f5a6525925ed15a78001a75b950a-75765143');
$payment = MercadoPago\Payment::find_by_id($result["payment_id"]);

$result['back_url'] .= '&method_id='.$payment->payment_method_id;
$result['back_url'] .= '&type='.$payment->payment_type_id;
$result['back_url'] .= '&amount='.$payment->transaction_amount;
$result['back_url'] .= '&pid='.$payment->id;

$fp = fopen('orders.txt', 'a');
fwrite($fp, 'Compra: '.$result['external_reference'].PHP_EOL);
fwrite($fp, 'Fecha: '.date('Y-m-d h:i:s a', time()).PHP_EOL);
fwrite($fp, 'Merchant Order ID: '.$result['merchant_order_id'].PHP_EOL);
fwrite($fp, 'Payment ID: '.$result['payment_id'].PHP_EOL);
fwrite($fp, 'Payment Status: '.$result['payment_status'].PHP_EOL);
fwrite($fp, 'Payment Status Detail: '.$result['payment_status_detail'].PHP_EOL);
fwrite($fp, 'Processing Mode: '.$result['processing_mode'].PHP_EOL);
fwrite($fp, PHP_EOL);
fclose($fp);

header("Location: ".$result['back_url']);
exit();
?>
