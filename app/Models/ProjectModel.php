<?php
namespace App\Models;
use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $table = 'projects';
    protected $allowedFields = ['name ', 'role', 'year', 'description', 'resume_id'];
}
