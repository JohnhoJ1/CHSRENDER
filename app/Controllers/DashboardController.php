<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ExhibitModel;

class DashboardController extends Controller
{
    public function index()
    {
        return view('cms/dashboard'); // Ensure you have a view file named dashboard.php
    }
   

}
