<?php
namespace App\Models;
use CodeIgniter\Model;

class OrgModel extends Model
{
    protected $table = 'org';
    protected $allowedFields = ['name ', 'role', 'year', 'description', 'resume_id'];
}
