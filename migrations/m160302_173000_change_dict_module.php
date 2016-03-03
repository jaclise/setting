<?php

use yii\db\Schema;
use yii\db\Migration;

class m160302_173000_change_dict_module extends Migration
{
    public function up()
    {
       $this->renameTable('{{%jaclise_dict}}','{{%system_dict}}');

    }

    public function down()
    {
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
