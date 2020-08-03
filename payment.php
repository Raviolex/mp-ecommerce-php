<?php
header("HTTP/1.1 200 OK");

require __DIR__ .  '/vendor/autoload.php';

MercadoPago\SDK::setAccessToken('TEST-5989266223361037-073121-a531f5a6525925ed15a78001a75b950a-75765143');

$fp = fopen('log.txt', 'a');
fwrite($fp, var_export($_GET, true));
fclose($fp);

$type = $_GET['topic'];
$id = $_GET['id'];

$payment = FALSE;
switch($type) {
    case "payment":
        $payment = MercadoPago\Payment::find_by_id($id);
        break;
}

if ($payment) {
    $fp = fopen('payments.txt', 'a');
    fwrite($fp, "Payment ID: ".$id.PHP_EOL);
    fwrite($fp, "Compra: ".$payment->external_reference.PHP_EOL);
    fwrite($fp, "Type: ".$payment->operation_type.PHP_EOL);
    fwrite($fp, "Status: ".$payment->status.PHP_EOL);
    fwrite($fp, "Status Detail: ".$payment->status_detail.PHP_EOL);
    fwrite($fp, "Date Created: ".$payment->date_created.PHP_EOL);
    fwrite($fp, "Date Approved: ".$payment->date_approved.PHP_EOL);
    fwrite($fp, "Amount: ".$payment->transaction_amount.PHP_EOL);
    fwrite($fp, "Customer: ".$payment->payer->first_name.' '.$payment->payer->last_name.' <'.$payment->payer->email.'>'.PHP_EOL);
    fwrite($fp, "Payment Type: ".$payment->payment_type_id.PHP_EOL);
    fwrite($fp, "Payment Method: ".$payment->payment_method_id.PHP_EOL);
    fwrite($fp, PHP_EOL);
    fclose($fp);
}
?>
