<?php

namespace app\models;

use Yii\base\Model;
use yii\helpers\ArrayHelper;

class GenresForm extends Model
{    
    public $book_id;
    public $genres_ids = [];
    

    public function rules()
    {
        return [
            ['book_id', 'required'],
            ['book_id', 'exist', 'targetClass' => Libbooks::className(), 'targetAttribute' => 'ID'],
            // each ID must exist in food table
            ['genre_ids', 'each', 'rule' => [
                'exist', 'targetClass' => Libgenres::className(), 'targetAttribute' => 'ID'
            ]],
        ];
    }    
    public function attributeLabels()
    {
        return [
            'book_id' => 'book',
            'genre_ids' => 'genres',
        ];
    }
    public function loadFavorites()
    {
        $this->genre_ids = [];
        $css = Libbooks::find()->where(['book_id' => $this->book_id])->all();
        foreach($css as $cs) {
            $this->genre_ids[] = $cs->ID;
        }
    }
    public function saveFavorites()
    {
        Libbooks::deleteAll(['book_id' => $this->book_id]);
        if (is_array($this->genre_ids)) {
            foreach($this->genre_ids as $ID) {
                $cs = new Libbooks();
                $cs->book_id = $this->book_id;
                $cs->ID = $ID;
                $cs->save();
            }
        }       
    }
    public static function getAvailableFoods()
    {
        $bks = Libgenres::find()->orderBy('genre')->asArray()->all();
        $items = ArrayHelper::map($bks, 'ID', 'genre');
        return $items;
    }
}
?>