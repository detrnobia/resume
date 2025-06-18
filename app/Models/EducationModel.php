<?php
namespace App\Models;
use CodeIgniter\Model;

class EducationModel extends Model
{
    protected $table = 'education';
    protected $allowedFields = ['degree', 'school', 'year'];
}
