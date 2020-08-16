<!DOCTYPE html>
<html
    class="supports-animation supports-columns svg no-touch no-ie no-oldie no-ios supports-backdrop-filter as-mouseuser"
    lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=1024">
    <title><?php echo htmlspecialchars( $_POST["title"] ); ?> - Tienda e-commerce</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="format-detection" content="telephone=no">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./assets/category-landing.css" media="screen, print">

    <link rel="stylesheet" href="./assets/category.css" media="screen, print">

    <link rel="stylesheet" href="./assets/merch-tools.css" media="screen, print">

    <link rel="stylesheet" href="./assets/fonts" media="">
    <style>
    .as-filter-button-text {
        font-size: 26px;
        font-weight: 700;
        color: #333;
    }

    .row.as-fixed-nav {
        border-bottom: 1px solid #ddd;
    }

    .as-producttile-tilehero.with-paddlenav.with-paddlenav-onhover {
        height: 330px;
    }

    .as-footnotes {
        background: #333;
        color: #fff;
        padding: 16px 40px;
    }
    </style>
    <style type="text/css">
    @keyframes loading-rotate {
        100% {
            transform: rotate(360deg);
        }
    }

    @keyframes loading-dash {
        0% {
            stroke-dasharray: 1, 200;
            stroke-dashoffset: 0;
        }

        50% {
            stroke-dasharray: 100, 200;
            stroke-dashoffset: -20px;
        }

        100% {
            stroke-dasharray: 89, 200;
            stroke-dashoffset: -124px;
        }
    }

    @keyframes loading-fade-in {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .mp-spinner {
        position: absolute;
        top: 100px;
        left: 50%;
        font-size: 70px;
        margin-left: -35px;
        animation: loading-rotate 2.5s linear infinite;
        transform-origin: center center;
        width: 1em;
        height: 1em;
    }

    .mp-spinner-path {
        stroke-dasharray: 1, 200;
        stroke-dashoffset: 0;
        animation: loading-dash 1.5s ease-in-out infinite;
        stroke-linecap: round;
        stroke-width: 2px;
        stroke: #009ee3;
    }
    </style>
    <style type="text/css">
    .mercadopago-button {
        padding: 0 1.7142857142857142em;
        font-family: "Helvetica Neue", Arial, sans-serif;
        font-size: 0.875em;
        line-height: 2.7142857142857144;
        background: #009ee3;
        border-radius: 0.2857142857142857em;
        color: #fff;
        cursor: pointer;
        border: 0;
    }
    </style>
    <style type="text/css">
    @keyframes loading-rotate {
        100% {
            transform: rotate(360deg);
        }
    }

    @keyframes loading-dash {
        0% {
            stroke-dasharray: 1, 200;
            stroke-dashoffset: 0;
        }

        50% {
            stroke-dasharray: 100, 200;
            stroke-dashoffset: -20px;
        }

        100% {
            stroke-dasharray: 89, 200;
            stroke-dashoffset: -124px;
        }
    }

    @keyframes loading-fade-in {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .mp-spinner {
        position: absolute;
        top: 100px;
        left: 50%;
        font-size: 70px;
        margin-left: -35px;
        animation: loading-rotate 2.5s linear infinite;
        transform-origin: center center;
        width: 1em;
        height: 1em;
    }

    .mp-spinner-path {
        stroke-dasharray: 1, 200;
        stroke-dashoffset: 0;
        animation: loading-dash 1.5s ease-in-out infinite;
        stroke-linecap: round;
        stroke-width: 2px;
        stroke: #009ee3;
    }
    </style>
    <style type="text/css">
    .mercadopago-button {
        padding: 0 1.7142857142857142em;
        font-family: "Helvetica Neue", Arial, sans-serif;
        font-size: 0.875em;
        line-height: 2.7142857142857144;
        background: #009ee3;
        border-radius: 0.2857142857142857em;
        color: #fff;
        cursor: pointer;
        border: 0;
    }
    </style>
    <style type="text/css">
    @keyframes loading-rotate {
        100% {
            transform: rotate(360deg);
        }
    }

    @keyframes loading-dash {
        0% {
            stroke-dasharray: 1, 200;
            stroke-dashoffset: 0;
        }

        50% {
            stroke-dasharray: 100, 200;
            stroke-dashoffset: -20px;
        }

        100% {
            stroke-dasharray: 89, 200;
            stroke-dashoffset: -124px;
        }
    }

    @keyframes loading-fade-in {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .mp-spinner {
        position: absolute;
        top: 100px;
        left: 50%;
        font-size: 70px;
        margin-left: -35px;
        animation: loading-rotate 2.5s linear infinite;
        transform-origin: center center;
        width: 1em;
        height: 1em;
    }

    .mp-spinner-path {
        stroke-dasharray: 1, 200;
        stroke-dashoffset: 0;
        animation: loading-dash 1.5s ease-in-out infinite;
        stroke-linecap: round;
        stroke-width: 2px;
        stroke: #009ee3;
    }
    </style>
    <style type="text/css">
    .mercadopago-button {
        padding: 0 1.7142857142857142em;
        font-family: "Helvetica Neue", Arial, sans-serif;
        font-size: 0.875em;
        line-height: 2.7142857142857144;
        background: #009ee3;
        border-radius: 0.2857142857142857em;
        color: #fff;
        cursor: pointer;
        border: 0;
    }
    </style>
    <style type="text/css">
    @keyframes loading-rotate {
        100% {
            transform: rotate(360deg);
        }
    }

    @keyframes loading-dash {
        0% {
            stroke-dasharray: 1, 200;
            stroke-dashoffset: 0;
        }

        50% {
            stroke-dasharray: 100, 200;
            stroke-dashoffset: -20px;
        }

        100% {
            stroke-dasharray: 89, 200;
            stroke-dashoffset: -124px;
        }
    }

    @keyframes loading-fade-in {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .mp-spinner {
        position: absolute;
        top: 100px;
        left: 50%;
        font-size: 70px;
        margin-left: -35px;
        animation: loading-rotate 2.5s linear infinite;
        transform-origin: center center;
        width: 1em;
        height: 1em;
    }

    .mp-spinner-path {
        stroke-dasharray: 1, 200;
        stroke-dashoffset: 0;
        animation: loading-dash 1.5s ease-in-out infinite;
        stroke-linecap: round;
        stroke-width: 2px;
        stroke: #009ee3;
    }
    </style>
    <style type="text/css">
    .mercadopago-button {
        padding: 0 1.7142857142857142em;
        font-family: "Helvetica Neue", Arial, sans-serif;
        font-size: 0.875em;
        line-height: 2.7142857142857144;
        background: #009ee3;
        border-radius: 0.2857142857142857em;
        color: #fff;
        cursor: pointer;
        border: 0;
    }
    </style>
    <style type="text/css">
    @keyframes loading-rotate {
        100% {
            transform: rotate(360deg);
        }
    }

    @keyframes loading-dash {
        0% {
            stroke-dasharray: 1, 200;
            stroke-dashoffset: 0;
        }

        50% {
            stroke-dasharray: 100, 200;
            stroke-dashoffset: -20px;
        }

        100% {
            stroke-dasharray: 89, 200;
            stroke-dashoffset: -124px;
        }
    }

    @keyframes loading-fade-in {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .mp-spinner {
        position: absolute;
        top: 100px;
        left: 50%;
        font-size: 70px;
        margin-left: -35px;
        animation: loading-rotate 2.5s linear infinite;
        transform-origin: center center;
        width: 1em;
        height: 1em;
    }

    .mp-spinner-path {
        stroke-dasharray: 1, 200;
        stroke-dashoffset: 0;
        animation: loading-dash 1.5s ease-in-out infinite;
        stroke-linecap: round;
        stroke-width: 2px;
        stroke: #009ee3;
    }
    </style>
    <style type="text/css">
    .mercadopago-button {
        padding: 0 1.7142857142857142em;
        font-family: "Helvetica Neue", Arial, sans-serif;
        font-size: 0.875em;
        line-height: 2.7142857142857144;
        background: #009ee3;
        border-radius: 0.2857142857142857em;
        color: #fff;
        cursor: pointer;
        border: 0;
    }
    </style>
    <style type="text/css">
    @keyframes loading-rotate {
        100% {
            transform: rotate(360deg);
        }
    }

    @keyframes loading-dash {
        0% {
            stroke-dasharray: 1, 200;
            stroke-dashoffset: 0;
        }

        50% {
            stroke-dasharray: 100, 200;
            stroke-dashoffset: -20px;
        }

        100% {
            stroke-dasharray: 89, 200;
            stroke-dashoffset: -124px;
        }
    }

    @keyframes loading-fade-in {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .mp-spinner {
        position: absolute;
        top: 100px;
        left: 50%;
        font-size: 70px;
        margin-left: -35px;
        animation: loading-rotate 2.5s linear infinite;
        transform-origin: center center;
        width: 1em;
        height: 1em;
    }

    .mp-spinner-path {
        stroke-dasharray: 1, 200;
        stroke-dashoffset: 0;
        animation: loading-dash 1.5s ease-in-out infinite;
        stroke-linecap: round;
        stroke-width: 2px;
        stroke: #009ee3;
    }
    </style>
    <style type="text/css">
    .mercadopago-button {
        padding: 0 1.7142857142857142em;
        font-family: "Helvetica Neue", Arial, sans-serif;
        font-size: 0.875em;
        line-height: 2.7142857142857144;
        background: #009ee3;
        border-radius: 0.2857142857142857em;
        color: #fff;
        cursor: pointer;
        border: 0;
    }

    .as-accessories-filter-tile {
        margin: 0 auto;
        color: green;
    }

    .as-accessories-filter-tile .as-filter-button-text {
        color: green;
    }

    .payment-info {
        margin: 0 auto 100px auto;
        width: 50%;
        padding: 30px;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .payment-info .payment-info-item {}

    .payment-info .payment-info-item span {
        display: block;
        font-size: 13px;
        text-transform: uppercase;
        color: #848484;
        font-weight: bold;
    }
    </style>
</head>



<body class="as-theme-light-heroimage">
    <?php
        // Loading Composer
        require __DIR__ . '/vendor/autoload.php';

        // Mercado Pago Credentials
        MercadoPago\SDK::setAccessToken( "APP_USR-6317427424180639-090914-5c508e1b02a34fcce879a999574cf5c9-469485398" ); // On Production
    //MercadoPago\SDK::setAccessToken( "YOUR_TEST_ACCESS_TOKEN" ); // On Sandbox ?>

    <div class="stack">

        <div class="as-search-wrapper" role="main">
            <div class="as-navtuck-wrapper">
                <div class="as-l-fullwidth  as-navtuck" data-events="event52">
                    <div>
                        <div class="pd-billboard pd-category-header">
                            <div class="pd-l-plate-scale">
                                <div class="pd-billboard-background">
                                    <img src="./assets/music-audio-alp-201709" alt="" width="1440" height="320"
                                        data-scale-params-2="wid=2880&amp;hei=640&amp;fmt=jpeg&amp;qlt=95&amp;op_usm=0.5,0.5&amp;.v=1503948581306"
                                        class="pd-billboard-hero ir">
                                </div>
                                <div class="pd-billboard-info">
                                    <h1 class="pd-billboard-header pd-util-compact-small-18">Tienda e-commerce</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="as-search-results as-filter-open as-category-landing as-desktop" id="as-search-results">

                <div id="accessories-tab" class="as-accessories-details">
                    <div class="as-accessories" id="as-accessories">
                        <div class="as-accessories-header">
                            <div class="as-search-results-count">
                                <span class="as-search-results-value"></span>
                            </div>
                        </div>
                        <div class="as-searchnav-placeholder" style="height: 77px;">
                            <div class="row as-search-navbar" id="as-search-navbar" style="width: auto;">
                                <div class="as-accessories-filter-tile large-6 small-3">
                                    <h2 class=" as-filter-button-text">
                                        Pago Exitoso
                                    </h2>
                                </div>

                            </div>
                        </div>
                        <div class="as-accessories-results  as-search-desktop">

                            <?php
                                $payment = MercadoPago\Payment::find_by_id( $_GET['collection_id'] );
                            ?>

                            <div class="payment-info">
                                <div class="payment-info-item">
                                    <span>ID Pago</span>
                                    <?php
                                        echo $payment->id;
                                    ?>
                                </div>
                                <div class="payment-info-item">
                                    <span>Tipo de Pago</span>
                                    <?php
                                        switch ( $payment->payment_type_id ) {
                                        case 'credit_card':
                                            echo 'Tarjeta de Crédito';
                                            break;
                                        case 'debit_card':
                                            echo 'Tarjeta de Debito';
                                            break;
                                        case 'ticket':
                                            echo 'Ticket';
                                            break;
                                        case 'atm':
                                            echo 'Cajero Automático';
                                            break;
                                        case 'bank_transfer':
                                            echo 'Transferencia Bancaria';
                                            break;
                                        case 'prepaid_card':
                                            echo 'Tarjeta Prepaga';
                                            break;
                                        case 'account_money':
                                            echo 'Saldo Mercado Pago';
                                            break;
                                        default:
                                            echo $payment->payment_type_id;
                                            break;

                                        }

                                    ?>
                                </div>
                                <div class="payment-info-item">
                                    <span>Método de Pago</span>
                                    <?php
                                        switch ( $payment->payment_method_id ) {
                                        case 'visa':
                                            echo 'Visa';
                                            break;
                                        case 'master':
                                            echo 'Mastercard';
                                            break;
                                        case 'amex':
                                            echo 'American Express';
                                            break;
                                        case 'mercadopago_cc':
                                            echo 'Mercado Pago + Banco Patagonia';
                                            break;
                                        case 'naranja':
                                            echo 'Naranja';
                                            break;
                                        case 'nativa':
                                            echo 'Nativa Mastercard';
                                            break;
                                        case 'tarshop':
                                            echo 'Tarjeta Shopping';
                                            break;
                                        case 'cabal':
                                            echo 'Cabal';
                                            break;
                                        case 'cencosud':
                                            echo 'Cencosud';
                                            break;
                                        case 'diners':
                                            echo 'Diners';
                                            break;
                                        case 'pagofacil':
                                            echo 'Pago Fácil';
                                            break;
                                        case 'argencard':
                                            echo 'Argencard';
                                            break;
                                        case 'maestro':
                                            echo 'Maestro';
                                            break;
                                        case 'debmaster':
                                            echo 'Mastercard Débito';
                                            break;
                                        case 'debcabal':
                                            echo 'Cabal Débito';
                                            break;
                                        case 'debvisa':
                                            echo 'Visa Débito';
                                            break;
                                        case 'rapipago':
                                            echo 'Rapipago';
                                            break;
                                        case 'redlink':
                                            echo 'Red Link';
                                            break;
                                        case 'bapropagos':
                                            echo 'Provincia NET';
                                            break;
                                        case 'cargavirtual':
                                            echo 'Kioscos y comercios cercanos';
                                            break;
                                        case 'cordobesa':
                                            echo 'Cordobesa';
                                            break;
                                        case 'cordial':
                                            echo 'Tarjeta Walmart';
                                            break;
                                        case 'cmr':
                                            echo 'CMR';
                                            break;
                                        case 'nevada':
                                            echo 'Nevada';
                                            break;
                                        case 'cobroexpress':
                                            echo 'CobroExpress';
                                            break;
                                        default:
                                            echo $payment->payment_method_id;
                                            break;
                                        }

                                    ?>
                                </div>
                                <div class="payment-info-item">
                                    <span>ID Orden</span>
                                    <?php echo htmlspecialchars( $_GET['merchant_order_id'] ); ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div role="alert" class="as-loader-text ally" aria-live="assertive"></div>
        <div class="as-footnotes">
            <div class="as-footnotes-content">
                <div class="as-footnotes-sosumi">
                    Todos los derechos reservados Tienda Tecno 2019
                </div>
            </div>
        </div>

    </div>
    <div class="mp-mercadopago-checkout-wrapper"
        style="z-index:-2147483647;display:block;background:rgba(0, 0, 0, 0.7);border:0;overflow:hidden;visibility:hidden;margin:0;padding:0;position:fixed;left:0;top:0;width:0;opacity:0;height:0;transition:opacity 220ms ease-in;">
        <svg class="mp-spinner" viewBox="25 25 50 50">
            <circle class="mp-spinner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10"></circle>
        </svg> </div>
    <div class="mp-mercadopago-checkout-wrapper"
        style="z-index:-2147483647;display:block;background:rgba(0, 0, 0, 0.7);border:0;overflow:hidden;visibility:hidden;margin:0;padding:0;position:fixed;left:0;top:0;width:0;opacity:0;height:0;transition:opacity 220ms ease-in;">
        <svg class="mp-spinner" viewBox="25 25 50 50">
            <circle class="mp-spinner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10"></circle>
        </svg> </div>
    <div class="mp-mercadopago-checkout-wrapper"
        style="z-index:-2147483647;display:block;background:rgba(0, 0, 0, 0.7);border:0;overflow:hidden;visibility:hidden;margin:0;padding:0;position:fixed;left:0;top:0;width:0;opacity:0;height:0;transition:opacity 220ms ease-in;">
        <svg class="mp-spinner" viewBox="25 25 50 50">
            <circle class="mp-spinner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10"></circle>
        </svg> </div>
    <div class="mp-mercadopago-checkout-wrapper"
        style="z-index:-2147483647;display:block;background:rgba(0, 0, 0, 0.7);border:0;overflow:hidden;visibility:hidden;margin:0;padding:0;position:fixed;left:0;top:0;width:0;opacity:0;height:0;transition:opacity 220ms ease-in;">
        <svg class="mp-spinner" viewBox="25 25 50 50">
            <circle class="mp-spinner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10"></circle>
        </svg> </div>
    <div class="mp-mercadopago-checkout-wrapper"
        style="z-index:-2147483647;display:block;background:rgba(0, 0, 0, 0.7);border:0;overflow:hidden;visibility:hidden;margin:0;padding:0;position:fixed;left:0;top:0;width:0;opacity:0;height:0;transition:opacity 220ms ease-in;">
        <svg class="mp-spinner" viewBox="25 25 50 50">
            <circle class="mp-spinner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10"></circle>
        </svg> </div>
    <div class="mp-mercadopago-checkout-wrapper"
        style="z-index:-2147483647;display:block;background:rgba(0, 0, 0, 0.7);border:0;overflow:hidden;visibility:hidden;margin:0;padding:0;position:fixed;left:0;top:0;width:0;opacity:0;height:0;transition:opacity 220ms ease-in;">
        <svg class="mp-spinner" viewBox="25 25 50 50">
            <circle class="mp-spinner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10"></circle>
        </svg> </div>
    <div id="ac-gn-viewport-emitter"> </div>
</body>

</html>