<?php

use yii\db\Migration;

/**
 * Class m191020_140934_add_table_reviews
 */
class m191020_140934_add_table_reviews extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('review', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'comment' => $this->text()->notNull(),
            'created_at' => $this->integer()->defaultExpression('cast(extract(epoch from current_timestamp) as integer)')
        ]);

        $this->addForeignKey('review_user', 'review', 'user_id', 'user', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('review_user', 'review');
        $this->dropTable('review');
    }
}
