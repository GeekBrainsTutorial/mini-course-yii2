<?php

use yii\db\Schema;
use yii\db\Migration;

class m151012_095036_add_field_image extends Migration
{
    public function safeUp()
    {
        $this->execute("
            ALTER TABLE blg_blog ADD COLUMN image VARCHAR(255) AFTER description;
        ");
    }

    public function safeDown()
    {
        $this->execute("
            ALTER TABLE blg_blog DROP COLUMN image;
        ");
    }
}
