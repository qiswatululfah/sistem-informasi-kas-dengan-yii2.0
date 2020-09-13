<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data_mahasiswa".
 *
 * @property string $nim
 * @property string $nama
 * @property string $alamat
 * @property string $jurusan
 * @property int $semester
 * @property string $jenis_kel
 * @property string $agama
 * @property string $kelas
 */
class DataMahasiswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_mahasiswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'alamat', 'jurusan', 'semester', 'jenis_kel', 'agama', 'kelas'], 'required'],
            [['semester'], 'integer'],
            [['kelas'], 'string'],
            [['nim', 'nama', 'alamat', 'jurusan', 'jenis_kel', 'agama'], 'string', 'max' => 50],
            [['nim'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nim' => 'Nim',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'jurusan' => 'Jurusan',
            'semester' => 'Semester',
            'jenis_kel' => 'Jenis Kel',
            'agama' => 'Agama',
            'kelas' => 'Kelas',
        ];
    }

    public function getDisplayname()
    {
        $kode = $this->nim." - ".$this->nama;
        return $kode;
    }

    public function getviewReport()
    {
        $id = $this->nim;
        return $id;
    }

    
}
