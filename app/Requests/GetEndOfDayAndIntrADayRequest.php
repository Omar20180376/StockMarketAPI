<?php

namespace App\Requests;

use Carbon\Carbon;
use Spatie\LaravelData\Attributes\Validation\Required;
use Spatie\LaravelData\Data;
use Spatie\TypeScriptTransformer\Attributes\TypeScript;

#[TypeScript]
class GetEndOfDayAndIntrADayRequest extends Data
{
    public function __construct(
        #[Required]
        public string $endpoint,
        #[Required]
        public string $symbols,

        public ?int $offset,
        public ?int $limit,
        public ?Carbon $date_to,
        public ?Carbon $date_from,
        public ?string $sort,
        public ?string $interval
    ) {
    }
}
