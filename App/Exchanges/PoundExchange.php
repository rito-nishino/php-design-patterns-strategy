<?php

namespace App\Exchanges;

use App\Interfaces\ExchangeInterface;

class PoundExchange implements ExchangeInterface
{
    private $yen = 0;

    private $rate = 1.4681;

    private $symbol = 'GBP';

    public function __construct($yen)
    {
        $this->yen = $yen;
    }

    public function currencyConversion()
    {
        return $this->yen * $this->rate;
    }

    public function symbol($money)
    {
        return sprintf('%s %.2f', $this->symbol, $money);
    }
}