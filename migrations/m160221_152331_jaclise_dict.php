<?php

use yii\db\Schema;
use yii\db\Migration;

class m160221_152331_jaclise_dict extends Migration
{
    public function up()
    {
        // MySql table options
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';

        // table blog_catalog
        $this->createTable(
            '{{%jaclise_dict}}',
            [
                'id' => Schema::TYPE_PK,
                'key' => Schema::TYPE_STRING . '(32) NOT NULL',
                'type' => Schema::TYPE_STRING . '(32) NOT NULL',
                'value' => Schema::TYPE_STRING . '(50)',
                'note' => Schema::TYPE_STRING . '(255)',
                'order' => Schema::TYPE_INTEGER . ' NOT NULL DEFAULT 50',
            ],
            $tableOptions
        );


    }

    public function down()
    {
        echo "m160221_152331_jaclise_dict cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
