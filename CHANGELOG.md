# Change Log
All notable changes to this project will be documented in this file.
This project adheres to [Semantic Versioning](http://semver.org/).

## [1.1.0][] - 2020-11-09
#### Changed
-   Require PHP 7.4+

#### Added
-   Add HasUuidTrait trait for use with Symphony CMS: Section Class Mapper library

## [1.0.2][] - 2019-04-30
#### Changed
-   Updated to support PHP7+
-   Using 2.x of `paragonie/random_compat` and `ramsey/uuid` 3.8.x

## [1.0.1][] - 2018-11-01
#### Added
-   Added `paragonie/random_compat` (at <9.99) library to `composer.json`. Ensures PHP 5.6.x support for the `ramsey/uuid` package.
-   Added `isUnique()` method in field class.
-   New entries will see the UUID field pre-populated.
-   Field in publish forms is disabled.

#### Changed
-   Removed all code relating to auto_generate. Now always required and will always auto generate a value.

## 1.0.0
#### Added
-   Initial release

[1.1.0]: https://github.com/pointybeard/uuidfield/compare/1.0.2...1.1.0
[1.0.2]: https://github.com/pointybeard/uuidfield/compare/1.0.1...1.0.2
[1.0.1]: https://github.com/pointybeard/uuidfield/compare/1.0.0...1.0.1
