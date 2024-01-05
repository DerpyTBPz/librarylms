<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "libgenres".
 *
 * @property int $ID
 * @property string $genre
 */
class Libgenres extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'libgenres';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['genre'], 'required'],
            [['genre'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'genre' => 'Genre',
        ];
    }
}
