<?php

namespace App\Requests;

use Spatie\LaravelData\Data;
use Spatie\TypeScriptTransformer\Attributes\TypeScript;

#[TypeScript]
class GetListStocksRequest extends Data
{
    public function __construct(
        public ?int $limit,
        public ?int $offset,
        public ?string $search,
        public ?string $symbol,
        public ?string $endpoint
    ) {
    }
}
