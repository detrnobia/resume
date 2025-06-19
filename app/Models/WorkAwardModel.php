<?php
namespace App\Models;
use CodeIgniter\Model;

class WorkAwardModel extends Model
{
    protected $table = 'work_awards';
    protected $allowedFields = ['role', 'company', 'year'];
}
