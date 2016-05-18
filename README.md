# UUID Field

Input field that stores dedicated UUID values.

## Installation

Information about [installing and updating extensions](http://getsymphony.com/learn/tasks/view/install-an-extension/) can be found in the Symphony documentation at <http://getsymphony.com/learn/>.

1. Upload the 'uuidfield' folder in this archive to your Symphony 'extensions' folder.
2. Enable it by selecting the "Field: UUID", choose Enable from the with-selected menu, then click Apply.
3. You can now add the "UUID" field to your sections.

### Requirements

This extension requires the **[ramsey/uuid library](https://packagist.org/packages/ramsey/uuid)** (`ramsey/uuid`) to be installed via Composer. Either require this in your main composer.json file, or run `composer install` on the `extension/uuidfield` directory.

    "require": {
        "php": ">=5.6.6",
        "ramsey/uuid": "~3.4"
    }

## CHANGE LOG
    1.0.0 - Initial release
