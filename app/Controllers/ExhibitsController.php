<?php

namespace App\Controllers;

use App\Models\ExhibitModel;
use Codeignitor\Controller; 
class ExhibitsController extends BaseController{
    
    public function index()
    {
        $exhibitModel = new ExhibitModel();
        $exhibits = $exhibitModel->findAll();
        $data["exhibits"] = $exhibits;

        return view('exhibits', $data); // Your exhibits view file
    }
    protected function getExhibits()
    {
        $exhibitModel = new ExhibitModel();
        return $exhibitModel->findAll();
    }
    
    public function editExhibit($id) {
        $exhibitModel = new ExhibitModel();
        $data['exhibit'] = $exhibitModel->find($id);
    
        return view('cms/edit_exhibit', $data);
    }
    
    public function updateExhibit($id) {
        $exhibitModel = new ExhibitModel();
    
        $data = [
            'title' => $this->request->getPost('exhibit_title'),
            'description' => $this->request->getPost('exhibit_description'),
        ];
    
        if ($this->request->getFile('exhibit_image')->isValid()) {
            $image = $this->request->getFile('exhibit_image');
            $imageName = $image->getRandomName();
            $image->move(WRITEPATH . 'uploads', $imageName);
            $data['image'] = $imageName;
        }
    
        $exhibitModel->update($id, $data);
    
        return redirect()->to('/cms/dashboard')->with('message', 'Exhibit updated successfully.');
    }
    
    public function addExhibit()
    {
        $session = session();
        $model = new ExhibitModel(); // Ensure you have an ExhibitModel for the exhibits table
    
        // Validate the incoming request data
        if (!$this->validate([
            'exhibit_title' => 'required|min_length[3]|max_length[255]',
            'exhibit_description' => 'required|min_length[10]',
            'exhibit_image' => 'uploaded[exhibit_image]|is_image[exhibit_image]|max_size[exhibit_image,2048]'
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
    
        // Handle file upload
        $file = $this->request->getFile('exhibit_image');
        $fileName = $file->getRandomName(); // Get a random file name
        $file->move(WRITEPATH . 'uploads', $fileName); // Move the file to the uploads directory
    
        // Prepare the data for insertion
        $data = [
            'title' => $this->request->getPost('exhibit_title'),
            'description' => $this->request->getPost('exhibit_description'),
            'image' => $fileName // Store the file name in the database
        ];
    
        // Save the exhibit to the database
        if ($model->save($data)) {
            $session->setFlashdata('success', 'Exhibit added successfully.');
        } else {
            $session->setFlashdata('error', 'Failed to add exhibit.');
        }
    
        return redirect()->to('/cms/dashboard');
    }
    

}
