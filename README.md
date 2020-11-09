# UUID Field for Symphony CMS

A field for [Symphony CMS][ext-Symphony CMS] that generates UUID values upon saving.

-   [Installation](#installation)
-   [Requirements](#dependencies)
-   [Dependencies](#dependencies)
-   [Support](#support)
-   [Contributing](#contributing)
-   [License](#license)

## Installation

Clone the latest version to your `/extensions` folder and run composer to install required packages (see, [Dependencies](#dependencies) below).

### Manually (git + composer)
```bash
$ git clone https://github.com/pointybeard/uuidfield.git
$ composer update -vv --profile -d ./uuidfield
```
After finishing the steps above, enable "UUID Field" though the administration interface or, if using [Orchestra][ext-Orchestra], with `bin/extension enable uuidfield`.

### With Orchestra

1. Add the following extension defintion to your `.orchestra/build.json` file in the `"extensions"` block:

```json
{
    "name": "uuidfield",
    "repository": {
        "url": "https://github.com/pointybeard/uuidfield.git"
    }
}
```

2. Run the following command to rebuild your Extensions

```bash
$ bin/orchestra build \
    --skip-import-sections \
    --database-skip-import-data \
    --database-skip-import-structure \
    --skip-create-author \
    --skip-skip-seeders \
    --skip-git-reset \
    --skip-composer \
    --skip-postbuild
```

## Requirements

-   This extension works with PHP 7.4 or above.

## Dependencies

This extension depends on the following Composer libraries:

-   [PHP Helpers][dep-helpers]
-   [Symphony Section Class Mapper][dep-classmapper]
-   [Symphony CMS: Extended Base Class Library][dep-symphony-extended]
-   [ramsey/uuid library](https://packagist.org/packages/ramsey/uuid)
-   [paragonie/random_compat](https://packagist.org/packages/paragonie/random_compat)

Run `composer install` on the `extension/uuidfield` directory to install these dependencies.

## Support

If you believe you have found a bug, please report it using the [GitHub issue tracker](https://github.com/pointybeard/uuidfield/issues),
or better yet, fork the library and submit a pull request.

## Contributing

We encourage you to contribute to this project. Please check out the [Contributing documentation](https://github.com/pointybeard/uuidfield/blob/master/CONTRIBUTING.md) for guidelines about how to get involved.

## Author
-   Alannah Kearney - http://github.com/pointybeard
-   See also the list of [contributors][ext-contributor] who participated in this project

## License

"UUID Field for Symphony CMS" is released under the [MIT License](http://www.opensource.org/licenses/MIT).

[dep-symphony-extended]: https://github.com/pointybeard/symphony-extended
[ext-Symphony CMS]: http://getsymphony.com
[ext-Orchestra]: https://github.com/pointybeard/orchestra
[dep-helpers]: https://github.com/pointybeard/helpers
[dep-classmapper]: https://github.com/pointybeard/symphony-classmapper
[ext-contributor]: https://github.com/pointybeard/uuidfield/contributors
