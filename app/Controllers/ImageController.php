<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class ImageController extends Controller
{
    public function view($image)
    {
        // The path to the writable uploads folder
        $filePath = WRITEPATH . 'uploads/' . $image;

        // Checking if the file exists before serving
        if (file_exists($filePath)) {
            // Set the appropriate headers
            $this->response->setHeader('Content-Type', mime_content_type($filePath));
            $this->response->setHeader('Content-Length', filesize($filePath));
            $this->response->setHeader('Content-Disposition', 'inline; filename="' . basename($filePath) . '"');

            // Read the file and return the response
            return $this->response->setBody(file_get_contents($filePath));
        } else {
            // Return a 404 response if the file doesn't exist
            return $this->response->setStatusCode(404, 'File not found');
        }
    }
}
