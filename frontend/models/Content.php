<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "content".
 *
 * @property int $id
 * @property string $title
 * @property string $introtext
 * @property string $fulltext
 * @property int $state
 * @property string $created
 * @property int $created_by
 * @property string $modified
 * @property int $modified_by
 * @property string $publish_up
 * @property string $publish_down
 * @property string $images
 * @property int $Category
 *
 * @property User $createdBy
 * @property User $modifiedBy
 * @property Category $category
 */
class Content extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'content';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'introtext', 'fulltext', 'state', 'created', 'created_by', 'modified', 'modified_by', 'publish_up', 'publish_down', 'images', 'Category'], 'required'],
            [['introtext', 'fulltext'], 'string'],
            [['state', 'created_by', 'modified_by', 'Category'], 'integer'],
            [['created', 'modified', 'publish_up', 'publish_down'], 'safe'],
            [['title', 'images'], 'string', 'max' => 255],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
            [['modified_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['modified_by' => 'id']],
            [['Category'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['Category' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'introtext' => Yii::t('app', 'Introtext'),
            'fulltext' => Yii::t('app', 'Fulltext'),
            'state' => Yii::t('app', 'State'),
            'created' => Yii::t('app', 'Created'),
            'created_by' => Yii::t('app', 'Created By'),
            'modified' => Yii::t('app', 'Modified'),
            'modified_by' => Yii::t('app', 'Modified By'),
            'publish_up' => Yii::t('app', 'Publish Up'),
            'publish_down' => Yii::t('app', 'Publish Down'),
            'images' => Yii::t('app', 'Images'),
            'Category' => Yii::t('app', 'Category'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModifiedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'modified_by']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'Category']);
    }
}
