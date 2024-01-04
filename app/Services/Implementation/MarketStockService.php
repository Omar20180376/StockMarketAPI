<?php

namespace App\Services\Implementation;

use App\Requests\GetEndOfDayAndIntrADayRequest;
use App\Requests\GetListStocksRequest;
use App\Services\Interface\MarketStockServiceInterface;
use Illuminate\Support\Facades\Http;

class MarketStockService implements MarketStockServiceInterface
{
    public function ListStocks(GetListStocksRequest $getListStocksRequest)
    {
        //     dd("http://api.marketstack.com/v1/tickers/{$getListStocksRequest->symbol}/{$getListStocksRequest->endpoint}");

        $baseUrl = 'http://api.marketstack.com/v1/tickers';
        $url = $baseUrl;

        if ($getListStocksRequest->symbol !== null) {
            $url .= '/'.$getListStocksRequest->symbol;
        }

        if ($getListStocksRequest->endpoint !== null) {
            $url .= '/'.$getListStocksRequest->endpoint;
        }
        //  dd($url);
        $response = Http::get($url, [
            'access_key' => env('ACCESS_KEY', null),
            'limit' => $getListStocksRequest->limit,
            'offset' => $getListStocksRequest->offset,
            'search' => $getListStocksRequest->search,
        ]);

        return $response;
    }

    public function EndOfDayAndIntrADay(GetEndOfDayAndIntrADayRequest $endOfDayAndIntrADayRequest)
    {
        // dd("http://api.marketstack.com/v1/{$endpoint}");
        $baseUrl = 'http://api.marketstack.com/v1';
        $url = $baseUrl;

        if ($endOfDayAndIntrADayRequest->endpoint !== null) {
            $url .= '/'.$endOfDayAndIntrADayRequest->endpoint;
        }
        $response = Http::get($url, [
            'access_key' => env('ACCESS_KEY', null),
            'symbols' => $endOfDayAndIntrADayRequest->symbols,
            'limit' => $endOfDayAndIntrADayRequest->limit,
            'offset' => $endOfDayAndIntrADayRequest->offset,
            'date_to' => $endOfDayAndIntrADayRequest->date_to,
            'date_from' => $endOfDayAndIntrADayRequest->date_from,
            'sort' => $endOfDayAndIntrADayRequest->sort,
            'interval' => $endOfDayAndIntrADayRequest->interval,
        ]);

        return $response;
    }
}
