<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $table         = 'project';
    protected $primaryKey    = 'id_project';
    protected $allowedFields = ['name', 'description', 'id_user'];
}