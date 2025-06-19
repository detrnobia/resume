<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileModel extends Model
{
    protected $table = 'contact';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'title', 'photo', 'email', 'phone', 'address', 'lang'];
}