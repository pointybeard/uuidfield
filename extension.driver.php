<?php

    class extension_uuidfield extends Extension
    {
        public function uninstall()
        {
            Symphony::Database()->query("DROP TABLE `tbl_fields_uuid`");
        }

        public function update()
        {
            return Symphony::Database()
                ->query(
                    "ALTER TABLE `tbl_fields_uuid` DROP COLUMN `auto_generate`;"
            );
        }

        public function install()
        {
            return Symphony::Database()
                ->query(
                    "CREATE TABLE IF NOT EXISTS `tbl_fields_uuid` (
                      `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
                      `field_id` int(11) unsigned NOT NULL,
                      PRIMARY KEY (`id`),
                      UNIQUE KEY `field_id` (`field_id`)
                    ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;"
            );
        }
    }
