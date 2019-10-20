<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "review".
 *
 * @property int $id
 * @property int $user_id
 * @property string $comment
 * @property int $created_at
 *
 * @property User $user
 */
class Review extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'review';
    }

    public function __construct($config = [])
    {
        $this->user_id = Yii::$app->user->id;
        parent::__construct($config);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'comment'], 'required'],
            [['user_id', 'created_at'], 'integer'],
            [['comment'], 'string'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'Пользователь',
            'comment' => 'Комментарий',
            'created_at' => 'Время создания',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }
}
