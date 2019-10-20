<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property int $name
 * @property int $email
 * @property string $subject
 * @property string $body
 * @property string $phone
 * @property int $created_at
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'subject', 'body', 'phone'], 'required'],
            [['created_at'], 'integer'],
            ['email', 'email'],
            [['phone'], 'match', 'pattern' => '/^(\+)[0-9]{1} (\()[0-9]{3}(\)) [0-9]{3}-[0-9]{4}$/i', 'message' => Yii::t('backend', 'Введите телефон в формате: +7 (000) 000-0000')],
            [['body'], 'string'],
            [['subject', 'name', 'email', 'phone'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'email' => 'Email',
            'subject' => 'Тема',
            'body' => 'Сообщение',
            'phone' => 'Телефон',
            'created_at' => 'Created At',
        ];
    }
}
