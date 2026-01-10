# PHPRise HTTP Contract

This is an [Atomic Repository](PHILOSOPHY.md#1-atomic-repositories-the-atom) based on the [OTAKU Manifesto](PHILOSOPHY.md).

The objective of this repository is to provide a standardized set of HTTP request interfaces for the PHPRise ecosystem, ensuring consistent behavior across different connectors and adapters.

## Installation

```bash
composer require phprise/http-contract
```

## Usage

These interfaces define the structure for specialized HTTP requests (Store, Update, List, etc.).

```php
use Phprise\Http\Contract\StoreRequestInterface;
use Phprise\DataTransferObject\TransferObjectInterface;

class MyStoreRequest implements StoreRequestInterface
{
    public function payload(): TransferObjectInterface
    {
        // implementation
    }

    // ... Psr\Http\Message\RequestInterface implementation
}
```


## Philosophy
We follow **The OTAKU Manifesto: Fluid Structure Design**.

1. **O** - Own your Discipline (Be strict with yourself)
2. **T** - Tools for Composition (Compose like Unix)
3. **A** - Armor the Core (Protect the heart of the business)
4. **K** - Keep Infrastructure Silent (Infrastructure is just a detail)
5. **U** - Universal Language & Contracts (Speak the user's language via clear contracts)

Please read more about it in [PHILOSOPHY.md](PHILOSOPHY.md).


## License
MIT License

Free to use, modify, and distribute.

## Contributing
See how to contribute in [CONTRIBUTING.md](CONTRIBUTING.md).

## Code of Conduct
See our code of conduct in [CODE_OF_CONDUCT.md](CODE_OF_CONDUCT.md).

## Security
See our security policy in [SECURITY.md](SECURITY.md).
