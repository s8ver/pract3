<?php

use yii\db\Migration;

class m200202_180649_01_create_table_user extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'password_hash' => $this->string(60)->notNull(),
            'auth_key' => $this->string(32)->notNull(),
            'confirmed_at' => $this->integer(),
            'unconfirmed_email' => $this->string(),
            'blocked_at' => $this->integer(),
            'registration_ip' => $this->string(45),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'flags' => $this->integer()->notNull()->defaultValue('0'),
            'last_login_at' => $this->integer(),
        ], $tableOptions);

        $this->createIndex('user_unique_email', '{{%user}}', 'email', true);
        $this->createIndex('user_unique_username', '{{%user}}', 'username', true);
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
