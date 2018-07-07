<?php
require_once 'autoload.php';

use App\Exchanges\DollarExchange;
use App\Exchanges\EuroExchange;
use App\Exchanges\PoundExchange;

$jp_yen = 1000;

$doller = new DollarExchange($jp_yen);
$euro = new EuroExchange($jp_yen);
$pond = new PoundExchange($jp_yen);

echo sprintf('JPY %d<br>↓', $jp_yen);
echo '<br>';
echo $doller->symbol($doller->currencyConversion());
echo '<br>';
echo $euro->symbol($euro->currencyConversion());
echo '<br>';
echo $pond->symbol($pond->currencyConversion());
echo '<br>';

// -----------------------------------
// MoneyExchange
echo '<br><br><br>';
use App\Exchanges\MoneyExchange;

$jp_yen = 1000;

$money = new MoneyExchange($jp_yen);

echo sprintf('JPY %d<br>↓', $jp_yen);
echo '<br>';
echo $money->symbol($money->currencyConversion('usa'), 'usa');
echo '<br>';
echo $money->symbol($money->currencyConversion('euro'), 'euro');
echo '<br>';
echo $money->symbol($money->currencyConversion('england'), 'england');
echo '<br>';