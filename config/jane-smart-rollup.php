<?php

declare(strict_types=1);

return [
    'openapi-file' => 'https://gitlab.com/tezos/tezos/-/raw/master/docs/api/rio-smart-rollup-node-openapi.json',
    'namespace'    => 'Pezos\Generated\Rollup',
    'directory'    => \dirname(__DIR__) . '/generated/smart-rollup-node',
    'use-fixer'    => true,
];
