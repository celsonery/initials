# Utility for return Initials of Names in PHP - by Celso Nery
A package utility to work with Initials Names, for show in front if the user do not have a picture.

[![Maintainer](http://img.shields.io/badge/maintainer-@celsonery-blue.svg?style=flat-square)](https://twitter.com/celsonery)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/celsonery/php-initials.svg?style=flat-square)](https://packagist.org/packages/celsonery/php-initials)
[![Latest Version](https://img.shields.io/github/release/celsonery/php-initials.svg?style=flat-square)](https://github.com/celsonery/php-initials/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build](https://img.shields.io/scrutinizer/build/g/celsonery/php-initials.svg?style=flat-square)](https://scrutinizer-ci.com/g/celsonery/php-initials)
[![Quality Score](https://img.shields.io/scrutinizer/g/celsonery/php-initials.svg?style=flat-square)](https://scrutinizer-ci.com/g/celsonery/php-initials)
[![Total Downloads](https://img.shields.io/packagist/dt/celsonery/php-initials.svg?style=flat-square)](https://packagist.org/packages/ccelsonery/php-initials)

## Installation

This package available by Composer:

```bash
"celsonery/initials": "^1.0"
```

or run

```bash
composer require celsonery/initials
```

## How to use

In your class import this trait
```php
use CelsoNery\EanUtils\Services\Traits\Initials;

class YourClassName
{
    use Initials;
    
    public function yourMethod()
    {
        $initials = $this->getInitials("User Name"));
    }
}
```


## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Support

###### Security: If you discover any security related issues, please email celso.nery@gmail.com instead of using the issue tracker.

Thank you

## Credits

- [Celso Nery](https://github.com/celsonery) (Maintainer/Developer)
- [All Contributors](https://github.com/celsonery/php-initial/contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
