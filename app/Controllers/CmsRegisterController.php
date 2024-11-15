<?php
namespace App\Controllers;

use App\Models\UserModel;

class CmsRegisterController extends BaseController
{
    public function index()
    {
        return view('cms/register'); // Display the registration form
    }

    public function register()
    {
        $model = new UserModel();
        $session = session();

        // Validate the form inputs (username and password)
        $rules = [
            'username' => 'required|min_length[3]|max_length[20]|is_unique[users.username]',
            'password' => 'required|min_length[8]',
            'confirm_password' => 'matches[password]',
        ];

        if ($this->validate($rules)) {
            // Collect data
            $data = [
                'username' => $this->request->getVar('username'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'role' => 'admin', // Set role as 'admin' for CMS registration
            ];

            // Save the new admin user
            $model->save($data);
            $session->setFlashdata('success', 'Admin registered successfully.');

            return redirect()->to('/cms/login');
        } else {
            // Validation failed, show errors
            $data['validation'] = $this->validator;
            return view('cms/register', $data);
        }
    }
}
