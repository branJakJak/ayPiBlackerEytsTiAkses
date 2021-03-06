<?php

/**
 * This is the model class for table "tbl_ipaddress".
 *
 * The followings are the available columns in table 'tbl_ipaddress':
 * @property integer $id
 * @property string $ip_address
 * @property string $status
 * @property string $notes
 * @property string $date_created
 * @property string $date_updated
 */
class Ipaddress extends CActiveRecord
{
    const IP_ADDRESS_STATUS_WHITELIST =  'allow';
    const IP_ADDRESS_STATUS_BLACKLIST =  'block';

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'tbl_ipaddress';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('ip_address,notes', 'required'),
            array('ip_address', 'unique', 'message' => '{attribute} "{value}" exists in the database.'),
            array('ip_address', 'application.extensions.ipvalidator.IPValidator', 'version' => 'v4'),
            array('ip_address, status', 'length', 'max' => 255),
            array('date_created, date_updated', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, ip_address, status, notes, date_created, date_updated', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array();
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'ip_address' => 'Ip Address',
            'status' => 'Status',
            'notes' => 'Notes',
            'date_created' => 'Date Created',
            'date_updated' => 'Date Updated',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search()
    {
        $criteria = new CDbCriteria;
        $criteria->compare('id', $this->id);
        $criteria->compare('ip_address', $this->ip_address, true);
        $criteria->compare('status', $this->status, true);
        $criteria->compare('notes', $this->notes, true);
        $criteria->compare('date_created', $this->date_created, true);
        $criteria->compare('date_updated', $this->date_updated, true);
        $criteria->order = "date_created DESC";
        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => Yii::app()->user->getState( 'pageSize', Yii::app()->params[ 'defaultPageSize' ] ),
            )
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Ipaddress the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function behaviors()
    {
        return array(
            'CTimestampBehavior' => array(
                'class' => 'zii.behaviors.CTimestampBehavior',
                'createAttribute' => 'date_created',
                'updateAttribute' => 'date_updated',
            ),
            'RebuildHtAccessBehavior' => array(
                'class' => "application.behaviors.RebuildHtAccessBehavior",
                'htaccessFile' => Yii::app()->params['htaccess_location'],
            )
        );
    }

    protected function afterSave()
    {
        $result = $this->rebuildHtAccessFile();
        parent::afterSave();
    }
    protected function afterDelete()
    {
        $ipAddressStr = $_SERVER['REMOTE_ADDR'];
        $logMessage = sprintf("%s deleted %s", $ipAddressStr,$this->ip_address);
        Yii::log($logMessage, CLogger::LEVEL_INFO,'delete_action_log');
        $result = $this->rebuildHtAccessFile();
        parent::afterDelete();
    }
}
