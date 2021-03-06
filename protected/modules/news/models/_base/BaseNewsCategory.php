<?php

/**
 * This is the model base class for the table "news_category".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "NewsCategory".
 *
 * Columns in table "news_category" available as properties of the model,
 * and there are no model relations.
 *
 * @property string $id
 * @property string $root
 * @property string $lft
 * @property string $rgt
 * @property integer $level
 * @property string $name
 * @property integer $enable
 * @property string $group_code
 * @property integer $mbr_count
 * @property string $link_to
 *
 */
abstract class BaseNewsCategory extends GxActiveRecord
{

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'news_category';
    }

    public static function representingColumn()
    {
        return 'name';
    }

    public function rules()
    {
        return array(
            array(' name', 'required'),
            array('level, enable, mbr_count', 'numerical', 'integerOnly' => true),
            array('root, lft, rgt', 'length', 'max' => 10),
            array('name', 'length', 'max' => 255),
            array('group_code', 'length', 'max' => 100),
            array('link_to', 'length', 'max' => 60),
            array('root, enable, group_code, mbr_count, link_to', 'default', 'setOnEmpty' => true, 'value' => null),
            array('id, root, lft, rgt, level, name, enable, group_code, mbr_count, link_to', 'safe', 'on' => 'search'),
        );
    }

    public function relations()
    {
        return array();
    }

    public function pivotModels()
    {
        return array();
    }

    public function attributeLabels()
    {
        return array(
            'id' => Yii::t('news_category', 'id'),
            'root' => Yii::t('news_category', 'root'),
            'lft' => Yii::t('news_category', 'lft'),
            'rgt' => Yii::t('news_category', 'rgt'),
            'level' => Yii::t('news_category', 'level'),
            'name' => Yii::t('news_category', 'name'),
            'enable' => Yii::t('news_category', 'enable'),
            'group_code' => Yii::t('news_category', 'group_code'),
            'mbr_count' => Yii::t('news_category', 'mbr_count'),
            'link_to' => Yii::t('news_category', 'link_to'),
        );
    }

    public function search()
    {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id, true);
        $criteria->compare('root', $this->root, true);
        $criteria->compare('lft', $this->lft, true);
        $criteria->compare('rgt', $this->rgt, true);
        $criteria->compare('level', $this->level);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('enable', $this->enable);
        $criteria->compare('group_code', $this->group_code, true);
        $criteria->compare('mbr_count', $this->mbr_count);
        $criteria->compare('link_to', $this->link_to, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
}