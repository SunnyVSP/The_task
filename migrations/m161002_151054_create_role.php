<?php

use yii\db\Migration;

class m161002_151054_create_role extends Migration
{
    public function up()
    {
        $this->createTable('{{%role}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%role}}');
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
