<?php

namespace App\Models; // Use this if you are in CodeIgniter 4

use CodeIgniter\Model; // Use this if you are in CodeIgniter 4

class ExhibitModel extends Model { // Extend Model for CodeIgniter 4
    // For CodeIgniter 3, extend CI_Model

    protected $table = 'exhibits'; // Your database table name
    protected $primaryKey = 'id'; // Your primary key
    protected $allowedFields = ['title', 'description', 'image']; // Add your allowed fields

    // Function to get all exhibits
    public function get_all_exhibits() {
        return $this->findAll(); // Fetch all records
    }
}
