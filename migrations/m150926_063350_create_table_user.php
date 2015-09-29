<?php

use yii\db\Schema;
use yii\db\Migration;

class m150926_063350_create_table_user extends Migration
{
    public function safeUp()
    {
        $this->execute("
            CREATE TABLE IF NOT EXISTS `blg_user` (
              `id` INT NOT NULL AUTO_INCREMENT,
              `username` VARCHAR(128) NOT NULL,
              `surname` VARCHAR(45) NOT NULL,
              `name` VARCHAR(45) NOT NULL,
              `password` VARCHAR(255) NOT NULL,
              `salt` VARCHAR(255) NOT NULL,
              `auth_key` VARCHAR(255) NULL DEFAULT NULL,
              `access_token` VARCHAR(255) NULL DEFAULT NULL,
              `create_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `username_UNIQUE` (`username` ASC))
            ENGINE = InnoDB DEFAULT CHARSET UTF8;
        ");
    }

    public function safeDown()
    {
        $this->execute("
            DROP TABLE IF EXISTS `blg_user`
        ");
    }
}
