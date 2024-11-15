<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ExhibitModel;
class CMSController extends BaseController
{
    protected $userModel;

    
    public function __construct()
{
   
    // Ensure the user is logged in, otherwise redirect to login page
    if (!session()->get('logged_in')) {
        return redirect()->to('/cms/login')->send(); // Added send() to enforce redirection
        exit; // Added exit to prevent further execution
    }
    $this->userModel = new UserModel();
}


    public function index()
    {
        $session = session();
        $userRole = $session->get('role'); // Get the user's role from the session
    
        
    }
    public function adminDashboard()
{
    
    $session = session();
    if ($session->get('role') !== 'admin') {
        return redirect()->to('/cms/login')->with('error', 'Access restricted.');
    }
    $data = [
        'title' => 'Admin Dashboard',
        'contentManagers' => (new UserModel())->where('role_id', 2)->findAll(),
    ];
    return view('cms/admin_dashboard', $data);
}

    public function contentManagerDashboard()
{
    $session = session();
    if ($session->get('role') !== 'content_manager') {
        return redirect()->to('/cms/login')->with('error', 'Access restricted.');
    }
    // Fetch exhibits from the database
    $exhibitModel = new ExhibitModel();
    $data['exhibits'] = $exhibitModel->findAll();
    return view('cms/dashboard',$data);
}

    

    public function addContentManager()
{
    $username = $this->request->getPost('username');
    $email = $this->request->getPost('email');
    $password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);

    $data = [
        'username' => $username,
        'email' => $email,
        'password' => $password,
        'role_id' => 2, // Assuming '2' represents the content manager role
    ];

    $db = \Config\Database::connect();
    $builder = $db->table('users');
    $builder->insert($data);

    return redirect()->to('/cms/admin_dashboard')->with('message', 'Content Manager added successfully!');
}
public function editContentManager($id)
{
    $model = new UserModel();
    $data['manager'] = $model->find($id);
    
    // Load the edit view and pass the manager data
    return view('cms/edit_content_manager', $data);
}
public function deleteContentManager($id)
{
    $model = new UserModel();
    $model->delete($id);

    // Redirect back to the dashboard with a success message
    return redirect()->to('/cms/admin_dashboard')->with('message', 'Content manager deleted successfully.');
}
public function updateContentManager($id)
{
    $model = new UserModel();

    // Validate the incoming request data
    $this->validate([
        'username' => 'required|min_length[3]|max_length[50]',
        'email' => 'required|valid_email'
    ]);

    // Check if validation fails for each field
    if ($this->validator->hasError('username') || $this->validator->hasError('email')) {
        return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    }

    // Prepare the data for update
    $data = [
        'username' => $this->request->getPost('username'),
        'email' => $this->request->getPost('email'),
    ];

    // Update the content manager
    $model->update($id, $data);

    // Redirect back to the admin dashboard with a success message
    return redirect()->to('/cms/admin_dashboard')->with('success', 'Content Manager updated successfully.');
}


}