<?php 
namespace App\Models;

use CodeIgniter\Model;

class estacion extends Model{
    protected $table      = 'estacion';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['temperatura','humedad','presion','altitud',];
}