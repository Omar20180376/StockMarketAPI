<?php

namespace App\Services\Interface;

use App\Requests\GetEndOfDayAndIntrADayRequest;
use App\Requests\GetListStocksRequest;

interface MarketStockServiceInterface
{
    public function ListStocks(GetListStocksRequest $getListStocksRequest);

    public function EndOfDayAndIntrADay(GetEndOfDayAndIntrADayRequest $endOfDayAndIntrADayRequest);
}
