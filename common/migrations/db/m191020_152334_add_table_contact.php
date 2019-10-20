<?php

use yii\db\Migration;

/**
 * Class m191020_152334_add_table_contact
 */
class m191020_152334_add_table_contact extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('contact', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'subject' => $this->string()->notNull(),
            'body' => $this->text()->notNull(),
            'phone' => $this->string()->notNull(),
            'created_at' => $this->integer()->defaultExpression('cast(extract(epoch from current_timestamp) as integer)')
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('contact');
    }
}
