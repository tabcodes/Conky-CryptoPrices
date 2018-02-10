<?php

$desiredCurrencies = ['BTC', 'ETH', 'XMR', 'ADA', 'GBX', 'XLM'];

try {
    $cryptoArray = json_decode(file_get_contents("https://api.coinmarketcap.com/v1/ticker/?limit=0"), true);
} catch(Exception $e) {
    return "";
}

$finalArr = [];

foreach($cryptoArray as $currency) {
    if( !in_array($currency['symbol'], $desiredCurrencies)) {
        continue;
    }
    $cName = $currency['symbol'];
    $cPrice = number_format($currency['price_usd'], 2, ".", ",");
    $cDaily = $currency['percent_change_24h'] . "%";
    $color = ($cDaily > 0) ? "\${color3}" : "\${color2}";
    
    $finalStr = "\${voffset 5}{$cName} ";
    $finalStr .= "\${alignc}\$\${$cPrice} {$color} \${alignr}{$cDaily}\${color}\n";
    echo $finalStr;
}

