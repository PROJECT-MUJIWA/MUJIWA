<?php

declare(strict_types=1);

namespace App\Support\Csp\Policies;

use Spatie\Csp\Directive;
use Spatie\Csp\Policies\Basic;

final class MWCSP extends Basic
{
    public function configure(): void
    {
        parent::configure();

        /**
         * Nastavení CSP Nonce do script a style tagu
         */
        $this->addNonceForDirective(Directive::SCRIPT)
            ->addNonceForDirective(Directive::STYLE);
    }
}
