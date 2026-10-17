# Pezos 🌮

![qa](https://github.com/ziwot/pezos/actions/workflows/qa.yml/badge.svg)
![tests](https://github.com/ziwot/pezos/actions/workflows/tests.yml/badge.svg)
[![Latest Stable Version](https://poser.pugx.org/ziwot/pezos/v)](https://packagist.org/packages/ziwot/pezos)
[![Total Downloads](https://poser.pugx.org/ziwot/pezos/downloads)](https://packagist.org/packages/ziwot/pezos)
[![Latest Unstable Version](https://poser.pugx.org/ziwot/pezos/v/unstable)](https://packagist.org/packages/ziwot/pezos)
[![License](https://poser.pugx.org/ziwot/pezos/license)](https://packagist.org/packages/ziwot/pezos)
[![PHP Version Require](https://poser.pugx.org/ziwot/pezos/require/php)](https://packagist.org/packages/ziwot/pezos)

PHP lib for Tezos

`composer require ziwot/pezos`

## Features

Handles Secp256k1 and Ed25519 keys.

### Instanciate key from secret key

```php
$key = Pezos\Keys\Key::fromBase58(
  'edskRkGanpJ2fEBdV5xjhFS6DaB5CUsGwZPuTD73VoioQYTTJJKcxJPXXa5FrjA2e8y2LKqwdXNqB9WB4yAQG3gaQTnp15LwDu',
);
$key->getPublicKey();
// "edpkvCdu6RSSe379P2ACo8rGoqNRzQRRwNmHfj1dBr4DnSTKwCNxi5"
$key->getAddress();
// "tz1PAeuxsMA76x5cnKPkWKof2iGneN3Mb1eQ"
```

### Instanciate key from public key

```php
$pubKey = Pezos\Keys\PubKey::fromBase58(
  'edpkvCdu6RSSe379P2ACo8rGoqNRzQRRwNmHfj1dBr4DnSTKwCNxi5',
);
$pubKey->getAddress();
// "tz1PAeuxsMA76x5cnKPkWKof2iGneN3Mb1eQ"
```

### Sign messages

```php
$privKey->sign('05010000000548656c6c6f');
// edsigtxHb4HCsgf3zLLcTx4Rj23Y3CSJf8jaRXwoVHZJgSsMhzFoxKtinx2TT5FgYKprLVQ9nq8o93MCpmxaTuRB7igT9b6nZyf
```

### Verify signed messages

```php
$pubKey->verifySignature(
  'edsigtxHb4HCsgf3zLLcTx4Rj23Y3CSJf8jaRXwoVHZJgSsMhzFoxKtinx2TT5FgYKprLVQ9nq8o93MCpmxaTuRB7igT9b6nZyf',
  '05010000000548656c6c6f',
);
// true
```

### RPC

RPC clients generated with [jane](https://jane.readthedocs.io/en/latest/documentation/OpenAPI.html) are available.

The open api files are taken from [the official Tezos repo](https://gitlab.com/tezos/tezos/-/tree/master/docs/api).

## Dev workflow

1. Launch services with `make up`
2. If possible do TDD, `make test`

## Resources

Thanks to these libraries from which code is just translated to PHP.

- <https://github.com/goat-systems/go-tezos>
- <https://github.com/ecadlabs/taquito>
- <https://github.com/Cryptonomic/ConseilJS>
- <https://github.com/AndrewKishino/sotez>
