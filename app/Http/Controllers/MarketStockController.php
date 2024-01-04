<?php

namespace App\Http\Controllers;

use App\Requests\GetEndOfDayAndIntrADayRequest;
use App\Requests\GetListStocksRequest;
use App\Services\Interface\MarketStockServiceInterface;

class MarketStockController extends Controller
{
    public function __construct(private readonly MarketStockServiceInterface $marketStockService)
    {
    }

    public function get(GetListStocksRequest $request): \Illuminate\Http\JsonResponse
    {

        $request = $this->marketStockService->ListStocks($request);

        return response()->json($request->object());

    }

    public function getEndOfDayAndIntrADay(GetEndOfDayAndIntrADayRequest $request): \Illuminate\Http\JsonResponse
    {
        //  $request->endpoint = $endpoint;
        // dd($request);
        $request = $this->marketStockService->EndOfDayAndIntrADay($request);

        return response()->json($request->object());

    }
}
