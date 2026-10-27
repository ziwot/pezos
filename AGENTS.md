# AGENTS.md

Guidance for AI coding agents working in this repository.

## Overview

**Pezos** (`ziwot/pezos`) is a PHP library for Tezos blockchain interaction:
key handling (Ed25519 / Secp256k1), signing & verification, address validation,
Base58Check encoding, and auto-generated RPC clients.

- Language: **PHP >= 8.1**, requires `ext-sodium` (and `ext-gmp` in CI).
- Type: Composer library (`type: library`), PSR-4 autoloaded.
- License: MIT.

## Repository layout

| Path | Description |
|---|---|
| `src/` | Hand-written library code (small, ~500 lines total) |
| `src/Keys/` | Key classes: `Key`, `PubKey`, `Curve`, `Ed25519`, `Secp256K1`, `Signature` |
| `src/Http/` | `ClientFactory` for generated RPC clients |
| `src/crypto.php` | Functions for Base58Check encode/decode etc. |
| `src/_bootstrap.php` | Autoload `files` entry — requires `crypto.php` |
| `src/Prefix.php` | Tezos address/key/sig prefixes (`tz1`, `edsk`, ...) and their byte arrays |
| `generated/` | **Auto-generated** Jane OpenAPI clients — do NOT hand-edit |
| `config/` | Jane generator configs (`jane-*-openapi.php`) |
| `tests/Unit/`, `tests/Integration/` | PHPUnit test suites |
| `Makefile` | All dev tasks (see below) |

## Commands

All tasks go through `make` (run `make help` to list them):

```bash
composer install      # install deps (or: make install)
make up               # start sandbox node (Docker, ghcr.io/tez-capital/tezbox:tezos-v25.2, RPC on :8732)
make down             # stop the sandbox

make test             # all tests (with --testdox)
make test-u           # unit tests only
make test-i           # integration tests only (needs sandbox via `make up`, or NODE_URL set)

vendor/bin/phpunit tests/Unit/Keys/KeyTest.php   # run a single test file

make cs-check         # php-cs-fixer dry run (CI lint step)
make cs-fix           # auto-fix style

make jane-all         # wipe & regenerate all API clients
make jane CONFIG=config/jane-dal-openapi.php   # regenerate one client
```

CI (`.github/workflows/tests.yml`) runs: `cs-check` → `test-u` → `test-i` with
`NODE_URL=https://rpc.shadownet.teztnets.com` on PHP 8.1.

Integration tests default to `NODE_URL=http://localhost:8732` (see
`phpunit.xml.dist`), matching the `make up` sandbox.

## Conventions

- **`declare(strict_types=1);`** at the top of every PHP file (enforced by fixer).
- php-cs-fixer with `@Symfony` ruleset + extras (see `.php-cs-fixer.dist.php`):
  aligned `=>`/`=` operators, `ordered_class_elements`, native function
  invocation with `\` prefix, no useless else/return. Run `make cs-fix` before
  finishing; `make cs-check` must pass.
- PSR-4 namespaces: `Pezos\` → `src/`, `Pezos\Generated\*\` (never edit).
- Runtime deps are minimal; heavy dev tooling (Jane, php-http) is require-dev.
- Architecture note: crypto code in `src/` is a PHP port of existing libraries
  (go-tezos, Taquito, ConseilJS, sotez) — when fixing/reimplementing, match
  test vectors from those ecosystems and the tests in `tests/Unit/`.
- Dev workflow (from README): 1. `make up`, 2. TDD with `make test`.

## Gotchas

- `generated/` is regenerated wholesale by `make jane-all` (it `rm -rf`s the
  directory first). Never commit manual edits there; change `config/*.php`
  or upstream OpenAPI specs instead.
- The sandbox port `8732` must be free before `make up` (container name:
  `sandbox-pezos`).
- `php_errors.log`, `.php-cs-fixer.cache`, `.phpunit.cache` are local
  artifacts — don't touch them (some are already gitignored).
