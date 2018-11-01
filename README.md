# UUID Field for Symphony CMS

- Version: v1.0.1
- Date: November 01 2018
- [Release notes](https://github.com/pointybeard/uuidfield/blob/master/CHANGELOG.md)
- [GitHub repository](https://github.com/pointybeard/uuidfield)

A field for Symphony CMS that generates UUID values upon saving.

## Installation

This is an extension for [Symphony CMS](http://getsymphony.com). Add it to the `/extensions` folder of your Symphony CMS installation, then enable it though the interface.

### Requirements

This extension requires the **[ramsey/uuid library](https://packagist.org/packages/ramsey/uuid)** (`ramsey/uuid`) and **[paragonie/random_compat](https://packagist.org/packages/paragonie/random_compat)** to be installed via Composer. Either require this in your main composer.json file, or run `composer install` on the `extension/uuidfield` directory.

    "require": {
        "php": ">=5.6.6",
        "ramsey/uuid": "~3.4",
        "paragonie/random_compat": "<9.99"
    }

## Support

If you believe you have found a bug, please report it using the [GitHub issue tracker](https://github.com/pointybeard/uuidfield/issues),
or better yet, fork the library and submit a pull request.

## Contributing

We encourage you to contribute to this project. Please check out the [Contributing documentation](https://github.com/pointybeard/uuidfield/blob/master/CONTRIBUTING.md) for guidelines about how to get involved.

## License

"UUID Field for Symphony CMS" is released under the [MIT License](http://www.opensource.org/licenses/MIT).
