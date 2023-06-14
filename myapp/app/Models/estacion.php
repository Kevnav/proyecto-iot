<?php 
namespace App\Models;

use CodeIgniter\Model;

class estacion extends Model{
    protected $table      = 'estacion';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['temperatura','humedad','presion','altitud',];


    public function getGoogleLine(){
        $aux = $this->select('id,temperatura,humedad,presion,altitud')->orderBy('id', 'asc')->findAll();
        if (empty($aux)) 
            return [];

        foreach ($aux as $value)
            $arr[] = [intval($value['id']),intval($value['temperatura']),intval($value['humedad']),
            intval($value['presion'],intval($value['altitud']))];

        return $arr;
    }
}