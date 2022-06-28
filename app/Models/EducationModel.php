<?php

namespace App\Models;

use CodeIgniter\Model;

class EducationModel extends Model
{
    protected $table         = 'education';
    protected $primaryKey    = 'id_education';
    protected $allowedFields = ['name', 'description', 'id_user'];
}