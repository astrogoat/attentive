# An Attentive app for Strata

[![Latest Version on Packagist](https://img.shields.io/packagist/v/astrogoat/attentive.svg?style=flat-square)](https://packagist.org/packages/astrogoat/attentive)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/astrogoat/attentive/run-tests?label=tests)](https://github.com/astrogoat/attentive/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/astrogoat/attentive/Check%20&%20fix%20styling?label=code%20style)](https://github.com/astrogoat/attentive/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/astrogoat/attentive.svg?style=flat-square)](https://packagist.org/packages/astrogoat/attentive)

## Installation

You can install the package via composer:

```bash
composer require astrogoat/attentive
```

## Usage



## Testing

```bash
composer test
```

## Releasing a new version

Use the included GitHub action to create a new release.
Go to https://github.com/astrogoat/skeleton/actions/workflows/release.yml click the "Run workflow" dropdown, select your version level bump, and click the "Run workflow" button.
or run `gh workflow run release.yml` from your skeleton directory if you have the GitHub CLI installed locally.

**Important**: Make sure that the Miles Bot user is included in the list of users who can bypass required pull request requirement
Your repo -> Settings -> Branches -> Main (edit) -> "Allow specified actors to bypass required pull requests"


## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.


## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.


## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.


## Credits

- [garos4](https://github.com/astrogoat)
- [All Contributors](../../contributors)



## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
