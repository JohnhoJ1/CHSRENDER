<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class TestConnectionController extends BaseController
{
    public function index()
    {
        echo "Attempting database connection...";
        
        // Try connecting to the database
        $db = \Config\Database::connect();

        if ($db->connID) {
            echo "Connected successfully using CodeIgniter's database connection.";
        } else {
            echo "Connection failed: " . $db->error();
        }
    }
}
