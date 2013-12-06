# My Silex skeleton

This is a Symfony-like boostrap for Silex. Things are pretty much where you expect them if you've worked with the
fullstack framework.

You could even drop-in properly decoupled Symfony2 Bundles, or easily switch to Symfony2 once your project grows.


## Usage

Add your PSR compliant code in `src/`, configurations are in `app/config/` and the routing is in there too.


## Installation

```bash
$ curl -sS https://getcomposer.org/installer | php
$ php composer.phar create-project ob/silex-skeleton=dev-master
```


## Contributing

See [CONTRIBUTING.md]() file.


## Running the Tests

```bash
$ phpunit -c app/
```


## Credits

- Fabien Potencier for his [Silex-Skeleton](https://github.com/silexphp/Silex-Skeleton)
- Matthias Noback for his blog post on [getting your Silex project structure right](http://php-and-symfony.matthiasnoback.nl/2012/01/silex-getting-your-project-structure-right/)


## License

This Silex skeleton is released under the MIT License. See the bundled [LICENSE]() file for details.
