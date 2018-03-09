<?php

namespace factorenergia\TagDependencyHelper\tests\models;

use factorenergia\TagDependencyHelper\CacheableActiveRecord;
use factorenergia\TagDependencyHelper\TagDependencyTrait;

/**
 * Class Post
 * @property integer $author_id
 * @property string $text
 */
class PostCompositeNoOverride extends \yii\db\ActiveRecord
{
    use TagDependencyTrait;

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