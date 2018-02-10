# Conky-CryptoPrices
A small PHP script that outputs information on cryptocurrency prices in a Conky-friendly format.


I wanted my Conky sidebar to display information on cryptocurrencies I have invested in, so I wrote a PHP script to fetch information from the CoinMarketCap API and
output some info on them (symbol, price, daily percent change) in a manner that Conky will find helpful. 

To use this in your Conky scripts, add this to your conkyrc file:

${execpi 250 php /path/to/cryptoprices.php}
