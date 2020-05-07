<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%billing}}`.
 */
class m200506_131457_create_billing_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%billing}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%billing}}');
    }
}
