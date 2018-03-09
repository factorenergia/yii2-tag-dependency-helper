<?php

namespace factorenergia\TagDependencyHelper\tests\models;

use factorenergia\TagDependencyHelper\CacheableActiveRecord;
use factorenergia\TagDependencyHelper\TagDependencyTrait;

/**
 * Class PostNoTrait
 * @property integer $author_id
 * @property string $text
 */
class PostNoTrait extends \yii\db\ActiveRecord
{

    public function behaviors()
    {
        return [
            'CacheableActiveRecord' => [
                'class' => CacheableActiveRecord::className(),
            ],
        ];
    }


    public static function tableName()
    {
        return '{{%post}}';
    }

}