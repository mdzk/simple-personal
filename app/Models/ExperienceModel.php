<?php

namespace App\Models;

use CodeIgniter\Model;

class ExperienceModel extends Model
{
    protected $table         = 'experience';
    protected $primaryKey    = 'id_experience';
    protected $allowedFields = ['name', 'description', 'id_user'];
}