<?php

declare(strict_types=1);

return [
    'openapi-file' => 'https://gitlab.com/tezos/tezos/-/raw/master/docs/api/dal-node-openapi.json',
    'namespace'    => 'Pezos\Generated\Dal',
    'directory'    => \dirname(__DIR__) . '/generated/dal-node',
    'use-fixer'    => true,
];
