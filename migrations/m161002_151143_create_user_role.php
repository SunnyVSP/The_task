<?php

use yii\db\Migration;

class m161002_151143_create_user_role extends Migration
{
    public function up()
    {
        $this->createTable('{{%user_role}}', [
            'project_id' => $this->integer()->notNull(),
            'role_id' => $this->integer()->notNull(),
            'name' => $this->string(255)->notNull(),
        ]);

        $this->addPrimaryKey('pk-user_role', '{{%user_role}}', ['project_id', 'role_id']);

        $this->addForeignKey('fk-user_role-project', '{{%user_role}}', 'project_id', '{{%project}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk-user_role-role', '{{%user_role}}', 'role_id', '{{%role}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%user_role}}');
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
