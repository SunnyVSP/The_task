<?php

use yii\db\Migration;

class m161002_151018_create_status extends Migration
{
    public function up()
    {
        $this->createTable('{{%status}}', [
            'id' => $this->primaryKey(),
            'value' => $this->string(255)->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%status}}');
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
