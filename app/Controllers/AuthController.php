<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\RoleModel;
use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function __construct()
    {
        helper(['url', 'form', 'session']);
    }

    // Display the CMS login form
    public function cmsLogin()
    {
        return view('cms/login');
    }

    // Process CMS login
// Process CMS login
public function processLogin()
{
    $session = session();
    $model = new UserModel();
    
    // Get input values
    $username = $this->request->getVar('username');
    $password = $this->request->getVar('password');
    
    // Fetch user record by username
    $user = $model->where('username', $username)->first();
    
    if ($user && password_verify($password, $user['password'])) {
        // Fetch the role based on role_id
        $roleModel = new RoleModel(); // Ensure you have a RoleModel to fetch role information
        $role = $roleModel->find($user['role_id']);

        if ($role) {
            // Set the session data based on role name
            $session->set([
                'id' => $user['id'],
                'username' => $user['username'],
                'role' => $role['role_name'], // Assuming 'role_name' is the field for the role name
                'logged_in' => true
            ]);

            // Redirect based on role
            if ($role['role_name'] === 'admin') { // Adjust the role name as necessary
                return redirect()->to('/cms/admin_dashboard');
            } elseif ($role['role_name'] === 'content_manager') { // Adjust this according to your role names
                return redirect()->to('/cms/dashboard'); // Update this to the actual path for content managers
            } else {
                return redirect()->to('/cms/user_dashboard'); // Default redirect for other roles
            }
        } else {
            $session->setFlashdata('error', 'Role not found.');
        }
    } else {
        $session->setFlashdata('error', 'Invalid login credentials.');
    }
    
    return redirect()->to('/cms/login');
}



    // Logout and destroy session
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/cms/login');
    }
}
