<?php

declare(strict_types=1);

/*
 * This file is part of the "UUID Field for Symphony CMS" repository.
 *
 * Copyright 2016-2020 Alannah Kearney <hi@alannahkearney.com>
 *
 * For the full copyright and license information, please view the LICENCE
 * file that was distributed with this source code.
 */

if (!file_exists(__DIR__.'/vendor/autoload.php')) {
    throw new Exception(sprintf('Could not find composer autoload file %s. Did you run `composer update` in %s?', __DIR__.'/vendor/autoload.php', __DIR__));
}

require_once __DIR__.'/vendor/autoload.php';

use pointybeard\Symphony\Extended;

// Check if the class already exists before declaring it again.
if (!class_exists('\\Extension_UuidField')) {
    class Extension_UuidField extends Extended\AbstractExtension
    {
        public static function init()
        {
        }

        public function uninstall()
        {
            \Symphony::Database()->query('DROP TABLE `tbl_fields_uuid`');
        }

        public function update($previousVersion = false)
        {
            return \Symphony::Database()
                ->query('ALTER TABLE `tbl_fields_uuid` DROP COLUMN IF EXISTS `auto_generate`;')
            ;
        }

        public function install()
        {
            return \Symphony::Database()
                ->query(
                    'CREATE TABLE IF NOT EXISTS `tbl_fields_uuid` (
                      `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
                      `field_id` int(11) unsigned NOT NULL,
                      PRIMARY KEY (`id`),
                      UNIQUE KEY `field_id` (`field_id`)
                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;'
                )
            ;
        }
    }
}
