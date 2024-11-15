<?php
namespace App\Models;

use CodeIgniter\Model;

class RoleModel extends Model
{
    protected $table = 'roles'; // Assuming you have a roles table
    protected $primaryKey = 'id'; // Assuming 'id' is the primary key
    protected $allowedFields = ['name']; // Assuming 'name' is the field for the role name
}
