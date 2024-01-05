<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "libbooks".
 *
 * @property int $ID
 * @property string $name
 * @property string $author
 * @property string|null $publishing
 * @property string $year
 * @property string|null $genre
 * @property int $length
 * @property int $subscription
 * @property string|null $imgFile
 * @property UploadedFile $imageFile;
 * 
 */
class Libbooks extends \yii\db\ActiveRecord
{
    /**
     * @var UploadedFile
     */
    public $imageFile;

    public string $Path;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'libbooks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'author', 'year', 'length'], 'required'],
            [['name', 'author', 'publishing', 'genre', 'imgFile'], 'string'],
            [['imgFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
            [['length'], 'integer'],
        ];
    }

    public function upload()
    { 
        $this -> imageFile = UploadedFile::getInstance($this, 'imgFile');
        if ($this->validate()) {
            // $this->save();
            $this->imageFile -> saveAs('uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension, false);
            // $this->imgFile -> saveAs('uploads/' . $this->imgFile->baseName . '.' . $this->imgFile->extension, false);            
            $this->imgFile = 'uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension;
            $this->save();
            return true;
        } else {
            return false;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'name' => 'Назва',
            'author' => 'Автор',
            'publishing' => 'Видавництво',
            'year' => 'Рік випуску',
            'genre' => 'Жанр',
            'length' => 'Довжина',            
            'imgFile' => 'Img FIle',
        ];
    }
}
