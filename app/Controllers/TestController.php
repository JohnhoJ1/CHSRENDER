<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Database;

class TestController extends Controller
{
    public function checkDatabaseConnection()
    {
        $db = Database::connect();

        if ($db->connID) {
            return "Database connection successful!";
        } else {
            return "Database connection failed!";
        }
    }
}
