<?php

require 'vendor/autoload.php';

define('SITE_URL', 'http://localhost');

$paypal = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'Ac_4nOdSw6ciRyBk3B1Zq4RcAr7gRopu9eRAR7pP28ezVU5_t-8n3vor-IE5ZQ1fesbcAK4_voBC2LBQ',
        'EC0J_v4b3p70nSO5lzb8SdwYI5tsXPp-aSogx3RNXeBXjbJj9HCzvk4pirpERJtxdc7uFCtut3OSGXBK'
    )
);