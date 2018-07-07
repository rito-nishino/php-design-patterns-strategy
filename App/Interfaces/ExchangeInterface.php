<?php

namespace App\Interfaces;

interface ExchangeInterface
{
    public function currencyConversion();
    public function symbol($money);
}