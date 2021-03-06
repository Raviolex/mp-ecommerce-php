<?php

// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';

//MercadoPago\SDK::setAccessToken("APP_USR-2767046342004813-042418-0949c0cfe52c3dffb8b0ec2e3b59a68c-469485398");

//  MercadoPago\SDK::setAccessToken("APP_USR-5989266223361037-073121-014a414870f0e63bd698e86037af6fdd-75765143");

MercadoPago\SDK::setAccessToken("APP_USR-6300848884069710-050717-e6e82bb1dcba9f15dc8d66459cf040ca-47398782");






$type = isset($_GET["type"]) ? $_GET["type"] : isset($_POST["type"]) ? $_POST["type"] : null;
$id = isset($_GET["id"]) ? $_GET["id"] : isset($_POST["id"]) ? $_POST["id"] : null;

switch ($type) {
    case "payment":
        $payment = MercadoPago\Payment::find_by_id($id);
        if (!empty($payment)) {
            header("HTTP/1.1 200 OK");
        } else {
            header("HTTP/1.1 400 NOT_OK");
        }
        break;
    case "plan":
        $plan = MercadoPago\Plan::find_by_id($id);
        if (!empty($plan)) {
            header("HTTP/1.1 200 OK");
        } else {
            header("HTTP/1.1 400 NOT_OK");
        }
        break;
    case "subscription":
        $plan = MercadoPago\Subscription::find_by_id($id);
        if (!empty($plan)) {
            header("HTTP/1.1 200 OK");
        } else {
            header("HTTP/1.1 400 NOT_OK");
        }
        break;
    case "invoice":
        $plan = MercadoPago\Invoice::find_by_id($id);
        if (!empty($plan)) {
            header("HTTP/1.1 200 OK");
        } else {
            header("HTTP/1.1 400 NOT_OK");
        }
        break;
    default:
        header("HTTP/1.1 200 OK");
        break;
}
