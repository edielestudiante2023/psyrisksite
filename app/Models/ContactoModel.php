<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactoModel extends Model
{
    protected $table         = 'contactos';
    protected $primaryKey    = 'id';
    protected $returnType    = 'array';
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $allowedFields = [
        'nombre',
        'email',
        'telefono',
        'empresa',
        'asunto',
        'mensaje',
        'ip',
        'leido',
    ];
}
