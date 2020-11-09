<?php

declare(strict_types=1);

namespace pointybeard\Symphony\Extensions\UuidField\Traits;

use pointybeard\Symphony\Classmapper\FilterFactory;

trait HasUuidTrait
{
    public static function loadFromUuid(string $uuid): ?self
    {
        $result = self::fetch(
            FilterFactory::build('Basic', 'uuid', $uuid)
        )->current();

        return $result instanceof self
            ? $result
            : null
        ;
    }
}
