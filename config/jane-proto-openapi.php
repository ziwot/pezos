<?php

declare(strict_types=1);

return [
    'openapi-file' => 'https://gitlab.com/tezos/tezos/-/raw/master/docs/api/rio-openapi.json',
    'namespace'    => 'Pezos\Generated\Proto',
    'directory'    => \dirname(__DIR__) . '/generated/proto',
    'use-fixer'    => true,
];
