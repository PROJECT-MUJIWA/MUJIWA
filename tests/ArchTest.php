<?php

declare(strict_types=1);

/**
 * PestPHP Arch test global
 */
arch()->preset()->php();

arch()->preset()->security();

arch('Vyžadovat Strict types')
    ->expect('App')
    ->toUseStrictTypes();
