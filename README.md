# This is a work in Progress

#  HTML Minifier

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

A PHP package to minify HTMLs, Javascripts and CSSs. Supports [PSR-4](http://www.php-fig.org/psr/psr-4/) Autoloader.

## Install

Via Composer

``` bash
$ composer require doncadavona/html_minifier
```

## Usage

``` php
use DonCadavona\HtmlMinifier\HtmlMinifier;

// Sample HTML string
$html = '
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		html {
			padding-top: 20px;
		}
		body {
			margin: 0px;
		}
	</style>
</head>
<body>
	<h1>Hello World</h1>
	<script>
		// This is single-line a comment.
		/* This is a
		multi-line 
		comment. */
		/**
		 * This is a doc block comment.
		 */
	</script>
</body>
</html>
';

// Minify the HTML
echo HtmlMinifier::minify($html);

// <!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>Document</title><style type="text/css"> html { padding-top: 20px; } body { margin: 0px; } </style></head><body><h1>Hello World</h1><script></script></body></html>

// Minify the HTML and remove JavaScripts and CSSs:
echo HtmlMinifier::minify($html, true, true);

// <!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>Document</title></head><body><h1>Hello World</h1></body></html>

```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email `dcadavona@gmail.com` instead of using the issue tracker.

## Credits

- [Oleg Gheorghita](https://github.com/smilemd) for his [yii2-htmlcompress](https://github.com/smilemd/yii2-htmlcompress) package.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/doncadavona/html_minifier.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/doncadavona/html_minifier/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/doncadavona/html_minifier.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/doncadavona/html_minifier.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/doncadavona/html_minifier.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/doncadavona/html_minifier
[link-travis]: https://travis-ci.org/doncadavona/html_minifier
[link-scrutinizer]: https://scrutinizer-ci.com/g/doncadavona/html_minifier/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/doncadavona/html_minifier
[link-downloads]: https://packagist.org/packages/doncadavona/html_minifier
[link-author]: https://github.com/doncadavona
[link-contributors]: ../../contributors