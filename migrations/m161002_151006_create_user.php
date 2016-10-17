<?php

use yii\db\Migration;

class m161002_151006_create_user extends Migration
{
    public function up()
    {
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'city_id' => $this->integer(),
            'name' => $this->string(255)->notNull(),
            'email' => $this->string(255)->notNull(),

        ]);

        $this->addForeignKey('user_city', '{{%user}}', 'city_id', '{{%city}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
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
