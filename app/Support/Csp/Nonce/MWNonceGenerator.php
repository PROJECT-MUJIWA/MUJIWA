<?php

declare(strict_types=1);

namespace App\Support\Csp\Nonce;

use Illuminate\Support\Facades\Vite;
use Spatie\Csp\Nonce\NonceGenerator;

final class MWNonceGenerator implements NonceGenerator
{
    public function generate(): string
    {
        return (string) Vite::cspNonce();
    }
}
