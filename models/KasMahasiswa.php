<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kas_mahasiswa".
 *
 * @property int $id_kas
 * @property string $nim
 * @property float $setor
 * @property string $tglsetor
 */
class KasMahasiswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kas_mahasiswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'setor'], 'required'],
            [['setor'], 'number'],
            [['tglsetor'], 'safe'],
            [['nim'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kas' => 'Id Kas',
            'nim' => 'Nim',
            'setor' => 'Setor',
            'tglsetor' => 'Tglsetor',
        ];
    }

    public function getNim0()
    {
        return $this->hasOne(DataMahasiswa::className(), ['nim' => 'nim']);
    }
}
